<?php


//自定义数据库单表信息操作类Model
//数据库的连接配置信息
define("DSN","mysql:hostname=localhost:8080;dbname=boke;"); //数据库主机名
define("USER","root");      //数据库账号
define("PASS","24415lxs");          //数据库密码
//定义一个Model
class Model{
    protected $tabName; //表名
    protected $pk = "Id"; //表的主键名
    protected $fields=array(); //表字段信息

    //构造方法，实现了表名初始化，数据库的连接
    public function __construct($tabName){
        $this->tabName = $tabName;
        //连接数据库
        try {
          $this->pdo = new PDO(DSN,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8'));
          //  echo "连接成功！";
        } catch (Exception $e) {
            echo "连接失败！".$e -> getMessage();
        }
    }
    //获取所有数据信息
    public function select(){

        $sql = "SELECT * FROM `{$this->tabName}` ";
        // print_r($sql);
        try {
            $statm=$this->pdo->prepare($sql);
            $b=$statm->execute();
            while ($row=$statm->fetch(PDO::FETCH_ASSOC)) {
                $arr1[]=$row;
                // return $arr1;
              }

          } catch (Exception $e) {
                echo "执行不正确！".$e->getMessage();
            }
            return $arr1;
    }

    //获取排序数据信息
    public function zhixing($sql){
      try {
          $statm=$this->pdo->prepare($sql);
          $b=$statm->execute();
          while ($row=$statm->fetch(PDO::FETCH_ASSOC)) {
              @$arr1[]=$row;
            }
        } catch (Exception $e) {
              echo "执行不正确！".$e->getMessage();
          }
        return @$arr1;
    }

    //统计数据条数的方法
    public function count($where){
        $sql = "select count(*) as total from {$this->tabName}{$where}";
        try {
            $statm=$this->pdo->prepare($sql);
            $b=$statm->execute();
            while ($row=$statm->fetch(PDO::FETCH_ASSOC)) {
                $arr[]=$row;
              }
          } catch (Exception $e) {
                echo "执行不正确！".$e->getMessage();
            }
          print_r($arr);
    }
    //执行添加
    public function insert($data=array()){
      //如果不给参数，则从POST中获取
        if(empty($data)){
            $data=$_POST;
        }
      $sql = "insert into {$this->tabName} values('".implode("','",$data)."')";
      try {
          $statm=$this->pdo->prepare($sql);
          $b=$statm->execute();
          while ($row=$statm->fetch(PDO::FETCH_ASSOC)) {
              return "添加成功";
            }
        } catch (Exception $e) {
              echo "执行不正确！".$e->getMessage();
              return "添加bu成功";
          }
    }
    //执行修改
    public function update($set){
        //拼装sql语句
        $sql = "UPDATE {$this->tabName} {$set}";
        //echo $sql;
        //执行修改
        try {
            $statm=$this->pdo->prepare($sql);
            $b=$statm->execute();
            while ($row=$statm->fetch(PDO::FETCH_ASSOC)) {
                print_r($row);
              }
          } catch (Exception $e) {
                echo "执行不正确！".$e->getMessage();
            }
    }
    //删除信息方法
    public function delete($pk,$id){
        $sql = "delete from {$this->tabName} where {$pk}={$id}";
        try {
            $statm=$this->pdo->prepare($sql);
            $b=$statm->execute();
            while ($row=$statm->fetch(PDO::FETCH_ASSOC)) {

              }
          } catch (Exception $e) {
                echo "执行不正确！".$e->getMessage();
            }
            return $row;
    }

    //封装limit分页条件
    public function limit($m,$n=0){
        if($n>0){
            $this->limit="{$m},{$n}";
        }else{
            $this->limit=$m;
        }
        return $this;
    }

}
// $model=new Model('product');
// $select=$model->select();print_r($select);//执行查询操作
// $insert=$model->insert($data = array('5','小紫','11111','2','女','11111','12sddedds'));//执行插入
// $set="SET `UserName` = 'xx' WHERE `Id` = 10";
// $update=$model->update($set);//执行更新
//$delect=$model->delete('Id','16');//执行删除

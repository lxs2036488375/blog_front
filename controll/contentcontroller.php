<?php
include '../model/Model.class.php';

$num=hexdec(substr( $uuid, 0, 1 ));//获取uuid的第一位数字
// print_r($search[$i]['uuid']);
// echo "<br/><hr/><br/>";
$tab="article".$num;//获取表名
$model=new Model($tab);

@$arr=$model->select();//print_r($select);//执行查询操作
for ($i=0; $i <count($arr) ; $i++) {
    if($arr[$i]['unid']==$uuid){
    	$content=str_replace("\n", '</p><p>', $arr[$i]['content']);
      echo "<div class='content'>
                <div style='height:920px;'>
            <label style='width:600px;color:white;height:20px;text-align:center;vertical-align:center;
            color: rgb(0, 0, 0);font-size: 20px;font-family: 微软雅黑;font-weight: normal;background-color: transparent;'><center>{$arr[$i]['title']}</center></label>
            <br/><br/>
            <span><label style='float:left;margin-left:30px;color:black;font-family: 微软雅黑;'>作者：{$arr[$i]['author']}</label> <label style='float:right;margin-right:30px;color:black;font-family: 微软雅黑;'>发表时间：{$arr[$i]['date']}</label> </span>
            <br/><br/>
            <p style='font-family: 宋体;color:black;'>{$arr[$i]['content']}</p>
            </div>
      </div>";


    }

}
 ?>

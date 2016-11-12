<?php
header("Content-type:text/html;charset=utf8");
include '../model/Model.class.php';
require "segment.php";
require '../composer/vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
$se=new segment();//new一个新的segment，引用中文分词类
$model1=new Model('index_article');//new，连接到表index_article
$title=$_POST['title'];
$abstract=$_POST['abstract'];
$content=$_POST['content'];
$kind=$_POST['kind'];
$quanxian=$_POST['quanxian'];
date_default_timezone_set('PRC');
$time=date('Y-m-d H:i:s',time('now'));
$content1=$se->get_keyword($content);
$abstract1=$se->get_keyword($abstract);
$title1=$se->get_keyword($title);
// echo $content1;
try {
    $uuid =  md5(Uuid::uuid4());
    $num=hexdec(substr( $uuid, 0, 1 ));//现获取uuid的第一位数字，然后将十六进制转换十进制
    echo "article".$num;
    $tab="article".$num;
    $model=new Model($tab);
    // echo "<br/><hr/><br/>";
    // echo $uuid;
    // echo "<br/><hr/><br/>";
    // echo $num;
    $insert=$model->insert($data = array($uuid,$title,$abstract,$content,'兰盛夏',$time,$kind,$quanxian));
    $insert1=$model1->insert($data = array($uuid,$content1,$title1,$abstract1,$time));
    echo '<script language="JavaScript">;alert("发表成功!");location.href="../view/boke.php";</script>;';
} catch (Exception $e) {
    echo "执行出错".$e->getMessage();
}
 ?>

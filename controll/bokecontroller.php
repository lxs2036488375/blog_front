<?php
@header("Content-Type:text/html;charset=utf8");
include '../model/Model.class.php';
include "../model/Page.class.php";

$model=new Model('index_article');
$search= $model->select();
$page = new Page(count($search), 10);
$sql="SELECT * FROM `index_article` order by 'uuid' {$page->limit}";
$arr=$model->zhixing($sql);
for ($i=0; $i <count($arr) ; $i++) {
	
	    $num=hexdec(substr( $arr[$i]['uuid'], 0, 1 ));//获取uuid的第一位数字
		$tab="article".$num;//获取表名
	    $model1=new Model($tab);//连接这个表的数据库
		$model1=new Model($tab);//连接这个表的数据库
	    $sql="SELECT * FROM `{$tab}` WHERE `unid`='{$arr[$i]['uuid']}'&&`author`='兰盛夏'";
	    $result=$model1->zhixing($sql);
		$result=$model->zhixing($sql);
	    echo '<li><div class="row_box">
	            <h2 class="title">
	            <a href="content.php?uuid='.$result[0]['unid'].'">'.$result[0]['title'].'</a>
	            <a href="#"style="float:right;margin-right:10px;">'.$result[0]['date'].'</a>
	            </h2></div><br>
	    		</li>';
}
					echo '<div style="float:left"><tr><td colspan="7" align="right">'.$page->fpage().'</td></tr></div><br><br><br>';
 ?>

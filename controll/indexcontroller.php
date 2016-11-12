<?php
header("Content-Type:text/html;charset=utf8");
include '../model/Model.class.php';
include '../model/page.class.php';
//	查找整个索引表
	$model=new Model('index_article');
	$search= $model->select();
//	分页
	$page = new Page(count($search), 4);
    $sql="SELECT * FROM `index_article` order by 'uuid' {$page->limit}";
    $arr=$model->zhixing($sql);
//	echo"<br><hr><br>";
//	遍历整个索引表
	for ($i=0; $i <count($arr) ; $i++) {
//	通过索引表查找原始表
    	$num=hexdec(substr( $arr[$i]['uuid'], 0, 1 ));//获取uuid的第一位数字
	    $tab="article".$num;//获取表名
	    $model1=new Model($tab);//连接这个表的数据库
	    $sql="SELECT * FROM `{$tab}` WHERE `unid`='{$arr[$i]['uuid']}'";
	    $result=$model1->zhixing($sql);
	      echo '<li><div class="row_box">
	            <div class="ti"></div><!--三角形-->
	            <div class="ci"></div><!--圆形-->
	            <h2 class="title"> <a href="content.php?uuid='.$result[0]['unid'].'">'.$result[0]['title'].'</a></h2>
	            <ul class="textinfo">
	                <a href="content.php?uuid='.$result[0]['unid'].'"><img src="../images/s1.jpg"></a>
	                <p> <a style="color:black" href="content.php?uuid='.$result[0]['unid'].'">'.$result[0]['abstract'].'</a></p>
	            </ul>
	            <ul class="details">
	                <li class="likes"><a href="#">10</a></li>
	                <li class="comments"><a href="#">34</a> </li>
	                <li class="icon_time"><a href="#">'.$result[0]['date'].'</a></li>
	            </ul>
	        	</div></li>';
}
	echo '<div style="float:left"><tr><td colspan="7" align="right">'.$page->fpage().'</td></tr></div><br><br><br>';
?>

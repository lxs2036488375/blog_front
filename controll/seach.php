<?php
header("Content-type:text/html;charset=utf8");
include '../model/Model.class.php';
require "segment.php";
include "str.php";

$ss=$_POST['s'];

$se=new segment();//中文分词
$s=$se->get_keyword($ss);

$model=new Model('insert_artical');//调用pdo类，匹配关键字
$sql="select uuid from index_article where match(content,title,abstract) AGAINST('".$s."'IN BOOLEAN MODE);";
$search= $model->zhixing($sql);

@$s=explode(" ",$s);//字符串变数组
for ($i=0; $i <count($search) ; $i++) {
  $num=hexdec(substr( $search[$i]['uuid'], 0, 1 ));//获取uuid的第一位数字
  $tab="article".$num;//获取表名
  $model1=new Model($tab);//连接这个表的数据库
  $result=$model1->select();
  for ($j=0; $j <count($result) ; $j++) {
        if ($result[$j]['unid']==$search[$i]['uuid']) {
					for($a=0;$a<count($s);$a++) {
						$result[$j]['content']= str_replace($s[$a],"<b style='color:red;'>".$s[$a]."</b>",$result[$j]['content']);
			      $result[$j]['title'] = str_replace($s[$a],"<span style='color:red;'>".$s[$a]."</span>",$result[$j]['title']); 	
					}
			    echo'<li><div class="row_box">
		           		 <div class="ti"></div>
		            	 <div class="ci"></div>
		             	 <h2 class="title"> <a href="content.php?uuid='.$result[$j]['unid'].'">'.$result[$j]['title'].'</a></h2>
		            	 <ul class="textinfo">
			                <a href="#"><img src="../images/s1.jpg"></a>
			                <p>'.$result[$j]['content'].'</p>
		            	 </ul>
			             <ul class="details">
			                <li class="likes"><a href="#">10</a></li>
			                <li class="comments"><a href="#">34</a> </li>
			                <li class="icon_time"><a href="#">'.$result[$j]['date'].'</a></li>
			             </ul>
        				</div></li>';
      }
    }
  }
 ?>

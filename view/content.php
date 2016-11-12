
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>博客</title>
<link href="../css/style.css" rel="stylesheet">
<link href="../css/animation.css" rel="stylesheet">
<link href="../css/lrtk.css" rel="stylesheet" />
<link href="../css/write.css" rel="stylesheet" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/js.js"></script>
</head>

<body>
<?php
include 'header.php';
 ?>
<div id="mainbody">
  <div class="info">
        <figure>
            <img src="../images/art.jpg" alt="秋。。。相知">
            <figcaption>
                <strong>渡人如渡己，渡己，亦是渡。</strong>
                当我们被误解时，会花很多时间去辩白。 但没有用，没人愿意听，大家习惯按自己的所闻、理解做出判别，每个人其实都很固执。与其努力且痛苦的试图扭转别人的评判，不如默默承受，给大家多一点时间和空间去了解。而我们省下辩解的功夫，去实现自身更久远的人生价值。其实，渡人如渡己，渡已，亦是渡人。
            </figcaption>
        </figure>
        <div class="card">
           <h1>我的名片</h1>
              <p>网名：★靜候誮開☆</p>
              <p>职业：山西大学2013级学生</p>
              <p>电话：18334793282</p>
              <p>Email：2036488375@qq.com</p>
              <ul class="linkmore">
                <li><a href="/" class="talk" title="给我留言"></a></li>
                <li><a href="/" class="address" title="联系地址"></a></li>
                <li><a href="/" class="email" title="给我写信"></a></li>
                <li><a href="/" class="photos" title="生活照片"></a></li>
                <li><a href="/" class="heart" title="关注我"></a></li>
              </ul>
        </div>
    </div>
<!--博客的列表开始-->
    <div class="blog_write">
        <div class="bloglist_write">
            <div class="title_write">
              <span >文章内容</span>
              <ul>
                <li><a href="boke.php">返回文章列表</a></li>
              </ul>
            </div>
            <div class="ct_t_write">
              <?php
              $uuid=$_REQUEST['uuid'];
               include '../controll/contentcontroller.php'; ?>
            </div>
        </div>
    <!--博客列表部分结束-->

    <!--blogs结束-->
</div>
<!--mainbody结束-->
<footer>
    <div class="foot-mid">
        <div class="links">
        	<h2>友情链接</h2>
            <ul>
            	<li><a href="#">吴亚平个人博客</a></li>
                <li><a href="#"> 帮助中心</a></li>
            </ul>
        </div>
        <div class="visitors">
        	<h2>最新评论</h2>
            <dl>
            	<dt><img src="../images/s1.jpg"></dt>
            	<dd>DanceSmile<time>49分钟前</time></dd>
                <dd>在<a href="#" class="title">如果要学习web前端开发，需要学习什么？</a>中评论:</dd>
                <dd class="remark">文章非常详细，我很喜欢.前端的工程师很少，我记得几年前yahoo花高薪招聘前端也招不到</dd>
            </dl>
             <dl>
            	<dt><img src="../images/s1.jpg"></dt>
            	<dd>DanceSmile<time>2小时前</time></dd>
                <dd>在<a href="#" class="title">芭蕾女孩的心事儿</a>中评论:</dd>
                <dd class="remark">我手机里面也有这样一个号码存在</dd>
            </dl>
             <dl>
            	<dt><img src="../images/s1.jpg"></dt>
            	<dd>DanceSmile<time>1月7日</time></dd>
                <dd>在<a href="#" class="title">如果个人博客网站再没有价值，你还会坚持吗？</a>中评论:</dd>
                <dd class="remark">博客色彩丰富，很是好看</dd>
            </dl>
        </div>
        <section class="flickr">
        	<h2>摄影作品</h2>
            <ul>
            	<li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
                <li><a href="#"><img src="../images/01.jpg"></a></li>
            </ul>
        </section>
    </div>
    <div class="foot-bottom">
    	 <p>Copyright 2015 Design by <a href="#">Jeniffer</a></p>
    </div>
</footer>


<div id="tbox"> <a id="togbook" href="#"></a>
 <a id="gotop" href="javascript:void(0)"></a> </div>

</body>
</html>

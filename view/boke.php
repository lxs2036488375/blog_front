
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

<!--info结束-->

<!--我的博客的列表开始-->
<div class="blog_write">
		<div class="bloglist_write">
				<!-- 先分上下两部分，然后分左右两部分 -->

				<!-- 标题部分 -->
				<div class="title_boke">
					<span >我的文章</span>
					<ul>
						<li><a href="#">草稿箱|</a></li>
						<li><a href="#">回收站|</a></li>
						<li><a href="#">设置|</a></li>
						<li><a href="#">建议</a></li>
					</ul>
				</div>
				<!-- 标题部分结束 -->
				<!-- 内容部分开始，分左右两部分 -->
				<div class="content_boke">
						<!-- 内容左边部分开始 -->
						<div class="content_boke_left">
							<!-- 上部分 -->
							<div class="content_boke_shang">
								<div class="boke_shang_nav">
									<ul>
										<li><a href="addart.php"class="boke_shang_button1">写文章</a></li>
										<li><a href="#"style="margin-left:10px;">批量管理</a></li>
									</ul>
								</div>
								<div class="boke_shang_right">
									<ul>
										<li><a href="#">切换到摘要|</a></li>
										<li><a href="#">发表时间</a></li>
									</ul>
								</div>
							</div>
							<!-- 中间部分 -->
							<div class="content_boke_middle">
								<?php include '../controll/bokecontroller.php'; ?>
							</div>

						</div>
						<!-- 内容右边部分开始 -->
						<div class="content_boke_right">
							<div class="onclicks">
								<h2>文章分类</h2>
								<ol>
									<li><span><a href="#">情感天地</a></span><a href="#">有一种思念，是淡淡的幸福</a></li>
									<li><span><a href="#">人生感悟</a></span><a href="#">励志人生-要做一个潇洒的女人</a></li>
									<li><span><a href="#">个人日记</a></span><a href="#">女孩都有浪漫的小情怀</a></li>
									<li><span><a href="#">杂谈</a></span><a href="#">Green绿色小清新的夏天</a></li>
									<li><span><a href="#">感人故事</a></span><a href="#">女生清新个人博客网站模板</a></li>
									<li><span><a href="#">休闲娱乐</a></span><a href="#">Wedding-婚礼主题、情人节网站模板</a></li>
									<li><span><a href="#">另类</a></span><a href="#">花气袭人是酒香</a></li>
								</ol>
							</div>
							<div class="onclicks">
								<h2>搜索文章</h2>
								<form class="searchform" method="post" action="../controll/seach.php">
										<input type="text" placeholder="Search" name="s" >
								</form>
							</div>
							<div class="onclicks">
								<h2>查看日历</h2>

							</div>
						</div>
				</div>
		</div>
</div>

<!--我的博客的列表结束-->
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

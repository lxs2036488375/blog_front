
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
              <span >写文章</span>
              <ul>
                <li><a href="#">草稿箱|</a></li>
                <li><a href="#">提建议|</a></li>
                <li><a href="#">返回文章列表</a></li>
              </ul>
            </div>
            <div class="ct_t_write">
              <form class="" action="../controll/addcontroller.php" method="post">
                      <div class="content">
                      <input  type="text" name="title"id="title"value="" placeholder="请输入标题"class="titel_text_write"><br/><br/>
                      <textarea  cols="102" rows="5" id="abstract"name="abstract"placeholder="请输入文章摘要" class="abstract_write" ></textarea>
                      <br/><br/>
                      <textarea cols="102" rows="30" id="content"name="content"placeholder="请输入文章内容" class="content_write" ></textarea><br/><br/>
                      </div>
                      <div class="fenlei">
                        分类：
                        <select class="" name="kind">
                          <option value="情感天地">情感天地</option>
                          <option value="人生感悟">人生感悟</option>
                          <option value="个人日记">个人日记</option>
                          <option value="杂谈">杂谈</option>
                          <option value="感人故事">感人故事</option>
                          <option value="休闲娱乐">休闲娱乐</option>
                          <option value="另类">另类</option>
                        </select>
                        权限：
                        <select class="" name="quanxian">
                          <option value="公开">公开</option>
                          <option value="好友可见">好友可见</option>
                          <option value="自己可见">自己可见</option>
                        </select>
                        <ul>
                          <li><a href="#">附件|</a></li>
                          <li><a href="#">更多设置</a></li>
                        </ul>
                      </div>
                      <div>
                      <div class="anniu">
                      <input type="submit" name="button"id="button" value="发表"class="fabiao">
                      <input type="button" name="button1"id="button1" value="取消"class="quxiao">
                      </div>
                      <div class="right_button_write">
                        <input type="submit" name="button2"id="button2" value="预览"class="quxiao">
                        <input type="button" name="button3"id="button3" value="保存草稿"class="caogao">
                      </div>
                      </div>
                    </form>
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

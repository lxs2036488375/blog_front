<?php
header("Content-type:text/html;charset=utf8");
// require '../composer/vendor/autoload.php';
// use Ramsey\Uuid\Uuid;
// use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
//
//try {
// $uuid =  md5(Uuid::uuid4());
// $num=hexdec(substr( $uuid, 0, 1 ));
// echo "article".$num;
// echo "<br\><hr\><br\>";
//  echo $uuid;
//  echo "<br\s><hr\><br\>";
//  echo $num;
//} catch (Exception $e) {
//echo  $e->getMessage();
//}

include "str.php";
$string='叮铃！门上的铃当响了起来，一个三十多岁，穿著笔挺西服的男人，走进了这家飘散着浓浓咖啡香的小小咖啡厅。　 　　“午安！欢迎光临！”年轻的老板娘亲切地招呼着。　 　　男人一面客气地微微点了点头，一面走到吧台前的位子坐了下来，开口对老板娘说：　 　　“麻烦给我一杯摩卡，谢谢。”　 　　“好的，请稍候。”老板娘微笑着说。　 　　接着她便开始熟练地磨碎咖啡豆，煮起咖啡来。男人一直带着笑容看着老板娘煮咖啡的动作，一副很享受的样子。　 　　过了没多久，老板娘便将一杯香醇的咖啡端到男人的面前。“请慢用！”　 　　“谢谢。”男人将杯子拿到嘴边，浅浅地尝了一口。　 　　“第一次来吗？”老板娘问。　 　　“是啊！”男人答。　 　　“觉得我们这家店怎么样？”　 　　“很不错！气氛很好！”　 　　“我自己也是很喜欢，所以虽然生意不好，我和我先生却还是舍不得把它关掉。” 　　“嗯……”男人好像有所同感地点了点头，又喝了一口咖啡。　 　　两人沉默了一会，一时间空荡的店里只有悠扬爵士音乐。男人忽然开口，打破了这短暂的宁静。　 　　“呃……不好意思，可以请教你一个问题吗？”　 　　“什么问题呢？”老板娘好奇地问。　 　　“嗯…这…这该怎么说好呢？”男人抓着头，一副不知所措的样子。“或者你可以先听我说个故事吗？”　 　　老板娘点了点头，示意男人继续说下去。　 　　“我以前有个很要好的女朋友，已经到了要论及婚嫁的地步。我和她之间的感情发展得相当平凡，并不是什么经过大风大浪、轰轰烈烈般的爱情。但我想从我第一眼看到她的时候，就彷佛有一股魔力，有一个声音，在推动着我，告诉着我，就是她了！她就是我一直期待着的女孩。更令我高兴的是她也响应了我的示爱，接受了我。这一切的顺利让我整个人陶醉于幸褔的喜悦之中，只不过……” 　　 　　“只不过，发生了什么事了吗？”老板娘显然给故事吸引住了，她打断了男人的话。　 　　“嗯……”男人脸色沉了下来，略微停顿了一下，继续说下去。　 　　“只不过我忘了幸褔的背后，往往藏匿着最可怕的恶魔。就在我们订婚前一个月的一个晚上，她……她遭到了歹徒的强暴”“啊！”老板娘惊讶地啊的一声叫了出来“都怪我！要是我那天坚持送她回去就好了！”男人用力地捶打着桌面，杯子中的咖啡因剧烈震动的关系洒了出来。　 　　“你要问我的该不会就是这个吧！”';
$length=1000;
@$a=str_cut($string, $length);
echo $a;
 ?>

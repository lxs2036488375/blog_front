<?php
    header("Content-type:text/html;charset=utf8");
    include '../model/segment.php';
    $se=new segment();
    $res = $se->get_keyword("中华人民共和国万岁，世界人民大团结万岁，新中国在今天成立了，感谢党，感谢人民，北京欢迎您，科学技术是第一生产力，知识改变命运。");
    echo $res;
 ?>

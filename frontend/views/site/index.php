<?php
use yii\bootstrap\Html;
/**
 * Team: RollRollTeam
 * Coding by 吕昆娴
 * 前台主页面设计
 */


?>
<style>
    body{background:url(img/bk/主页背景.jpg);}
    a:link, a:visited {
      color: inherit;
   }
</style>
<?php

/* @var $this yii\web\View */


$this->title = '俄乌冲突新闻网';
?>

<link rel="stylesheet" href="/css/timeline.css">
<div class="site-index" background="img/1.png">

    <div class="jumbotron text-center bg-transparent" style="float: middle; color:white;text-shadow:4px 4px darkred">
        <h1 class="display-4" >俄乌冲突再升级!！</h1>

        <div style="float: middle; color:white;text-shadow:2px 2px black">
            <p class="lead">在这里为您提供有关俄乌冲突的信息</p>
        </div>

    </div>

    <div class="body-content">

        <div class="row" style="color: white;font-size: 20px;text-shadow:2px 2px black">
            <div class="col-lg-4">
                <div style="float: left;width: 40%;margin-top: 20px;">
                        <img src="img/电影.jpg" style="width: 300px;height: 300px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
                </div>

            </div>
            <div class="col-lg-4">
                <div style="float: left;width: 40%;margin-top: 20px;">
                        <img src="img/音乐.jpg" style="width: 300px;height: 300px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
                </div>
            </div>
            <div class="col-lg-4">
                <div style="float: left;width: 40%;margin-top: 20px;">
                        <img src="img/R.png" style="width: 300px;height: 300px;margin-bottom: 25px;margin-top: 25px;border-radius:10px;" />
                </div>
            </div>
        </div>
        <div class="row" style="color: white;font-size: 20px;text-shadow:2px 2px black">
        <div class="col-lg-4">
                <h2><a href="../web/index.php?r=important">重大事件时间线 &raquo;</a></h2>
                <p>是2014年2月20日起俄罗斯与乌克兰之间爆发的一场旷日持久的混合战争，前期以低强度战争及代理人战争形式进行。2022年2月24日，俄白联盟以“非军事化、去纳粹化”为由全面入侵乌克兰，冲突当日起正式白热化为全面战争，并迅速发展为第二次世界大战以来欧洲最大规模的战争。</p>
            </div>
            <div class="col-lg-4">
                <h2><a href="../web/index.php?r=military-comparison">军事力量对比 &raquo;</a></h2>
                <p>在军事力量上，俄罗斯是一个强大的军事大国，具有先进的武器装备和训练有素的军队。而乌克兰相对较弱，但是在过去几年中它的军事力量有了显著的提升，特别是在美国的军事援助下。 </p>
            </div>
            <div class="col-lg-4">
                <h2><a href="../web/index.php?r=help">国际表态与他国援助 &raquo;</a></h2>
                <p>美国和欧洲联盟国家一般支持乌克兰，并对俄罗斯的行动表示严厉谴责。他们认为俄罗斯的行动是侵犯乌克兰主权和领土完整的，并呼吁俄方停止冲突并遵守国际法。</p>

                <p>相比之下一些俄罗斯的盟友，如中国和印度，对冲突的表态更加中立，呼吁双方克制通过对话和谈判解决争端。</p>

                <p>俄罗斯方面则坚持自己的立场，称其在乌克兰东部的行动是保护俄罗斯族裔的合法权益，并对外界的谴责表示不满。</p>
            </div>
        </div>
    </div>
</div>



 
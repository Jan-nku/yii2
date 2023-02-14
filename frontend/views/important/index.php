<?php

/**
 * Team: RollRollTeam
 * Coding by 吕昆娴 2013851
 * 重要事件时间轴视图
 */


use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ImportantSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Importants';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>

<!-- Meta -->
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">

<title>重大事件时间轴</title>
<meta name="description" content="">

<!-- The compiled CSS file -->
<link rel="stylesheet" href="css/production.css">

<!-- Web fonts -->
<link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">

<!-- favicon.ico. Place these in the root directory. -->
<link rel="shortcut icon" href="favicon.ico">

</head>

<body class="has-animations">


<!-- Header -->
<header class="pt2 pb1 align--center">
<div class="container">
    <p>Welcome to</p>
    <h1 title="Important Things"><img class="logo" src="./img/logo.svg" alt="Important Things"></h1>
</div>
</header>

<!-- Body -->
<main>

<div class="container">

    <!-- Info -->
    <section class="grid-row grid-row--center">
        <!-- Cabin -->
        <div class="grid-column span-half pt3 pb3 mobile-m order-1 reveal-on-scroll is-revealing">
            <div class="relative">
                <img class="info-image relative z2" src="./img/cabin.jpg" alt="Cabin">
                <div class="pattern pattern--left-down absolute z1"></div>
            </div>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-2" style="z-index:999">
            <h3>俄方回应泽连斯基拒绝与普京谈判</h3>
            <p>当地时间2022年10月4日，克里姆林宫对乌克兰总统泽连斯基签署不与普京进行谈判的决定一事进行了回应，表示进行谈判是需要双方共同参与的，俄罗斯方面直到特别军事行动开展之前一直致力于通过外交手段来达成目的。目前来看只能等待现任或者未来的乌克兰总统改变现有立场。</p>
        </div>
        <!-- Teepees -->
        <div class="grid-column span-half pt3 pb3 mobile-m order-4" style="z-index:999">
            <h3>乌克兰宣布对普京亲属在内的俄数千名个人和实体实施制裁</h3>
            <p>据乌克兰独立通讯社10月1日报道，乌克兰国家安全与国防委员会于9月30日宣布对俄罗斯数千名个人和法人实体实施制裁，乌克兰经济部1日披露了相关名单。据报道，制裁名单包括3600多名个人和实体，其中包括俄罗斯总统普京亲属及其随行人员、俄罗斯行政当局代表、俄寡头、艺术家和宣传人员、俄国有企业高级官员等，此外还重点对俄银行、国防工业、采矿、能源、通信、物流等关键领域的企业实施制裁。</p>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-3 reveal-on-scroll is-revealing" >
            <div class="relative">
                <img class="info-image relative z2" src="./img/teepee.jpg" alt="Teepee">
                <div class="pattern pattern--right-middle absolute z1"></div>
            </div>
        </div>
        <!-- Fishing -->
        <div class="grid-column span-half pt3 pb3 mobile-m order-5 reveal-on-scroll is-revealing">
            <div class="relative">
                <img class="info-image relative z2" src="./img/fishing.jpg" alt="Fishing">
                <div class="pattern pattern--left-up absolute z1"></div>
            </div>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-6" style="z-index:999">
            <h3>美同意援助乌克兰近 120 亿美元</h3>
            <p>2022年9月27日报道援引知情人士的话称，作为对美国总统拜登政府请求的回应，这笔资金中，45亿美元用于为乌克兰提供国防能力和装备；27亿美元用于继续提供军事、情报和其他国防支持；45亿美元用于在下个季度继续向基辅政府提供直接预算支持等。</p>
        </div>
        <!-- Archery -->
        <div class="grid-column span-half pt3 pb3 mobile-m order-8" style="z-index:999">
            <h3>俄方称俄黑海舰队基地遭乌方无人机袭击</h3>
            <p>2022年7月31日俄罗斯庆祝海军节。综合俄塔斯社、俄新社报道，塞瓦斯托波尔市市长米哈伊尔·拉兹沃扎耶夫31日在社交平台Telegram上发布消息称，位于该市的俄黑海舰队基地当天早上遭乌方袭击，已造成5人受伤。据塔斯社报道，拉兹沃扎耶夫称，据初步判断，是乌方的一架无人机实施了袭击，俄方正在开展调查工作。他还称，出于安全考虑，塞瓦斯托波尔庆祝海军节的所有活动取消。</p>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-7 reveal-on-scroll is-revealing">
            <div class="relative">
                <img class="info-image relative z2" src="./img/archery.jpg" alt="Archery">
                <div class="pattern pattern--right-down absolute z1"></div>
            </div>
        </div>
        <!-- Canoeing -->
        <div class="grid-column span-half pt3 pb3 mobile-m order-9 reveal-on-scroll is-revealing">
            <div class="relative">
                <img class="info-image relative z2" src="./img/canoeing.jpg" alt="Canoeing">
                <div class="pattern pattern--left-middle absolute z1"></div>
            </div>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-10" style="z-index:999">
            <h3>欧盟正式批准第六轮对俄制裁</h3>
            <p>2022年6月2日，据欧盟消息称，在因匈牙利的反对而推迟一天后，欧盟27个成员国正式批准第六轮对俄制裁方案。预计相关制裁措施将于次日正式生效。</p>
        </div>
    </section>

</div>

<div class="important-index" style="font-size: 20px">
    <h3>重要事件时间轴</h3>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'datetime',
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <br \>
    <br \>
    <br \>
    <h3>查询事件</h3>
    <?php  
    echo $this->render('_search', ['model' => $searchModel]); 
    ?>
</div>

</main>


<!-- Scroll reveal -->
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

<!-- The compiled JavaScript file -->
<script src="js/production.js"></script>

</body>
<?php

/**
 * Team: RollRollTeam
 * Coding by 吕昆娴 2013851
 * 他国援助的视图页面
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\HelpSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Helps';
$this->params['breadcrumbs'][] = $this->title;
?>

<head>
<title>Sea Food A Hotal and Restaurants category Flat bootstrap Responsive  Website Template|Home</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--web-fonts-->

<!--js-->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); }>
</script>
<meta name="keywords" content="Sea Foods Responsive web template, Bootstrap Web Templates, Flat Web Templates, AndriodCompatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
<!-- //end-smoth-scrolling -->
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript">
$(function () {
	
	var filterList = {
	
		init: function () {
			$('#portfoliolist').mixitup({
				targetSelector: '.portfolio',
				filterSelector: '.filter',
				effects: ['fade'],
				easing: 'snap',
				// call the hover effect
				onMixEnd: filterList.hoverEffect()
			});				
		
		},
		
		hoverEffect: function () {
		
			// Simple parallax effect
			$('#portfoliolist .portfolio').hover(
				function () {
					$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
					$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
				},
				function () {
					$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
					$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
				}		
			);				
		
		}

	};
	
	// Run the show!
	filterList.init();
	
	
});	
</script>
</head>
<body>
<!--banner start here-->
<div class="banner">
    <div class="logo">
        <a href="index.html"><img src="images/logo.svg" alt=""/></a>
    </div>
        <div class="slider">
                <section class="slider">
                    <div class="flexslider" style="font-size: 18px">
                    <ul class="slides">
            <li>
                <p>美国一直对乌克兰表示支持，并认为俄罗斯对乌克兰的军事干涉是不可接受的。为了帮助乌克兰抵御俄罗斯的威胁，美国提供了大量的军事装备和技术支持。此外，美国还实施了一系列经济制裁，以惩罚俄罗斯对乌克兰的军事干涉。 </p>
            </li>
            <li>
                <p>欧洲联盟也一直对乌克兰表示支持。联盟成员国一致认为俄罗斯的军事行动是不合理的，并呼吁国际社会对俄罗斯施加压力。为了帮助乌克兰，欧盟提供了军事援助和经济援助。此外，欧盟也实施了一系列经济制裁，以惩罚俄罗斯对乌克兰的军事干涉。</p>
            </li>
            <li>
                <p>中国和墨西哥则表示对俄罗斯的支持。他们认为这场冲突是乌克兰内部的问题，并主张国际社会应该保持中立。尽管如此，这两个国家并未明确表示是否向俄罗斯提供军事援助。</p>
            </li>
        </ul>
    </div>
      </section>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  <!--FlexSlider-->
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</div>
</div>
<!--banner end here-->
<!--see grid star here-->
<div class="seegrid">
	<div class="container">
		<div class="seegrid-main">
			<div class="col-md-6 seegrid-left" style="font-size: 18px">
				
				<h3>军事援助通常以多种形式提供，包括</h3>
				<p>装备：提供军事装备，如武器、弹药、装甲车辆等。</p>
                <p>培训：提供军事培训，帮助接受援助国家增强军事能力。</p>
			    <p>金融支持：提供资金支持，帮助接受援助国家购买军事装备。</p>
                <p>技术支持：提供技术支持，帮助接受援助国家维护和使用军事装备。</p>
                <p>人员支持：派遣军事人员前往接受援助国家，提供技术支持和培训。</p>
                <p>各国提供的军事援助类型和范围可能因国情和国际法规定而异。</p>
			</div>
			<div class="col-md-6 seegrid-right">
				<img src="images/war_bk.jpg" alt=""/>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--see grid  end here-->

<!--see  gallery start here-->

<!--see  gallery end here-->
<div class="help-index" style="font-size: 18px">

    <h1>军事援助情况概览</h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'country',
            'donator',
            'date',
            'kind',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
</body>
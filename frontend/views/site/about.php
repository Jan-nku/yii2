<?php

/**
 * Team: RollRollTeam
 * Coding by 许健 2013018
 * 关于我们页面设计，数据库查询操作编写
 */

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '关于我们';
$this->params['breadcrumbs'][] = 'about';
?>
<?php
    $servername="localhost";
    $username = "root";
    $password = "";
    $dbname = "yii2022";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    // Query
    $sql1 = "SELECT * FROM team where stu_number=1";
    $sql2 = "SELECT * FROM team where stu_number=2012619";
    $sql3 = "SELECT * FROM team where stu_number=2013851";
    $sql = "SELECT * FROM team where stu_number=2013018";
    $result1 = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql3);
    $result = $conn->query($sql);
    
    //var_dump($result->fetch_assoc());
      $conn->close();
?>

<div class="site-about">
    <!--
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
    -->
</div>


<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
  <title>关于</title>
  <style>
  h2 {letter-spacing:5px;}
  .colortxt{
      font-size: 20px;
      background: linear-gradient(to right, red, blue);
      -webkit-background-clip: text;
      color: transparent;
  }
  </style>

  </style>
  <link rel="stylesheet" href="../web/res/layui/css/layui.css">
  <link rel="stylesheet" href="../web/res/static/css/index.css">
  <link rel="stylesheet" href="../web/css/site.css">
</head>
<body>
  <!-- banner部分 -->
  <div class="banner about">
    <div class="title">
      <p>关于我们</p>
      <p class="en">About Us</p>
    </div>
  </div>
  <!-- main部分 -->
  <div class="main-about">
    <div class="layui-container">
      <div class="layui-row">
        <ul class="aboutab">
          <li class="layui-this">成员介绍</li><li>成员分工</li><li>项目推进</li>
        </ul>
        <div class="tabIntro">
          <div class="content">
            <div class="layui-inline img"><img src="../web/res/static/img/us_img1.jpg"></div><div class="layui-inline panel">
            <div class="colortxt">
            <font face="楷体"><h2 align="center">
              <?php
              $result->data_seek(0);
              $row=$result->fetch_assoc();
              echo $row["name"].$row["stu_number"]."</br>";
              ?>
            </div>
            
            </h2></font>
              <span class="colortxt" align="center">
              <?php
              $result->data_seek(0);
              $row=$result->fetch_assoc();
              echo $row["introduce"];
              ?>
              </span>
            </div>
          </div>
          <div class="content">
            <div class="layui-inline panel p_block">
            <div class="colortxt">
            <font face="楷体"><h2 align="center">
              <?php
              $result2->data_seek(0);
              $row=$result2->fetch_assoc();
              echo $row["name"].$row["stu_number"]."</br>";
              ?>
            </h2></font>
            </div>
            <span class="colortxt" align="center">
              <?php
              $result2->data_seek(0);
              $row=$result2->fetch_assoc();
              echo $row["introduce"];
              ?>
              </span>
            </div><div class="layui-inline img"><img src="../web/res/static/img/us_img2.jpg"></div>
            
            
          </div>
          <div class="content">
            <div class="layui-inline img"><img src="../web/res/static/img/us_img3.jpg"></div><div class="layui-inline panel">
            <div class="colortxt">
            <font face="楷体"><h2 align="center">
              <?php
              $result3->data_seek(0);
              $row=$result3->fetch_assoc();
              echo $row["name"].$row["stu_number"]."</br>";
              ?>
            </h2></font>
            </div>
            <span class="colortxt" align="center">
              <?php
              $result3->data_seek(0);
              $row=$result3->fetch_assoc();
              echo $row["introduce"];
              ?>
              </span>
            </div>
          </div>         
        </div>
        <div class="tabJob">
          <div class="content">
            <p class="title">许健2013018(组长)</p>
            <p>> 负责部分</p>
            <ol>
              <li>开发新闻检索网页</li>
              <li>参与数据表设计，协调组员分工</li>
              <li>美化about、signup等页面，添加成员信息，增加重复密码、验证码等内容</li>
              <li>参与前后台分离、模板选取，完善登录机制</li>
              <li>编写部署、设计、网页实现等项目文档，参与ppt展示制作</li>
            </ol>
          </div>
          <div class="content">
            <p class="title">运开2012619(组员)</p>
            <p>> 负责部分</p>
            <ol>
              <li>参与数据库设计，完成军事力量对比相关数据表</li>
              <li>参与前后台页面设计，后台管理</li>
              <li>获取数据，编写数据库交互命令</li>
              <li>使用js实现数据可视化</li>
              <li>参与设计、实现等文档、ppt制作</li>
            </ol>
          </div>
          <div class="content">
            <p class="title">吕昆娴2013851(组员)</p>
            <p>> 负责部分</p>
            <ol>
              <li>参与数据表设计，完成前端援助页面</li>
              <li>开发重要事件时间轴模块</li>
              <li>编写网页脚本，爬取新闻数据</li>
              <li>前后台首页设计</li>
              <li>编写实现、设计等文档，ppt制作</li>
            </ol>
          </div>
        </div>
        <div class="tabCour">
          <p class="title">项目进展</p>
          <ul class="timeline">
            <li class="odd">
              <div class="cour-img"><img src="../web/res/static/img/us_img4.png"></div>
              <div class="cour-panel layui-col-sm4 layui-col-lg5">
                <p class="label">12月10日-12月25日</p>
                <p>学习前端基础知识，学习php语言基础语法</p>
              </div>
            </li>
            <li>
              <div class="cour-img"><img src="../web/res/static/img/us_img5.png"></div>
              <div class="cour-panel layui-col-sm4 layui-col-sm-offset8 layui-col-lg5 layui-col-lg-offset7">
                <p class="label">1月19日-1月30日</p>
                <p>学习yii2框架开发</p>
              </div>
            </li>
            <li class="odd">
              <div class="cour-img"><img src="../web/res/static/img/us_img6.png"></div>
              <div class="cour-panel layui-col-sm4 layui-col-lg5">
                <p class="label">2月1日-2月3日</p>
                <p>收集资料，讨论网页设计，使用powerdesign等工具进行数据表的设计</p>
              </div>
            </li>
            <li>
              <div class="cour-img"><img src="../web/res/static/img/us_img7.png"></div>
              <div class="cour-panel layui-col-sm4 layui-col-sm-offset8 layui-col-lg5 layui-col-lg-offset7">
                <p class="label">2月4日-2月12日</p>
                <p>组内成员进行前端和后端的设计，分别编写负责页面</p>
              </div>
            </li>
            <li class="odd">
              <div class="cour-img"><img src="../web/res/static/img/us_img8.png"></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- footer部分 -->
  <!--
  <div class="footer">
    <div class="layui-container">
      <p class="footer-web">
        <a href="javascript:;">合作伙伴</a>
        <a href="javascript:;">企业画报</a>
        <a href="javascript:;">JS网</a>
        <a href="javascript:;">千图网</a>
        <a href="javascript:;">昵图网</a>
        <a href="javascript:;">素材网</a>
        <a href="javascript:;">花瓣网</a>
      </p>
      <div class="layui-row footer-contact">
        <div class="layui-col-sm2 layui-col-lg1"><img src="../web/res/static/img/erweima.jpg"></div>
        <div class="layui-col-sm10 layui-col-lg11">
          <div class="layui-row">
            <div class="layui-col-sm6 layui-col-md8 layui-col-lg9">
              <p class="contact-top"><i class="layui-icon layui-icon-cellphone"></i>&nbsp;400-8888888&nbsp;&nbsp;&nbsp;(9:00-18:00)</p>
              <p class="contact-bottom"><i class="layui-icon layui-icon-home"></i>&nbsp;88888888@163.com</span></p>
            </div>
            <div class="layui-col-sm6 layui-col-md4 layui-col-lg3">
              <p class="contact-top"><span class="right">该模板版权归 <a href="https://www.layui.com/" target="_blank">layui.com</a> 所有</span></p>
              <p class="contact-bottom"><span class="right">Copyright&nbsp;©&nbsp;2016-2018&nbsp;&nbsp;ICP&nbsp;备888888号</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  -->
<script src="../web/res/layui/layui.js"></script>
<!--[if lt IE 9]>
  <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
  <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script>
  layui.config({
    base: '../web/res/static/js/' 
  }).use('firm'); 
</script>
</body>

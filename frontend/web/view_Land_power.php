<!-- 
author: 运开
Student number: 2012619
email: 2012619@mail.nankai.edu.cn
-->
<head>
    <base href="<%=basePath%>">
        
        <title>My JSP 'bb_chart.jsp' starting page</title>
        
        <meta http-equiv="pragma" content="no-cache">
        <meta http-equiv="cache-control" content="no-cache">
        <meta http-equiv="expires" content="0">    
        <meta http-equiv="keywords" content="keyword1,keyword2,keyword3">
        <meta http-equiv="description" content="This is my page">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--
        <link rel="stylesheet" type="text/css" href="styles.css">
        -->
        <script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
        <script type="text/javascript" src="js/highcharts.js"></script>
        <!-- 
        <script type="text/javascript" src="js/theme/gray.js"></script>
        <script type="text/javascript" src="js/theme/dark-blue.js"></script>
        <script type="text/javascript" src="js/theme/dark-green.js"></script>
        -->
        <script type="text/javascript" src="js/theme/grid.js"></script>
    <style type="text/css">
        @import url("css/table-style.css");
        p {text-indent:1em;} 

        body
{
    background-image:url('https://www.propertychronicle.com/wp-content/uploads/2022/12/Soldiers_with_the_Ukrainian_Land_Forces_conduct_defensive_tactics_on_counterattack-2048x1341.jpg');
    background-size:cover;
    background-repeat:repeat;
}
    </style>
</head>
<body>
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
    $sql = "SELECT * FROM land_power";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //       echo "country: " . $row["country"]. " - Name: " . $row["Armored vehicles"]. "<br>";
    //     }
    // } 
    // else {
    //     echo "0 results";
    // }

      // Close connection
      $conn->close();
?>

<table id="pattern-style-b" summary="Air force">
    <thead>
    	<tr>
        	<th scope="col">
                country
            </th>
            <th scope="col">
                Armored vehicles
            </th>
            <th scope="col">
                Tank strength
            </th>
            <th scope="col">
                Tower artillery
            </th>
            <th scope="col">
                Self-propelled artillery
            </th>
            <th scope="col">
                Mobile rocket projectors
            </th>
           
        </tr>
    </thead>
    <tbody>
    	<tr>
        	<td>
                <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["country"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Armored vehicles"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Tank strength"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Tower artillery"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Self-propelled artillery"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Mobile rocket projectors"];?>
            </td>
           
            
        </tr>
        <tr>
        	<td>
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["country"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Armored vehicles"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Tank strength"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Tower artillery"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Self-propelled artillery"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Mobile rocket projectors"];?>
            </td>
            
        </tr>
    </tbody>
</table>
<article class="element shadow">
    <header>
        <h2><i class="fa" style="font-style: normal;"></i> Details</h2>
    </header>

    <div class="text-content">
        <header class="chart-header">
            <h3> </h3>
        </header>

        <p>One of the most basic vehicles that countries use in modern warfare are tanks. This heavily armed and very dangerous machine had its beginnings during the First World War. However, its most common use occurred only 20 years later, during the Second World War. To this day, tanks are believed to be of utmost importance for almost every country. As a result of that, most of the nations around the globe try to increase their number and introduce modern technology. The main goal of this technology is to prove that the product of a selected country is much more effective and has much better combat ability than the opponents.</p>

        <p>At the beginning of the page one can find the interactive map that offers an in-depth visual representation of all countries with available data. There, you can find, zoom in, or zoom out to see the detailed information that concerns this heavily-armoured vehicles.</p>

        <p>The selected charts offer you a glimpse of what particular country owns at this very moment. There, you can see in detailed information regarding every aspect of the country’s capability when it comes to tanks. However, the most often browsed chart is the one that gives you an approximate quantity of tanks in each country.</p>

        <p>Of course, we should bear in mind that the term “tank” itself has changed throughout last several decades. At the beginning tanks were armoured vehicles that military used to transport men at war. Later on, it became clear that tanks are the means of conducting heavy fire. What is more, they are essential when it comes to sieging cities and breaking front lines. Therefore, not everyone realizes but battle tank is a tank that fills the armor-protected direct fire and maneuver role of many modern armies. They were originally conceived to replace the light, medium, heavy and super-heavy tanks.</p>

        <p>While remembering that, we should also draw our attention to other aspects of tank charts as presented below. There, we can see the division of tanks and presented percentages. From that we can conclude how many tanks selected country have when compared to the overall number of all tanks available at the planet. Each and every chart and table you can find on this page are presented in the same way and use the same information. Number of main battle and light tanks in active military service with countries of the world. Currently in equipment and in reserve. Does not include tank destroyers.</p>

         </div>
</article>
<div align="center" id="container">
    </div>
<div align="center" id="container2">
    </div>
</body>

<script>
var chart;
$(document).ready(function() {
//折线图示例
    chart = new Highcharts.Chart({
        chart: {
            renderTo: 'container',          //放置图表的容器
            plotBackgroundColor: null,
            plotBorderWidth: null,
            defaultSeriesType: 'line'   ,
            width: 800,
            height: 400,
        },
        title: {
            text: 'Russian-Ukrainian land power Comparison line-chart'
        },
        subtitle: {
            text: ''
        },
        xAxis: {//X轴数据
            categories: ['Armored vehicles', 'Tank strength', 'Tower artillery', 'Self-propelled artillery', 'Mobile rocket projectors'],
            labels: {
                rotation: -15, //字体倾斜
                align: 'right',
                style: { font: 'normal 13px 宋体' }
            }
        },
        yAxis: {//Y轴显示文字
            title: {
                text: 'count'
            }
        },
        tooltip: {
            enabled: true,
            formatter: function() {
                return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + Highcharts.numberFormat(this.y, 1);
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true//是否显示title
            }
        },
        series: [{
            name: 'Russia',
            data: [
                <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Armored vehicles"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Tank strength"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Tower artillery"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Self-propelled artillery"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Mobile rocket projectors"];?>
           
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Armored vehicles"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Tank strength"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Tower artillery"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Self-propelled artillery"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Mobile rocket projectors"];?>
            ]
        }]
    });
//柱状图图示例
chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'container2',          //放置图表的容器
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    defaultSeriesType: 'column' ,  //图表类型line, spline, area, areaspline, column, bar, pie , scatter 
                    width: 800,
            height: 400,
                },
                title: {
                    text: 'Russian-Ukrainian Air force Comparison histogram'
                }, 
                xAxis: {//X轴数据
                    categories: ['Armored vehicles', 'Tank strength', 'Tower artillery', 'Self-propelled artillery', 'Mobile rocket projectors'],
                    labels: {
                        rotation: -15, //字体倾斜
                        align: 'right',
                        style: { font: 'normal 13px 宋体' }
                    }
                },
                yAxis: {//Y轴显示文字
                    title: {
                        text: 'count'
                    }
                },
                tooltip: {
                    enabled: true,
                    formatter: function() {
                        // return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + Highcharts.numberFormat(this.y, 1) + "百万";
                        return '<b>' + this.x + '</b><br/>' + this.series.name + ': ' + Highcharts.numberFormat(this.y, 1) ;
                    }
                },
                plotOptions: {
                    column: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: true//是否显示title
                    }
                },
                series: [{
            name: 'Russia',
            data: [
                <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Armored vehicles"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Tank strength"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Tower artillery"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Self-propelled artillery"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Mobile rocket projectors"];?>,
           
           
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Armored vehicles"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Tank strength"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Tower artillery"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Self-propelled artillery"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Mobile rocket projectors"];?>,
           
            ]
        }]
              });

}); 
</script>
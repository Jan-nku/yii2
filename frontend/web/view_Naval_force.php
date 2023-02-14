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
        {
    background-image:url('https://img2.chinadaily.com.cn/images/202007/28/5f1f8019a3108348fce0b4a5.jpeg');
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
    $sql = "SELECT * FROM naval_force";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //       echo "country: " . $row["country"]. " - Name: " . $row["Total military ships"]. "<br>";
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
                Total military ships
            </th>
            <th scope="col">
                Corvettes
            </th>
            <th scope="col">
                Submarines
            </th>
            <th scope="col">
                Patrol vessels
            </th>
            <th scope="col">
                Mine warfare
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
                echo $row["Total military ships"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Corvettes"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Submarines"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Patrol vessels"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Mine warfare"];?>
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
                echo $row["Total military ships"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Corvettes"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Submarines"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Patrol vessels"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Mine warfare"];?>
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

        <p>While describing naval ships, it is imperative to notice that there are dozens of classifications that let us clarify which type of military ship we are talking about. Naval ships are used by a navy to a variety of different activities. It can include naval warfare, support, and many other elements. Noteworthy is the fact that ships are usually armed units that are in the service of almost every state. Of course we can find unarmed ships which can be applied to many different, military oriented, yet not connected with fighting activities.</p>

        <p>We should also bear in mind that besides in-depth classification of ships used for military, we should also remember about other terms. One of the examples is the term warship. In many situations, naval ships that have got one particular goal, to participate in naval warfare, are known as warships. Of course when it comes to categorization, we should classify naval ships into particular classes in order to understand their roles during conflicts. To put it as simple as it is possible we can say that a naval ship is a military ship used by a navy. Naval ship classification: aircraft carrier, surface combatant(battleship, battlecruiser, cruiser, destroyer, and frigate), submarine, amphibious warfare, patrol combatant, mine warfare, coastal defense, sealift and support.</p>

        <p>It means that the charts you can see down below include all types of ships used by military to either offensive, combat purposes or to support other ships, protect fleet, or simply in utility aspects. Still, we should bear in mind that the use particular classes is extremely important and that is why although the total number of ships in selected country can be smaller than in the other one, the bigger amount of, for example, aircraft carriers, surface combatant, or submarines, can tip the scales quite easily. It is because these examples are of the biggest importance when we talk about naval combats. Thanks to such warships as battleships, battlecruisers, destroyers, frigates, or simply submarines, the nation can escort and protect carrier-based aircrafts, which can serve as a starting point for aerial invasion.</p>

        <p>The charts include all the necessary data in order to compare ship count in almost every country. Thanks to very thorough collection of all information, you can see how many ships each country has. Of course to make sure that you make an appropriate comparison, we also encourage you to look at the ranking of aircraft carriers, frigates, corvettes, destroyers, and of course submarines!</p>

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
            defaultSeriesType: 'line'  ,
            width: 800,
            height: 400, 
        },
        title: {
            text: 'Russian-Ukrainian Air force Comparison line-chart'
        },
        subtitle: {
            text: ''
        },
        xAxis: {//X轴数据
            categories: ['Total military ships', 'Corvettes', 'Submarines', 'Patrol vessels', 'Mine warfare'],
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
                echo $row["Total military ships"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Corvettes"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Submarines"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Patrol vessels"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Mine warfare"];?>,
           
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total military ships"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Corvettes"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Submarines"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Patrol vessels"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Mine warfare"];?>,
            
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
                    categories: ['Total military ships', 'Corvettes', 'Submarines', 'Patrol vessels', 'Mine warfare'],
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
                echo $row["Total military ships"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Corvettes"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Submarines"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Patrol vessels"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Mine warfare"];?>,
            
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total military ships"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Corvettes"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Submarines"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Patrol vessels"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Mine warfare"];?>,
           
            ]
        }]
              });

}); 
</script>
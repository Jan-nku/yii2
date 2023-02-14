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
    background-image:url('https://migflug.com/jetflights/wp-content/uploads/sites/4/2014/05/su35.jpg');
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
    $sql = "SELECT * FROM air_force";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //       echo "country: " . $row["country"]. " - Name: " . $row["Total aircraft"]. "<br>";
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
                Total aircraft
            </th>
            <th scope="col">
                Total helicopters
            </th>
            <th scope="col">
                Fighters
            </th>
            <th scope="col">
                Dedicated attack
            </th>
            <th scope="col">
                Attack helicopters
            </th>
            <th scope="col">
                Trainers
            </th>
            <th scope="col">
                Transport aircraft
            </th>
            <th scope="col">
                Special-mission aircraft
            </th>
            <th scope="col">
                Aerial tankers
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
                echo $row["Total aircraft"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Total helicopters"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Fighters"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Dedicated attack"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Attack helicopters"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Trainers"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Transport aircraft"];?>
            </td>
            <td>
            <?php 
            $result->data_seek(0); 
            $row = $result->fetch_assoc();
            echo $row["Special-mission aircraft"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Aerial tankers"];
                ?>
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
                echo $row["Total aircraft"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total helicopters"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Fighters"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Dedicated attack"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Attack helicopters"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Trainers"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Transport aircraft"];?>
            </td>
            <td>
            <?php 
            $result->data_seek(1); 
            $row = $result->fetch_assoc();
            echo $row["Special-mission aircraft"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Aerial tankers"];
                ?>
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
        <div align="left" id="content" style="background-color:#EEEEEE;">
        <p>  Aircrafts is a broad term that concerns almost all flying devices that a nation can use. However, since in military and appropriate comparison almost everything counts, it is very important to understand what aircraft really means and what type of vehicles one can count in here. According to most often used terms, namely functional definitions, aircraft is a device that is capable of floating (flying) in the atmosphere as a result of static or aerodynamic interaction with the air. As a result of that, we can distinguish aircrafts that are aerostats and aerodynes. The first one are aircrafts that are lighter than air, namely air balloons as well as dirigible balloons. Although during World War II one could find several uses of dirigible balloons, nowadays as a consequence of its disadvantages, it is no longer used in military.</p>

        <p>  The thing that interests us the most is the type of aircraft that is heavier than air – aerodynes. In here, we can find airplanes, monoplanes, biplanes, rotocrafts, and many other airships. Of course we should also bear in mind that the type of aerodyne is any chopper. This particular subgenre is of utmost importance when it comes to describing the power of aircraft in the statistics above. It is because air superiority plays crucial role when it comes to supporting land fights and protecting air drops, logistics, and supplies. Needless to say high number of aircraft power can also mean the possibility to bomb infrastructure and of course eliminating enemy planes. This is why fighting in the air played such a crucial role in almost every modern conflict.</p>

        <p>  If we were to sum up the term of aircraft, we would certainly say that we can distinguish two types of aircrafts: combat and non-combat ones. Combat aircraft are divided broadly into multi-role, fighters, bombers, and attackers. Non-combat roles of military aircraft include search and rescue, reconnaissance, observation, Airborne Early Warning and Control, transport, training, and aerial refueling. Of course each and every one of them is very important and we cannot forget about that.</p>

        <p>  In order to better understand how the situation of aircraft in each nation looks like, we prepared a detailed list of all countries and their aircrafts. Down there, you can see percentages showing the aerial superiority. In addition to that, you can also take a look at exact numbers to see which country has got the biggest amount of aircrafts. Number of all aircraft and helicopters, includes training and cargo aircrafts. Does not include drones. Currently in equipment and in reserve.</p>
    </div>
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
            defaultSeriesType: 'line',
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
            categories: ['Total aircraft', 'Total helicopters', 'Fighters', 'Dedicated attack', 'Attack helicopters', 'Trainers', 'Transport aircraft', 'Transport aircraft', 'Special-mission aircraft', 'Aerial tankers'],
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
                echo $row["Total aircraft"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Total helicopters"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Fighters"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Dedicated attack"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Attack helicopters"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Trainers"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Transport aircraft"];?>,
            <?php 
            $result->data_seek(0); 
            $row = $result->fetch_assoc();
            echo $row["Special-mission aircraft"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Aerial tankers"];
                ?>
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total aircraft"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total helicopters"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Fighters"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Dedicated attack"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Attack helicopters"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Trainers"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Transport aircraft"];?>,
            <?php 
            $result->data_seek(1); 
            $row = $result->fetch_assoc();
            echo $row["Special-mission aircraft"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Aerial tankers"];
                ?>
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
                    height: 400
                },
                title: {
                    text: 'Russian-Ukrainian Air force Comparison histogram'
                }, 
                xAxis: {//X轴数据
                    categories: ['Total aircraft', 'Total helicopters', 'Fighters', 'Dedicated attack', 'Attack helicopters', 'Trainers', 'Transport aircraft', 'Transport aircraft', 'Special-mission aircraft', 'Aerial tankers'],
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
                echo $row["Total aircraft"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Total helicopters"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Fighters"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Dedicated attack"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Attack helicopters"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Trainers"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Transport aircraft"];?>,
            <?php 
            $result->data_seek(0); 
            $row = $result->fetch_assoc();
            echo $row["Special-mission aircraft"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Aerial tankers"];
                ?>
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total aircraft"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Total helicopters"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Fighters"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Dedicated attack"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Attack helicopters"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Trainers"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Transport aircraft"];?>,
            <?php 
            $result->data_seek(1); 
            $row = $result->fetch_assoc();
            echo $row["Special-mission aircraft"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Aerial tankers"];
                ?>
            ]
        }]
              });

}); 
</script>
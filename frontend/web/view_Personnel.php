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
    $sql = "SELECT * FROM personnel";
    $result = $conn->query($sql);
    // if ($result->num_rows > 0) {
    //     while ($row = $result->fetch_assoc()) {
    //       echo "country: " . $row["country"]. " - Name: " . $row["total"]. "<br>";
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
                total
            </th>
            <th scope="col">
                Active soldiers
            </th>
            <th scope="col">
                Reserve forces
            </th>
            <th scope="col">
                Paramilitary units
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
                echo $row["total"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Active soldiers"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Reserve forces"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Paramilitary units"];?>
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
                echo $row["total"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Active soldiers"];?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Reserve forces"]?>
            </td>
            <td>
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Paramilitary units"];?>
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

        <p>The number of military personnel on active duty that are currently serving full-time in their military capacity.</p>

        <p>Military service is service by an individual or group in an army or other militia, whether as a chosen job or as a result of an involuntary draft. A nation with a fully volunteer military does not normally require mandatory military service from its citizens, unless it is faced with a recruitment crisis during a time of war.
        </p>
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
            text: 'Russian-Ukrainian Air force Comparison line-chart'
        },
        subtitle: {
            text: ''
        },
        xAxis: {//X轴数据
            categories: ['total', 'Active soldiers', 'Reserve forces', 'Paramilitary units'],
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
                echo $row["total"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Active soldiers"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Reserve forces"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Paramilitary units"];?>,
           
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["total"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Active soldiers"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Reserve forces"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Paramilitary units"];?>,
           
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
                    categories: ['total', 'Active soldiers', 'Reserve forces', 'Paramilitary units'],
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
                echo $row["total"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Active soldiers"];?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Reserve forces"]?>,
            <?php 
                $result->data_seek(0); 
                $row = $result->fetch_assoc();
                echo $row["Paramilitary units"];?>,
           
                ]
        }, {
            name: 'Ukraine',
            data: [
                <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["total"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Active soldiers"];?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Reserve forces"]?>,
            <?php 
                $result->data_seek(1); 
                $row = $result->fetch_assoc();
                echo $row["Paramilitary units"];?>,
           
            ]
        }]
              });

}); 
</script>
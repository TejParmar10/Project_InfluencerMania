<?php
include "header.php";
?>
<html>
	<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<style> .center-block 
{ display: block;
	margin-left: auto;
	margin-right: auto;
 }</style>
</head>
<body>
<div class="container">
    <div id="container_pie1"></div>
	<div id="container_pie2"></div>
</div>
<?php
include "connect.php";
// if(isset($_GET['id'])){
	// $id=mysqli_real_escape_string($conn,$_GET['id']);
	$sql="select * from login";
	$getData = $conn->query($sql);	
    $getData2=$conn->query($sql);
//    }
?>
<script>
	 Highcharts.chart('container_pie1', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Influencers Instagram Popularity, 2022'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: ' Influencers',
            colorByPoint: true,
            data: [
                <?php
                $data = '';
                if ($getData->num_rows>0){
                    while ($row = $getData->fetch_object()){
                        $data.='{ name:"'.$row->Name.'",y:'.$row->instagram_followers.'},';
                    }
                }
                echo $data;
                ?>
            ]
        }]
	});
    Highcharts.chart('container_pie2', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Influencers Twitter Popularity, 2022'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: [{
            name: ' Influencers',
            colorByPoint: true,
            data: [
                <?php
                $data = '';
                if ($getData2->num_rows>0){
                    while ($row = $getData2->fetch_object()){
                        $data.='{ name:"'.$row->Name.'",y:'.$row->twitter_followers.'},';
                    }
                }
                echo $data;
                ?>
            ]
        }]
	});
//     Highcharts.chart('container_pie2', {
//     chart: {
//         type: 'column'
//     },
//     title: {
//         text: 'Influencer Instagram Popularity,2022'
//     },
//     subtitle: {
//         text: 'Source: Instagram.com'
//     },
//     xAxis: {
//         title:{
//             text:'Name'
//         },
//         categories: [
//             'Jan',
//             'Feb',
//             'Mar',
//             'Apr',
//             'May',
//             'Jun',
//             'Jul',
//             'Aug',
//             'Sep',
//             'Oct',
//             'Nov',
//             'Dec'
//         ],
//         crosshair: true
//     },
//     yAxis: {
//         min: 0,
//         title: {
//             text: 'Followers'
//         }
//     },
//     tooltip: {
//         headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
//         pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
//             '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
//         footerFormat: '</table>',
//         shared: true,
//         useHTML: true
//     },
//     plotOptions: {
//         column: {
//             pointPadding: 0.2,
//             borderWidth: 0
//         }
//     },
//     series: [{
//         name: 'Tokyo',
//         data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

//     }, {
//         name: 'New York',
//         data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

//     }, {
//         name: 'London',
//         data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

//     }, {
//         name: 'Berlin',
//         data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

//     }]
// });
</script>
</body>
<?php
include "header.php"
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
	<!-- <div id="container_pie2"></div> -->
</div>
<?php
include "connect.php";
// if(isset($_GET['id'])){
	// $id=mysqli_real_escape_string($conn,$_GET['id']);
	$sql="select * from login";
	$getData = $conn->query($sql);	
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
            name: 'Popularity',
            colorByPoint: true,
            data: [
                <?php
                $data = '';
                if ($getData->num_rows>0){
                    while ($row = $getData->fetch_object()){
                        $data.='{ name:"'.$row->Name.'",y:'.$row->twitter_followers.'},';
                    }
                }
                echo $data;
                ?>
            ]
        }]
	});
    </script>
</body>
<?php
include "footer.php";
?>
<?php
include "header.php";
?>
<html>
<body>
<div class="container">
    <div id="container_pie1"></div>
	<div id="container_pie2"></div>
</div>
<?php
include "connect.php";
	$sql="select * from login";
	$getData = $conn->query($sql);	
    $getData2=$conn->query($sql);
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
</script>
</body>
<?php
include "header.php";
?>
<?php
/**
 * DashboardBuilder
 *
 * @author Diginix Technologies www.diginixtech.com
 * Support <support@dashboardbuider.net> - https://www.dashboardbuilder.net
 * @copyright (C) 2016-2022 Dashboardbuilder.net
 * @version 5.5
 * @license: This code is under MIT license, you can find the complete information about the license here: https://dashboardbuilder.net/code-license
 */

include("../dashboard_dist.php");  // copy this file to inc folder 
?>
<!DOCTYPE html>
<html lang="en-us" dir="ltr">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/gh/DashboardBuilder/cdn@master/v55/dashboard.min.js"></script> <!-- copy this file to assets/js folder -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DashboardBuilder/cdn@master/v55/bootstrap.min.css"> <!-- Bootstrap 5 CSS file, change the path accordingly -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/DashboardBuilder/cdn@master/v55/font-awesome.min.css">  <!-- Font Awesome CSS file, change the path accordingly -->
	
<style>
@media screen and (min-width: 960px) {
.id0 {position:absolute;top:0px;}

}
.card-header {line-height:0.7em;}
#number {font-size:34px; font-weight:bold;text-align:center;}
#number_legand {font-size:11px; text-align:center;}
.panel-body {  box-shadow: 5px 5px 35px  #e0e0e0;color:#787b80;}
.page-header {margin-top:-30px;}.dropdown-toggle{font-size:12px;line-height:12px;}
	.selectoption {font-size:12px !important;}
	.bs-searchbox > input {
	  font-size: 12px;
	  height:26px;
	}
</style>

</head>
<body> 

<?php
// for chart #1
$data = new dashboardbuilder(); 
$data->type[0]=  "stack";

$data->legacy = "";
$data->source =  "Database"; 
$data->rdbms =  "mysql"; 
$data->servername =  "localhost";
$data->username =  "root";
$data->password =  "";
$data->dbname =  "influencermania";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->filterlabel = "Filter";
$data->forecastlabel = "Forecast";
$data->filter = "false";
$data->xaxisSQL[0]=  "SELECT * FROM login LIMIT 10;";
$data->xaxisCol[0]=  "Name";
$data->xsort[0]=  "";
$data->xmodel[0]=  "";
$data->forecast[0]=  "";
$data->yaxisSQL[0]=  "SELECT * FROM login LIMIT 10;";
$data->yaxisCol[0]=  "instagram_followers";
$data->ysort[0]=  "";
$data->ymodel[0]=  "";

$data->name = "BarGraph1";
$data->title = "Influencers";
$data->orientation = "v";
$data->dropdown = "false";
$data->side = "left";
$data->toImage = "Download graph";
$data->zoomin = "Zoom in";
$data->zoomout = "Zoom out";
$data->autoscale = "Reset";
$data->filter = "false";
$data->forecastlabel = "Forecast";
$data->legposition = "";
$data->xaxistitle = "Name of the influencers";
$data->yaxistitle = "Instagram Followers";
$data->datalabel = "true";
$data->showgrid = "true";
$data->showline = "true";
$data->height = "380";
$data->width = "0";
$data->col = "0";



$data->tracename[0]=  "Trace 1";

$result[0] = $data->result();?>
<div class="container-fluid main-container">
    <h1>Analytics By Influencer<span class="text-primary">Mania</span>
<div class="col col-12 col-md-12 col-lg-12 col-xs-12">
	<div class="row">
	<div class="col-md-12 col-12 col-xs-12  id0">
	<div class="card card-default shadow">
		<div class="card-body">
		<span>Influencers Data</span>
			<?php echo $result[0];?>
		</div>
	</div>
	</div>
	</div>
</div>
</div>

</body>
<!--  -->
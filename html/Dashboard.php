<?php
include "pie1_instagram_followers.php";
?>
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

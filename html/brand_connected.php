<?php
session_start();
?>
<?php
include 'header.php';
?>
<?php
include 'connect.php';
if(isset($_GET['id'])){
    $id=mysqli_real_escape_string($conn,$_GET['id']);
    $sql="select * from login where influencer_id=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $count=$row['counter'];
    $_SESSSION['brand_req']=true;
}
?>
<body>
<h1>Congratulations!You are now successfully connected.</h1>
<?php
include 'footer.php';
?>
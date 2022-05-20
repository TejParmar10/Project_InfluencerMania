<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$database="influencermania";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}
echo "Connected successfully";
$user=$_POST['email'];
$pass=$_POST['password'];
	$sql="SELECT * FROM brand_login where email='$user' and password='$pass'";
	$result = mysqli_query($conn, $sql);
     $row=mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         
         $_SESSION['id']=$row['id'];
        //  $_SESSION['username_brand']=$row['name'];
         header("location: index.php");
      }else{
		
    $message = 'Wrong Email or Password';

    echo "<SCRIPT> 
        alert('$message')
        window.location.replace('login_signup_brand.html');
    </SCRIPT>";
    mysql_close();

		
	}
?>
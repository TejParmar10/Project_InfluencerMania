<?php
session_Start();
$servername="localhost";
$username="root";
$password="";
$database="influencermania";

$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
	die("Connection Failed: ".$conn->connect_error);
}
echo "Connected successfully";
// include 'connect.php';
$username=$_POST['name'];       
if($_POST['pass']==$_POST['c_pass']){
	$password=$_POST['pass'];
}else{
        echo "Re-enter password";
}
$email=$_POST['email'];
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];   
$folder = "Project/seogram/assets/img/brands/".$filename;
$category_names=$_POST["category_names"];
$query= "INSERT into brand_login (Name,email,Password,category,brand_logo) values ('$username','$email','$password','$category_names','$filename')";
if(move_uploaded_file($tempname,$folder))
{
        echo"Image inserted!"; 
}
else
{
        echo "Image is not inserted!";
}
        $result   = mysqli_query($conn, $query);
        if($result){
        	header("Location: login_signup_brand.html");

        }
        else
        {
        	echo "Incorrect query"; 
        }


?>
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
	$sql="SELECT * FROM login where email='$user' and password='$pass'";
	$result = mysqli_query($conn, $sql);
     $row=mysqli_fetch_assoc($result);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION['isInfluencerlogin']=true;
        $_SESSION['isloggedin']=true;
         $_SESSION['id']=$row['influencer_id'];
         $_SESSION['username']=$row['Name'];
         $_SESSION['category']=$row['category'];
         
         header("location: index.php");
      }else{
    $message = 'Wrong Email or Password';
    echo "<SCRIPT> 
        alert('$message')
        window.location.replace('login_signup_influencer.html');
    </SCRIPT>";
    mysql_close();		
	}
?>
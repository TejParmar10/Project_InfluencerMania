 
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
$username=$_POST['name'];
if($_POST['pass']==$_POST['c_pass']){
	$password=$_POST['pass'];
}else{
        echo "Re-enter password";
}
$email=$_POST['email'];
$phone=$_POST['p_no'];
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];   
        $folder = "Project/seogram/assets/img/influencers/".$filename;
        $category_names=$_POST["category_names"];
        $query= "INSERT into login (Name,email,Phone,Password,category,influencer_image) values ('$username','$email','$phone','$password','$category_names','$filename')";
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
        	header("Location: login_signup_influencer.html");

        }
        else
        {
        	echo "Incorrect query"; 
        }

?>
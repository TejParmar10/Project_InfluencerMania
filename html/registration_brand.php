 
<?php
include 'connect.php';
$username=$_POST['name'];       
if($_POST['pass']==$_POST['c_pass']){
	$password=$_POST['pass'];
}else{
        echo "Re-enter password";
}
$email=$_POST['email'];
$category_names=$_POST["category_names"];
$query= "INSERT into brand_login (Name,email,Password,category) values ('$username','$email','$password','$category_names')";
        $result   = mysqli_query($conn, $query);
        if($result){
        	header("Location: login_signup_brand.html");

        }
        else
        {
        	echo "Incorrect query"; 
        }


?>
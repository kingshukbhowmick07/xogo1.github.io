<?php 

$con = mysqli_connect('localhost','root');

if ($con) {
	echo "Connection sucessful";
}else{
	echo "no connection";
}

mysqli_select_db($con, 'websiteone');

$user=$_POST['user'];

$email=$_POST['email'];

$mobile=$_POST['mobile'];

$comments=$_POST['comments'];


$query = "insert into contactinfo(user, email, mobile, comment) values ('$user','$email','$mobile','$comments')";

echo "$query";

mysqli_query($con, $query);
header('location:index.php');



 ?>
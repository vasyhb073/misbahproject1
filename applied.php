<?php
error_reporting(0);
// $host = "localhost";
// $user = "root";
// $password = "";
// $db = "schoolproject"; 

// $data = mysqli_connect($host, $user, $password, $db);

// if($data){
//     echo "Connection Successful";
// }

$con = mysqli_connect('localhost', 'root');
// if($con){
//     echo "Connection Successful";
// }
// else{
//     echo "Connection Unsuccessful";
// }

mysqli_select_db($con, 'misbahproject');

$user=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$query="INSERT INTO visitors(username,email,mobile) VALUES('$user','$email','$mobile')";

$result=mysqli_query($con,$query);

if($result){
    echo "<script type='text/javascript'> 
    alert('Visitor Added Added Successfully');
    </script>";
}else{
    echo "Upload failed";
}















?>
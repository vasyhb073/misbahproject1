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
$comment=$_POST['comment'];

$query="INSERT INTO userinfodata(username,email,mobile,comment) VALUES('$user','$email','$mobile', '$comment')";
//to insert
$result=mysqli_query($con,$query);

if($result){
    echo "<script type='text/javascript'> 
    alert('Student Added Successfully');
    </script>";
    header("location:home.php");
}else{
    echo "Upload failed";
}















?>
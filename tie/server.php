<?php

$connection  = mysqli_connect("localhost","root");

mysqli_select_db($connection,'cstdatabase');

$username = $_POST['username'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into contactus(username,email,mobile,comment)
values('$username','$email','$mobile','$comment')";

$result = mysqli_query($connection,$query);
header("location: work.html");
?>
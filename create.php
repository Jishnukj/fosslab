<?php
$user = $_POST['user'];
$pass = $_POST['pass'];
$sql = mysqli_connect("localhost","root","1234");
$db = mysqli_select_db($sql,'record');
$query = "insert into login values('$user','$pass')";
$res = mysqli_query($sql,$query) or die("Failed!");
?>

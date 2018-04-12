<?php

$username = $_POST['user'];
$password = $_POST['pass'];
$sql = mysqli_connect("localhost","root","1234") or die("failed to connect!");
$db = mysqli_select_db($sql,"record");
$query = "select * from login where user='$username' AND pass='$password'";
$res = mysqli_query($sql,$query);
$row = mysqli_num_rows($res);
if($row == 1)
{
	echo "Login successful";
}

else
{
	echo "Incorrect credentials";
}

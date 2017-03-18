<?php
include 'connect.php';
/* $foodid = $_POST['foodid']; */
$foodname = $_POST['foodname'];
$foodprice = $_POST['foodprice'];
$foodtype = $_POST['type'];

$sql_users = "insert into food (foodname,foodprice,foodtype) values ('".$foodname."','".$foodprice."','".$foodtype."');";
$res_users = mysqli_query($connect, $sql_users);

if($res_users== true)
{
	header("Location:AddFood.php?msg=Record added successfully");
	die();
   
}
else
{
	header("Location:AddFood.php?msg=Failed");
	die();
   
}


?>
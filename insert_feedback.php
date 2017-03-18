<?php
 include 'connect.php';

$name = $_POST['fbname'];
$emailid = $_POST['fbemailid'];
$contact = $_POST['fbcontact'];
$message = $_POST['message'];

$sql_users = "insert into feedback (name,emailid,contact,message) values ('".$name."','".$emailid."',,'".$contact."','".$message."');";
$res_users = mysqli_query($connect, $sql_users);

if($res_users == true)
{
	header("Location:index.php?msg=Feedback added successfully");
    die();
}
else
{
	header("Location:ContactUs.php?msg=Failed");
   die();
} 

?>
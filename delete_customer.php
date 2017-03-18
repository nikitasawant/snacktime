<?php
include 'connect.php';
session_start();
if(isset($_SESSION["username"])) {
	if($_GET){		
		$customerid=$_GET['id'];
		if($customerid!=''){
			$sql = "delete from customer where customerid=".$customerid;
			//echo $sql;
			$result = mysqli_query($connect,$sql);
			header("Location:FoodList.php?msg=deleted successfully");
		}else{
			header("Location:FoodList.php?msg=failed");
		}
	}
	
	
}else{
	// echo "asadsad";
	header("Location:Login.php");
	die();
}





?>
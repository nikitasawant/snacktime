<?php
include 'connect.php';
session_start();
if(isset($_SESSION["username"])) {
	if($_GET){		
		$foodid=$_GET['id'];
		if($foodid!=''){
			$sql = "insert into cart (customerid,foodid) values (".$_SESSION['customerid'].",".$foodid.")"; 
			echo $sql;
			$result = mysqli_query($connect,$sql);
			header("Location:FoodList.php?msg=added	 Successful");
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
<?php 
session_start();
include 'connect.php';
$username="";
	if(isset($_SESSION["username"])) {
		$username=$_SESSION["username"];
	}else{
		// echo "asadsad";
		header("Location:Login.php");
		die();
	}

	if($_POST){
		$foodname = $_POST['foodname'];
		$foodprice = $_POST['foodprice'];
		$foodtype = $_POST['type'];
		$foodid=$_POST['foodid'];
		if($foodname!=''&&$foodprice!=''&&$foodtype!=''){
			$sql = "update  food set foodname='".$foodname."',foodprice='".$foodprice."',foodtype='".$foodtype."' where foodid=".$foodid;
			//echo $sql;
			$result = mysqli_query($connect,$sql);
			header("Location:FoodList.php?msg=Updated successful");			
		}else{
			header("Location:EditFood.php?msg=Enter all the fields");
		}
	}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<title>UPDATE FOOD</title>
<script>
function validate()
{	
var fname=document.getElementById("fname").value;
var fprice=document.getElementById("fprice").value;
var ftype=document.getElementById("ftype").value;
if(fname=="")
{
document.getElementById("fnameError").innerHTML="*Please Enter Name";
return false;
}
if(fprice=="")
{
document.getElementById("fpriceError").innerHTML="*Please Enter Price of the Food";
return false;
}
if(ftype=="")
{
document.getElementById("ftype").innerHTML="*Please mention type of Food";
return false;
}
return true;
}
</script>
</head>
<body>
<!--  Free CSS Template by TemplateMo.com  --> 

<div id="templatemo_container">
	<div id="templatemo_header">
    	<div id="site_title"></div>
    </div> <!-- end of header -->
    
     <?php include_once 'menu.php';?>
    

 
 <form action="EditFood.php" method="post" onsubmit="return validate()">
  <input type="hidden" name="action"  value="updatefood">
  <table bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15" >
  
      <?php $sql_User = " select * from food where foodid='".$_GET["id"]."'" ;
  //echo $sql_User;
        $res_user = mysqli_query($connect,$sql_User);
        while($row_users = mysqli_fetch_array($res_user))
        {
  ?>
        <tr>
            <td>FoodId</td>
            <td>
                  <input type="text" name="foodid" value='<?php echo $row_users['foodid']; ?>' readonly/>
            </td>
         </tr> 
         
         <tr>
            <td>FoodName</td>
            <td>
                  <textarea rows="1" cols="20" name="foodname" id="fname"><?php echo $row_users['foodname']; ?>
                  </textarea>
                   <br>             
                  <span id="fnameError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>FoodPrice</td>
            <td>
                  <input type="text" name="foodprice" value='<?php echo $row_users['foodprice']; ?>' id="fprice">
                  <br>             
                  <span id="fpriceError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>FoodType</td>
            <td>
                 <textarea rows="1" cols="20" name="type"  id="ftype"><?php echo $row_users['foodtype']; ?>
                 </textarea>
                 <span id="ftypeError" style="color:red"></span>
            </td>
         </tr> 
          <tr>
               <td colspan="2">
                           <input type="submit" name="submit" value="UPDATE"/>
                           <input type="reset" value="RESET">
               </td>
           </tr>
           <?php }?>
      </table> 
   </form>
    <?php include_once 'footer.php';?> 
</body>
</html>
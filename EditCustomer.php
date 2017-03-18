<?php 
session_start();
include 'connect.php';
$username="";
$sql_User ="";
	if(isset($_SESSION["username"])) {
		$username=$_SESSION["username"];
		echo "username".$username;
		$sql_User = " select * from customer where customerusername='".$username."'" ;
  echo $sql_User;
	}else{
		 echo "asadsad";
		header("Location:Login.php");
		die();
	}

	if($_POST){
		$cname = $_POST['customername'];
		$caddr = $_POST['customeraddress'];
		$contact = $_POST['contact'];
		$cuname = $_POST['uname'];
		$cpass = $_POST['password'];	
		if($cname!=''&&$caddr!=''&&$contact!=''&&$cuname!=''&&$cpass!=''){
			$sql = "update  customer set customername='".$cname."',customeraddress='".$caddr."',contact='".$contact."',customerusername ='".$cuname."',customerpassword ='".$cpass."' where customerusername='".$username."'";
			//echo $sql;
			$result = mysqli_query($connect,$sql);
			header("Location:EditCustomer.php?msg=Updated successful");
			
		}else{
			header("Location:EditCustomer.php?msg=Enter all the fields");
		}
	}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>EDIT CUSTOMER</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script>
function validate()
{
	
var cname=document.getElementById("cname").value;
var caddress=document.getElementById("caddress").value;
var ccontact=document.getElementById("ccontact").value;
if(cname=="")
{
document.getElementById("cnameError").innerHTML="*Please Enter Name";
return false;
}
if(caddress=="")
{
document.getElementById("caddressError").innerHTML="*Please Enter Address";
return false;
}
if(ccontact=="")
{
document.getElementById("ccontactError").innerHTML="*Please Enter Contact Number";
return false;
}
if(isNaN(ccontact))
{
document.getElementById("ccontactError").innerHTML="Please Enter Contact Number in number";
return false;
}
if(ccontact.length<10)
{
document.getElementById("ccontactError").innerHTML="Please Enter Contact Number greater than 10 digit";
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
    
  <form action="EditCustomer.php" method="post" onsubmit="return validate()">
  
  
  <table bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15" >
  
  <?php 
        $res_user = mysqli_query($connect,$sql_User);
        while($row_users = mysqli_fetch_array($res_user))
        {
  ?>
        <tr>
            <td>Customer Id</td>
            <td>
                  <input type="text" name="customerid" value="<?php echo $row_users['customerid']; ?>" readonly/>
                  <br>             
                  <span id="cidError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>Customer Name</td>
            <td>
                  <textarea rows="1" cols="20" name="customername" id="cname"><?php echo  $row_users['customername']; ?>
                  </textarea>
                  <br>
                  <span id="cnameError" style="color:red"></span>
           </td>
         </tr> 
         <tr>
            <td>Customer Address</td>
            <td>
                 <textarea rows="5" cols="20" name="customeraddress" id="caddress"><?php echo  $row_users['customeraddress']; ?>
                 </textarea>
                 <br>
                 <span id="caddressError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>Contact Number</td>
            <td>
                  <input type="text" name="contact" id="ccontact" value='<?php echo  $row_users['contact']; ?>'/>
                  <br>
                  <span id="ccontactError" style="color:red"></span>
            </td>
         </tr> 
          <tr>
            <td>Set UserName</td>
            <td>
                  <input type="text" name="uname" value='<?php echo  $row_users['customerusername']; ?>'>
                 <br>
                  <span id="ccontactError" style="color:red"></span>
            </td>
        </tr> 
        <tr>
            <td>Set Password</td>
            <td>
                  <input type="password" name="password" value='<?php echo  $row_users['customerpassword']; ?>'/>
                  <br>
                  <span id="ccontactError" style="color:red"></span>
            </td>
        </tr> 
          <tr>
               <td colspan="2">
                            <input type="submit" name="submit" value="UPDATE"/>
                            <input type="reset" value="CLEAR">
               </td>
           </tr>
           <?php }?>
      </table>
    </form> 
   <?php include_once 'footer.php';?> 
</body>
</html>
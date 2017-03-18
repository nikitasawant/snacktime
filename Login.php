
<?php
include 'connect.php';
session_start();

if($_POST){
$username = $_POST['username'];
$password = $_POST['password'];
$type=$_POST['type'];

if($username!=''&&$password!=''){
	$sql = "SELECT * FROM customer WHERE customerusername ='".$username."' AND customerpassword ='".$password."'";
	if($type=="ADMIN"){
		$sql="SELECT * FROM admin WHERE adminusername='".$username."' AND adminpassword ='".$password."'";
	}
	
	$result = mysqli_query($connect,$sql);
	$numrows  = mysqli_fetch_array($result);
	$i=0;
	if (sizeof($numrows)>0)	{		
		$_SESSION['username'] = $username;
		$_SESSION['role'] = $type;
		$_SESSION['customerid'] = $numrows['customerid'];
		header("Location:index.php?msg=Login successful");
		die();
	}else
	{
	header("Location:Login.php?msg=failed");
  
	};
}
}


	
	
	
	//echo "Registration successful";
    //echo "<br><br><a href='index.php'></a>";



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script>
function validate()
{
var uname=document.getElementById("uname").value;
var pass=document.getElementById("pass").value;
if(uname=="")
{
document.getElementById("unameError").innerHTML="*Please Enter User Name";
return false;
}
if(pass=="")
{
document.getElementById("passError").innerHTML="*Please Enter Password";
return false;
}
return true;
}
</script>
</head>
<body>
<div id="templatemo_container">
	<div id="templatemo_header">
    	<div id="site_title"></div>
    </div> <!-- end of header -->
    
   <?php include_once 'menu.php';?>
    
<form  onsubmit="return validate()" method="post" action="Login.php">
   <table bgcolor="gray"  align="center" cellpadding="15" >
        <tr>
            <td>User</td>
            <td>
                <select name="type">
                  <option value="ADMIN">ADMIN</option>
                  <option value="CUSTOMER">CUSTOMER</option>
                </select>
             </td>        
         </tr> 
         <tr>
            <td>Name</td>
            <td>
                  <input type="text" name="username" id="uname">
                  <br>
                  <span id="unameError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>Password</td>
            <td>
                  <input type="password" name="password" id="pass">
                  <br>
                  <span id="passError" style="color:red"></span>
            </td>
         </tr> 
           <tr>
               <td colspan="2">
                           <input type="submit" value="LOGIN">
                         <button><a href="UpdatePassword.php">UPDATE PASSWORD</a></button>
               </td>
           </tr>
     </table>
  </form>     
  <?php include_once 'footer.php';?>  
</body>
</html>




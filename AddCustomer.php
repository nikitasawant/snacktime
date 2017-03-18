
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD CUSTOMER</title>
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
    
    
  <form action="insert_customer.php" method="post" onsubmit="return validate()">
  
  <table bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15" >
           
          
           
           <tr>
            <td>Customer Name</td>
            <td>
                  <textarea rows="1" cols="20" name="customername" id="cname">
                  </textarea>
                  <br>
                  <span id="cnameError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>Customer Address</td>
            <td>
                 <textarea rows="5" cols="20" name="customeraddress" id="caddress">
                 </textarea>
                 <br>
                 <span id="caddressError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>Contact Number</td>
            <td>
                  <input type="text" name="contact" id="ccontact">
                  <br>
                  <span id="ccontactError" style="color:red"></span>
            </td>
        </tr> 
        <tr>
            <td>Set UserName</td>
            <td>
                  <input type="text" name="uname" id="cuname">
                 
            </td>
        </tr> 
        <tr>
            <td>Set Password</td>
            <td>
                  <input type="password" name="password" id="cpass">
                  
            </td>
        </tr> 
        
          <tr>
               <td colspan="2">
                            <input type="submit" name="submit" value="ADD"/>
                            <input type="reset" value="CLEAR">
               </td>
           </tr>
      </table>
    </form> 
<?php include_once 'footer.php';?>
			  
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ADD FOOD</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<script>
function validate()
{
var fid=document.getElementById("fid").value;	
var fname=document.getElementById("fname").value;
var fprice=document.getElementById("fprice").value;
if(fid=="")
{
document.getElementById("fidError").innerHTML="*Please Enter Id";
return false;
}
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
    
    

 <form action="insert_food.php" method="post" onsubmit="return validate()">
  
  <table bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15" >

         <tr>
            <td>FoodName</td>
            <td>
                  <textarea rows="1" cols="20" name="foodname" id="fname">
                 </textarea>
                 <br>             
                  <span id="fnameError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>FoodPrice</td>
            <td>
                  <input type="text" name="foodprice" id="fprice">
                  <br>             
                  <span id="fpriceError" style="color:red"></span>
            </td>
         </tr> 
         <tr>
            <td>FoodType</td>
            <td>
                  <select name="type">
                    <option value="veg">VEG</option>
                    <option value="non veg">NON VEG</option>    
                  </select>  
                      
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
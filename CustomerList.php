<?php
       		include 'connect.php';
       		session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> CUSTOMER LIST</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--  Free CSS Template by TemplateMo.com  --> 

<div id="templatemo_container">
	<div id="templatemo_header">
    	<div id="site_title"></div>
    </div> <!-- end of header -->
    
      <?php include_once 'menu.php';?>
    
<?php
	    $sql_posts = " select * from customer " ;
        $res_posts = mysqli_query($connect,$sql_posts);
    
$table="
		<table bgcolor='gray' border='1' bordercolor='green' align='center' cellpadding='15'>
             <tr>
                <th>Customer Id</th>
                <th>Customer Name</th>
                <th>Customer Address</th>
                <th>Contact Number</th>";
				
				if(isset($_SESSION['role']))
			{
	               if($_SESSION['role']=="ADMIN")
				   {
                     $table=$table."<th>Delete</th>";
	               }
            }		

$table= $table."</tr>";
echo $table;
while($row_posts = mysqli_fetch_array($res_posts))
    {
        	 echo '<tr>';
        echo "<td><center>";
            echo $row_posts['customerid'];
        echo "</center></td>";
		
        echo "<td><center>";
            echo $row_posts['customername'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['customeraddress'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['contact'];
        echo "</center></td>";
		
		if(isset($_SESSION['role'])) {
        	if($_SESSION['role']=="ADMIN"){
          
			echo "<td><center>";
			echo "<a href='delete_customer.php?id=".$row_posts['customerid']."'>delete</a>";
			echo "</center></td>";
			    }
               }	
		
			echo "</tr>";
    }
    
	
                 	   
  echo"         
      </table>      
    ";
?>
   
      <?php include_once 'footer.php';?>  
</body>
</html>
<?php
       		include 'connect.php';
       		session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DISPLAY FOOD</title>

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
	    $sql_posts = " select * from food" ;
        $res_posts = mysqli_query($connect,$sql_posts);
    
$table="
	        <table bgcolor='gray' border='1' bordercolor='green' align='center' cellpadding='15'>
             <tr>
                <th>Food Id</th>
                <th>Food Name</th>
                <th>Food Price</th>
                <th>Food Type</th>
                <th>Food Quantity</th>";


if(isset($_SESSION['role'])) {
	if($_SESSION['role']=="ADMIN"){
$table=$table."<th>Edit</th> <th>Delete</th>";
	}else if($_SESSION['role']=="CUSTOMER"){
		$table=$table."<th>Add cart</th>";
	}
}
    $table= $table."</tr>";
    
    echo $table;

while($row_posts = mysqli_fetch_array($res_posts))
    {
        echo '<tr>';
        echo "<td><center>";
            echo $row_posts['foodid'];
        echo "</center></td>";
		
        echo "<td><center>";
            echo $row_posts['foodname'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['foodprice'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['foodtype'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo "1";
        echo "</center></td>";	
        
        if(isset($_SESSION['role'])) {
        	if($_SESSION['role']=="ADMIN"){
            echo "<td><center>";
			echo "<a href='EditFood.php?id=".$row_posts['foodid']."'>Edit</a>";
			echo "</center></td>";
			echo "<td><center>";
			echo "<a href='delete_food.php?id=".$row_posts['foodid']."'>delete</a>";
			echo "</center></td>";
			    }else if($_SESSION['role']=="CUSTOMER"){
					echo "<td><center>";
					echo "<a href='add_cart.php?id=".$row_posts['foodid']."'>cart</a>";
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
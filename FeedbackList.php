<?php
       		include 'connect.php';
       		session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

	<!--  Free CSS Template by TemplateMo.com  -->
	<div id="templatemo_container">
		<div id="templatemo_header">
			<div id="site_title"></div>
		</div>
		<!-- end of header -->

		 <?php include_once 'menu.php';?>

		

	<?php
	    $sql_posts = " select * from feedback " ;
        $res_posts = mysqli_query($connect,$sql_posts);
    
$table="
		<table bgcolor='gray' border='1' bordercolor='green' align='center' cellpadding='15'>
             <tr>
			<th>Feedback Id</th>
			<th>Name</th>
			<th>Email id</th>
			<th>Contact no</th>
			<th>Message</th>";
		

$table= $table."</tr>";
echo $table;
while($row_posts = mysqli_fetch_array($res_posts))
    {
        echo '<tr>';
        echo "<td><center>";
            echo $row_posts['fid'];
        echo "</center></td>";
		
        echo "<td><center>";
            echo $row_posts['name'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['emailid'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['contact'];
        echo "</center></td>";
		
		echo "<td><center>";
            echo $row_posts['message'];
        echo "</center></td>";
			echo "</tr>";
    }
    
	
		   
  echo"         
      </table>      
    ";
?>

		

	
	<?php include_once 'footer.php';?>
</body>
</html>
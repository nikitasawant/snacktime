
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tea and Meal - Free CSS Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
</head>
<body>

	<!--  Free CSS Template by TemplateMo.com  -->
	<div id="templatemo_container">
		<div id="templatemo_header">
			<div id="site_title"></div>
		</div>
		<!-- end of header -->

		<?php include_once 'menu.php';?>
		
			<div style="margin-left: 25px; margin-top: 25px; font-size: medium;">
			<h3>Snack Time</h3>
			<p>Shop no. 1, SB Road,</p>
			<p>Powai,</p>
			<p>Mumbai-400076</p>
		</div>
	
	<br />
		<div style="margin-left: 25px; margin-top: 25px;">
				<h2 align="left">Give your Feedback here..</h2>
				
			<form action="insert_feedback.php" method="post" onsubmit="return validate()">
		
				<table bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15" >
					<tr>
						<th>Name : </th>
						<td><input type="text" name="fbname"></td>
					</tr>

					<tr>
						<th>Email id : </th>
						<td><input type="email" name="fbemailid"></td>
					</tr>

					<tr>
						<th>Contact no : </th>
						<td><input type="text" name="fbcontact"></td>
					</tr>

					<tr>
						<th>Message : </th>
						<td><textarea cols="20" rows="5" name="message"></textarea></td>
					</tr>

					<tr>
					    <td colspan="2">
						    <input type="submit" value="Submit">
						    <input type="reset" value="Reset">
						</td>
					</tr>

				</table>

			</form>
		</div>
			
			
<?php include_once 'footer.php';?>
</body>
</html>

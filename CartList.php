<%@ page import="java.util.List,com.foodplazashubham.pojo.Cart" language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> CART LIST</title>
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

<% List<Cart> cartlist=(List<Cart>)session.getAttribute("cartlist"); %> 
     <form action="" method="post">
     <input type="hidden" name="action" value="placeorder"></input>
      <table style="width:50%" bgcolor="gray" border="1" bordercolor="green" align="center" cellpadding="15">
           <caption>CART LIST</caption>
             <tr>
                <th>Food Name</th>
                <th>Food Price</th>
                <th>Quantity</th>
             </tr>
             /* ADD php code for this
			 <% 
          for (int i=0;i<cartlist.size();i++)
         {
        	Cart c=cartlist.get(i);%>
        	<tr>
        	 <td><%=c.getFoodName() %></td>
        	 <td><%=c.getFoodPrice()%>
        	  <input type="hidden" name="foodprice" value="<%=c.getFoodPrice()%>"></input>
        	 </td>
        	 <td><select name="quantity">
        	   <% 
                   for (int j=0;j<50;j++)
                  {%>
                  <option value="<%=j %>"><%=j %></option>
                  <%}%>
                  </select>
        	 </td>        	
        	 <td><a href="CommonCartServlet?action=delete&cartid=<%=c.getCartId() %>">DELETE</a></td>
        	</tr>
         <%}%> */
         <tr>
            <td colspan="4" align="center">
              <input type="submit" value="Place Order"/>
            </td>
         </tr>
      </table>    
      <?php include_once 'footer.php';?>
</body>
</html>
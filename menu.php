<?php
       		include 'connect.php';
       		session_start();
 ?>
  <div id="templatemo_menu">
        <ul>
        	<li class="current"><a href="index.php"><b>Home</b></a></li>
            <li><a href="FoodList.php"><b>Food Menu</b></a></li>
		<?php	
			if(!isset($_SESSION['role']))
			{?>
				<li><a href="AddCustomer.php"><b>Register</b></a></li>
			    <li ><a href="Login.php"><b>LOGIN</b></a></li>
				
		<?php	}	
    	?>
            
            
     
        <?php     
         if(isset($_SESSION['role'])) 
		 {
	        if($_SESSION['role']=="ADMIN")
			{?>
              <li><a href="CustomerList.php"><b>Show Customer</b></a></li>
              <li ><a href="AddFood.php"><b>Add Food</b></a></li>
              <li><a href="FeedbackList.php" ><b>View Feedback</b></a></li>
         <?php   }
         }   
       
         if(isset($_SESSION['role'])) 
		 {
	        if($_SESSION['role']=="CUSTOMER")
			{?>
    	   	 <li ><a href="EditCustomer.php"><b>Edit Customer Profile</b></a></li>
    		  <li ><a href="CartList.php"><b>Show Cart</b></a></li>
			  <li><a href="ContactUs.php"><b>Contact us</b></a></li>
		<?php	}
		 }
		  
    	 
          if(isset($_SESSION['role']))  
		  {	?>	
               
                       
              <li ><a href="logout.php"><b>LOGOUT</b></a></li>
		<?php  }
		 ?>
        </ul>
    </div> <!-- end of menu -->
<!DOCTYPE html>
<html>

<head>
		<title>This is payment page</title>
		<link rel="stylesheet" type="text/css" href="../css/pay1.css">
		<script src="../js/pay1.js"></script>
</head>
<body >

		 <div class="header">
	 
	    <br>
	    <div class="logo">
	      <img src="../image/logo.jpeg" width="120px" height="120px" >
	    </div>
	
	     <div class="avtar">
     	   <img src="../image/avatar.png" width="90px" height="90px">
	     </div>
	
	     <div class="dropdown">
           <button onclick="myFunction()" class="dropbtn" href="home.html">Log Out</button>
         </div>
          <center> 
	     <h1 class="a2">  CEYLON GROCERY DELIVERY</h1>
	    </center>
	              <br><br><br>
	   
	     <ul>
	        <li><a href="home">Home</a></li>
            <li><a href="menu.html">Grocery shops & items</a></li>
            <li><a href="Bestdeals.html">Best Deals</a></li>
		    <li><a href="mycart.html" title="Go to My Cart">My Cart</a></li>
		    
		    <li><a href="About Us.html">About Us</a></li>
		    <li><a href="Contactus.html">Contact Us</a></li>
         </ul>

         <div class= "searchbar">
			<input type="text" placeholder = "S e a r c h   i t e m s..." >
		</div>
        </div>

         <br><br>

	
	<div class="content">	 
	<center>
	<br>
	<h1> SECURE PAYMENT</h1><br>
	
	<form action="pay.php" method="POST">
	
		<h3>Choose your Payment Method</h3><br>
		<select>
			<option><h3>Credit Card </h3></option>
			<option><h3>Debit Card</h3></option>
		</select><br><br>
		<img src="../image/pay.jpg" class="pay">

		<label><h3>Card holder name</h3></label>
		<input type="text" id="id3" name="id3" style="width:500px"  placeholder="XXXXXXXXXXXXX" required ><br><br>
		<label><h3>Card Number</h3></label><br>
		<input type="text" id="id4" name="id4" style="width:500px" placeholder="xxxxxxxxxxxx" required ><br><br>
		<label><h3>Expiry Date</h3></label><br>
		<input type="text" id="id5" name="id5" style="width:500px"  placeholder="xx/xx/xxxx" required ><br>
		<label><h3>Security Code</h3></label><br>
		<input type="password" id="id6" name="id6" style="width:500px"  placeholder="xxxxxxx" required ><br><br>
		<h3>Accept privacy policy terms</h3>
		<input type="checkbox" id="checked" name="check" required onclick="enableButton()"><br><br>
		
		<input type="submit" class="sub" name="sub" value="CONFIRM PAYMENT" style="width:500px"  >
	</form>
	</center>
	</div><br><br><br><br><br>

	 <footer>
	 
	
		   <div class="blackbox">
		   
			   <h1 align="center"class="h1">Quick Links</h1>
			   <li><a href="Trackyourorder.html">Track your order</a></li>
			   <li><a href="Delivery.html">Delivery & Returns</a></li>
			   <li><a href="Privacy.html">Privacy Policy</a></li>
			   <li><a href="Payment.html">Payment & Security</a></li>
			   <li><a href="Conditions.html">Terms & Conditions</a></li>
			   <li><a href="FAQs.html">FAQs</a></li>
					
					
			   <p align="center"class="p1">Ceylon Grocery DeliveryPvt Ltd.</p>
			   <p align="center"class="p2">No:148, Vauxhall Street, Colombo 2,</p>
			   <p align="center"class="p3">Sri Lanka.</p>
			   <p align="center"class="p4">+94 11 2303400</p>
			   <p align="center"class="p5">( 24 Hours available service.)</p>
								
			   <h2 align="center"class="h2">Categories</h2>
					
			   <p align="center"class="p6">Daily essentials.</p>
			   <p align="center"class="p7">Spices</p>
			   <p align="center"class="p8">Shower items</p>
			   <p align="center"class="p9">Beauty items</p>
			   <p align="center"class="p10">Cleaning products</p>
			   <p align="center"class="p11">Flour & instead mixes</p>
					
				
			   <h3 align="center"class="h3">Customer Service </h3>
					
			   <p align="center"class="p12">About Us</p>
			   <p align="center"class="p13">Contact Us</p>
				
			   <img src="../image/logo.jpeg" class="deli">
			   <img src="../image/fb.png" class="fb">
			   <img src="../image/twt.png" class="twt">
			   <img src="../image/youtube.png" class="youtube">
			   <img src="../image/insta.png" class="insta">
			   <img src="../image/visa.jpg" class="visa">
			   <img src="../image/Maestro.png" class="maestro">
		</div>
        </footer>



	
	
</html>
</body>
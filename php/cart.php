<!DOCTYPE html>
<html>
	<head>
		<title>Online Grossery delivery System</title>
		<link rel="stylesheet" type="text/css" href="../css/homestyle.css">
		<link rel="stylesheet" type="text/css" href="../css/bodystyle2.css">
		<script>
			function validateForm() {
				var x = document.forms["promocoeForm"]["promocode"].value;
				if (x == "") {
					alert("Promocode must be filled out");
					return false;
				}
			}

			function manage(txt) {
				var bt = document.getElementById('btSubmitpromocode');
				if (txt.value != '') {
					bt.disabled = false;
				}
				else {
					bt.disabled = true;
				}
			}
		</script>
	</head>
	<body>
	
	
		<a href="home.html" title="Go to Home Page"><img src="../images/loga.png" width="100px" height="100px" ></a>
		<ul id="b1">
		
		<img src="../images/1.png" class="aaa">
		<a href = "login1.html"> <img src="../images/1.png" class="aaa" > </a>	
			
		   
			<li class="a1"> <center> Ceylon Grocery Delivary </center></li>
			
			
			<br>
			<br>
			<li><a href="#">Home</a></li>
			<li><a href="menu.html">Grocery shops & items</a></li>
			<li><a href="../html/Bestdeals.html">Best Deals</a></li>
			<li><a href="mycart.html" title="Go to My Cart">My Cart</a></li>
			<li><a href="login1.html">Login</a></li>
			<li><a href="../../resindu/html/signup.html">SignUp</a></li>>
			<li><a href="About Us.html">About Us</a></li>
			<li><a href="Contactus.html">Contact Us</a></li>
			
			
			<div class= "searchbar">
			<input type="text" placeholder = "S e a r c h   i t e m s..." >
			</div>
			
		</ul>
			<br>
			<br>
			<br>
			<hr class="a3">
		
	</body>
	
 <div class ="a5">
<br>
<br>   
   <?php include("orderproducts.php") ?>

	<br>
	<br>
	<br>
<!--<form class="form-inline"> 
		<label for="code">Promo Code:</label>
  <input type="code" id="pwd" placeholder="Enter password" name="pswd">
  <button type="submit">Submit</button>
</form> -->

  
	<br>
	
  <table class="center">
	  <tr>
		  <td>
		  <form name="promocoeForm" method="POST" action="cartpromocode.php" onsubmit="return validateForm()" method="post" class="form-inline">
			<label for="code">Promo Code:</label>
			<input type="text" name="promocode" placeholder="Enter Promo Code" onkeyup="manage(this)">
			<button type="submit" id="btSubmitpromocode" disabled>Submit</button>
			<!--<input type="submit" value="Submit"> -->
		  </form>

		  </td>
	  </tr>
	  <tr>
		  <td>
		  <hr class="a3"> 
	  	  </td>
	  </tr>
	  <tr>
		  <td>
		  	<div class="center">
			  <table class="center">
				  <tr>
					  <td>
					  	<button type="button" id="block"> Update Quantity </button>
						<button type="button" id="block"> Continue Shopping </button>
					  </td>
				  </tr>
			  </table>

			</div>
		  </td>
	  </tr>

  </table>
</div>


<hr class="a3">
			<br/>
			<br>
		<br>
		<br> 
		<br>
		<br>
		<br>
		<br>
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
				
				 <img src="../images/delivery.jpg" class="deli">			
					<img src="../images/fb.png" class="fb">
					<img src="../images/twt.png" class="twt">
					<img src="../images/youtube.png" class="youtube">
					<img src="../images/insta.png" class="insta">
					<img src="../images/visa.jpg" class="visa">
					<img src="../images/Maestro.png" class="maestro">
				</div>
            
		
	</footer>
		
</html>


 <?php session_start(); 
 
 
		
				$conn =mysqli_connect("localhost","root","","property");
				if(isset($_SESSION['mobile'])){ 
				$mob = $_SESSION['mobile'];
				
				$sql="SELECT * FROM customer WHERE mobile_phone= '$mob' ";
				$result=mysqli_query($conn,$sql);
				$row=mysqli_fetch_array($result);
				}
				//echo $row['name'];
 ?>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="property_listing.php">PROPERTY LISTINGS</a></li>
      <li><a href="about.php">ABOUT US</a></li>
      <li><a href="contact.php">CONTACT US</a></li>
	  <li><a href="feedback.php">FEEDBACK</a></li>
    </ul>
      <ul class="nav navbar-nav navbar-right">


		<?php if(isset($_SESSION['mobile'])){ 
		
		?>
		<li style="color:white;">Hello <?php echo $row['name']; ?></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		<?php } else { ?>
				<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
		        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
		<?php } ?>
      </ul>
    </div>
  </div>
</nav> 
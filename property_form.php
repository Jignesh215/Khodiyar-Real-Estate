<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<title>Khodiyar Real Estate </title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> 
</head>

<body>
<?php include("header.php"); ?>
<?php include('admin/connection.php'); ?>
 
<?php

//while($row_id_property=mysql_fetch_array($id_property_result)){
	


//echo $_SESSION['mobile'];
$id_property = $_GET['id_property'];
$id_property_sql="SELECT * FROM property WHERE id_property='$id_property'";
$id_property_result=mysqli_query($conn,$id_property_sql) or die(mysql_error());

while($row_id_property=mysqli_fetch_array($id_property_result)){
$name_property=$row_id_property["name_property"];
$price=$row_id_property["price"];
$type_property=$row_id_property["type_property"];
$beds=$row_id_property["beds"];
$baths=$row_id_property["baths"];
$text=$row_id_property["text"];
$land_area=$row_id_property["land_area"];
$groos_floor_area=$row_id_property["groos_floor_area"];
$image=$row_id_property["name_property"];
$filename = "admin/images/$name_property.jpg";



if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$name_property.jpg"; 
}






print<<<HERE
<td align="center"><br><br>
<p align="center"><img src="$filename"  width="929" height="619"></p>
</td>
<td valign="top" class="text_menu">
<table width="277" border="0" cellspacing="0" cellpadding="0" class="text_menu thumboa">
  <tr>
    <td align="left" colspan="3">
<br>
    <text class="text_menu">/ / Item Code: <text class="highlight">MO$id_property</text> / /</text>
    <table class="text_menu thumboa" width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="95">Item Name :</td>
        <td width="188" class="highlight">$name_property</td>
      </tr>
      <tr>
        <td>Item Price :</td>
        <td>RM <text class="highlight">$price</text>
		</td>
      </tr>
      <tr>
        <td>Land Area :</td>
        <td> <text class="highlight">$land_area</text>
		</td>
      </tr>
      <tr>
        <td>Groos Floor:</td>
        <td><text class="highlight">$groos_floor_area</text>
		</td>
      </tr>
    </table></td>
  </tr>
<br><br>
</td></tr></table>
<br>
<u>Contact Agent About this Listing: 7874693118</u><br><br>
<hr>






 <hr>
 	

</td>
<br>
</table>

HERE;

	if(isset($_SESSION['mobile'])){
$mobile = $_SESSION['mobile'];

	$sql = "SELECT * FROM customer WHERE mobile_phone='$mobile'";
$row=mysqli_query($conn,$sql) or die(mysqli_error());
$cus=mysqli_fetch_array($row);
$name=$cus["name"];
$email=$cus["cus_email"];

	echo"<form name='form1' method='post' action='property_form_success.php'>
<table class='thumboa'>
<tr><td>Name </td><td>:<input type='text' value='$name' name='name'></td></td></tr>
<tr><td>Email </td><td>:<input type='text' value='$email' name='cus_email'></td></td></tr>
<tr><td>Date </td><td>:<input type='date' required name='date'></td></td></tr>
<tr><td>Time </td><td>:<input type='time' required name='time'></td></td></tr>
<tr><td>Reason </td><td>:<textarea required name='reason' width='333'></textarea></td></td></tr>
</table>
<input type='hidden' name='id_property' value='$id_property'>
<p align='left'><input type='submit' name='submit' value='Book Now' /></p>
</form>";
}
else{
	echo "<a href='login.php'><center><button style='color:red;text-align:center;'>Please Login to Book Property...</button></center></a><br>";
}


}
 ?>
 <div class="container-fluid fotter">
<p>Designed by Jignesh, Suraj, Vedant.</p>
</div><!-- close fotter -->
</body>
</html>
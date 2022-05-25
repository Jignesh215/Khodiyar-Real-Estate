<?php
//include("connection.php");
$conn =mysqli_connect("localhost","root","","property");

if(isset($_POST['submit'])){
	
$name=$_POST["name"];
$mobile=$_POST["mobile_phone"];
$email=$_POST["cus_email"];
$password=$_POST["password"];

$insert_sql="INSERT INTO customer set name='$name', mobile_phone='$mobile', cus_email='$email', password='$password'";

$sql_result=mysqli_query($conn,$insert_sql) or die("Error in inserting data due to
".mysqli_error());

if($sql_result){
echo "<a href='index.php'><h4 class='alert_success'>You Have Been Registered Successfully!. Please <a href='login.php'>Login here</a></h4></a>";
//header("location:login.php");
}
else{
echo "Error in inserting new data";
}
}
?>

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
<div class="container-fluid banner">
<img src="images/contact.jpg" class="img-responsive"/>
</div><!-- close banner -->

<div class="container-fluid leave">
    <div id="find">
      <h2>Please Register Here</h2>
      <form name="form1" method="post" action="">
        <table width="402" border="0" cellpadding="2" cellspacing="0" class="black thumboa">
		<tbody>
          <tr>
            <td>Name </td>
            <td>:</td>
            <td><input name="name" required type="text" width="333"></td>
          </tr>
          <tr>
            <td>Contact </td>
            <td>:</td>
            <td><input name="mobile_phone" required type="text" width="333"></td>
          </tr>
          <tr>
            <td>Email </td>
            <td>:</td>
            <td><input name="cus_email" required type="text" width="333"></td>
          </tr>
			<tr>
            <td>Password </td>
            <td>:</td>
            <td><input name="password" required type="password" width="333"></td> 
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="submit" width="333"></td>
          </tr>
		  </tbody>
        </table>
      </form>
    </div>	
</div><!-- close leave -->	
    <div class="container content_bottom">
      <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><div class="features">
            <h4 style="background:url(images/services.jpg) left center no-repeat;">Profile</h4>
            <h3 style="padding-left:25px;">About me            </h3>
            <table width="360" border="0">
              <tr>
                <td width="154"><img src="images/aaaassss.jpg" width="149" height="155"></td>
                <td width="190" class="addo"><p>Nirav Patel</p>
                  <p>Senior Negotiator</p>
                  <p>+91 9714924552</p>
                  <p>niravpatel212@yahoo.com</p>
                  <p>www.khodiyarestate.com</p>
                  <p>&nbsp;</p></td>
              </tr>
          </table>
            
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</div><!-- close centro -->
<div class="container-fluid fotter">
<p>Designed by Jignesh, Suraj, Vedant.</p>
</div><!-- close fotter -->
</body>
</html>
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
<img src="images/pro.jpg" class="img-responsive"/>
</div><!-- close banner -->
<div class="container centro">
    <h1>House Sale </h1>
    <h3>New Houses for Sales</h3>
    <br>
    <p>
</p>
    <div id="house_sales">
      <table width="275" border="0" cellspacing="0" cellpadding="0" style="float:left;">
        <tr>
          <td align="center"><?php include('admin/connection.php'); ?>
 
        <?php 
		$search = isset($_POST['search']) ? $_POST['search'] : null;
$sql_search="SELECT *
FROM property WHERE name_property like '%$search%' OR beds like '%$search%' OR baths like '%$search%'";
$search_result = mysqli_query($conn,$sql_search) or die(mysqli_error());
 
$i=0;
$items=mysqli_num_rows($search_result);
while(($data=mysqli_fetch_array($search_result))&&($i<$items)){
$id_property=$data["id_property"];
$name_property=$data["name_property"];
$price=$data["price"];
$image=$data["name_property"];
$filename = "admin/images/$name_property.jpg";

if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$name_property.jpg"; 
}

if($i%5==0){
print "<tr>";	
} 

print<<<HERE


<td class="text_menu"><strong>
<p align="center">
<p align="left">[ ID:MO<text class="highlight">$id_property</text> ]</p>
<form method="post" action="item_details.php">
<input type="hidden" name="post_item" value="$id_property">
<input type="image" src="$filename"  height="139" width="136">
</form>
<br><br>
Item Name: <br>
<text class="highlight">$name_property</text></br>
RM <text class="highlight">$price</text></p>
<table width="150"><tr><td>
<input type="button" name="back" value="Back"
onClick="location.href='property_listing.php'" />
</td>
<td>
<input type="button" name="Form" value="Form"
onClick="location.href='property_form.php?id_property=$id_property'" /><input type="hidden" value="$id_property">
</td></tr></table>
</td>




HERE;
//end table
$i++;
if($i%5==0){
print "</tr>";	
}

   }
     
 ?>
</td>
      </table>
    </div>
    <h2>Find Your House</h2>
    <h3>Over 3 million properties</h3>
    <form name="form1" method="post" action="property_success.php">
    <table width="265" border="0" cellpadding="2" cellspacing="0" class="black thumboa">
  <tr>
    <td>Type of Property </td>
    <td>:</td>
    <td><select name="search" id="select">
                    <option>......</option>
                    <option>Condominium</option>
                    <option>Terraced House</option>
                    <option>Shop / Office</option>
                    <option>Bungalow House</option>
                    <option>Hotel / Resort</option>
                    <option>Semi-Detached House</option>
                    <option>Penthouse</option>
      </select></td>
  </tr>
  <tr>
    <td>Beds :</td>
    <td>:</td>
    <td><select name="serach" id="select">
      <option>...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      </select></td>
  </tr>
  <tr>
    <td>Baths :</td>
    <td>:</td>
    <td><select name="search" id="select">
      <option>...</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
        </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>
      <input name="button" type="submit" class="find" id="button" value="">    </td>
  </tr>
</table>
</form>
    <div class="container-fluid leave">
    <div id="find">
      <h2>Leave Your Message</h2>
      <h3>Let Me know </h3>
      <form name="form1" method="post" action="message_success.php">
        <table width="402" border="0" cellpadding="2" cellspacing="0" class="black">
          <tr>
            <td width="55">Reason </td>
            <td width="3">:</td>
            <td width="332"><select name="reason" type="text" width="333">
        				<option>I am looking to sell a Property</option>
                        <option>I am looking to rent a Property</option>
        				<option>I am looking to let a Property</option>
                        <option>I have another enquiry</option>
                        </select></td>
          </tr>
          <tr>
            <td>Name </td>
            <td>:</td>
            <td><input name="name" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Contact </td>
            <td>:</td>
            <td><input name="no_fon" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Email </td>
            <td>:</td>
            <td><input name="email" type="text" width="333"></td>
          </tr>
          <tr>
            <td>Message </td>
            <td>:</td>
            <td><textarea name="message" width="333"></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td><input name="button" type="submit"></td>
          </tr>
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
                <td width="154"><img src="admin/images/aaaassss.jpg" width="149" height="155"></td>
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
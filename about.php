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
<img src="images/about.jpg" class="img-responsive"/>
</div><!-- close banner -->
<div class="container centro">
    <h1>House Sale </h1>
    <h3>New Houses for Sales</h3>
    <br>
    <p>Khodiyar Real Estate was founded by Nirav Patel in 2008 with great aspiration of becoming the trusted and favorable agency among the individual or corporate property owners as well as the industry players.  The Compney is supported by a group of specialized, sensible, committed and result-orientated team players who strive to deliver personalized estate agency services of leasing, selling, marketing and managing individual or corporate properties of residential and commercial by fulfilling psychological and financial needs among willing buyers and sellers as well as tenants and landlords in a shifting market.</p>
    <p>&nbsp;</p>
    <p>Our committed and professional team players in Compney aware that every customer who is thinking of selling, buying, renting or leasing their properties, has a distinctive needs and exclusive requirements.  Our philosophy is to make the property transaction process as simple as possible and we work enthusiastically towards the completion of sale or rental as we understand that a fully satisfied customer is a customer who will always return. </p>
    <p>&nbsp;</p>
    <p>At Khodiyar, we strongly uphold the importance of extending committed efforts and providing resourceful and reliable market findings to our individual or corporate clients and expatriate tenants at a reasonable speed. Our team has a proven reputation for specialty on selected areas or projects regardless of landed houses, condominiums or commercial properties. </p>
    <p>The Khodiyar Real Estate Compney started with only 2 real estate negotiators and now has expanded to our second branch in Baroda with over 30 professional and dedicated negotiators.</p>
    
    <div id="find">
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
            <td><input name="button" type="submit" class="find" id="button" value="Submit"></td>
          </tr>
        </table>
      </form>
    </div><p></p>
    </div>
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
               <?php session_start(); 
				ob_start();
				
				$conn =mysqli_connect("localhost","root","","property");
				
				$mobile=$_POST['mobile'];
				$password=$_POST['password'];
				
				
				$sql="SELECT * FROM customer WHERE mobile_phone= '$mobile'  and  password= '$password'";
				
				$result=mysqli_query($conn,$sql);
				
				//Mysql_num_row is counting table row
				$count=mysqli_num_rows($result);
				//  If  result matched $myusename  and $mypassword, table row must be 1 row
				
				if($count==1){
				//  Register  $myusername, $mypassword  and redirect to file "adminMenu.php"
				
$_SESSION['mobile']=$mobile;
$_SESSION['password']=$password;

session_start();
header("location:index.php");
}
else {
echo "Wrong Mobile or Password";
}

ob_end_flush();
?>
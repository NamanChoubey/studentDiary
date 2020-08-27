<?php 
	session_start();
	if(isset($_SESSION['uid'])){
  		header("location:admin/admindash.php");
  	}
  	// else{
  	// 	header("location:../login.php");
  	// }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin login</title>
</head>
<body>
	<center>
	<h1>Admin Login</h1>
	<form action="login.php" method="post">
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="uname" required="required"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" required="required"></td>
			</tr>
			<tr>
				<td><input type="submit" name="login" value="login" required="required"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>
<?php 
include("dbcon.php");
if(isset($_POST['login'])){
  $username=$_POST['uname'];
  $password=$_POST['pass'];
  $query="select * from admin where username='$username' and password='$password'";
 /* $query="insert into admin(username,password) values('$username','$password')";
  $run=mysqli_query($con,$query);
  if($run==true)
  	 echo "successful";
  else
  	echo "not succes";
  	*/
 $run=mysqli_query($con,$query);
$row=mysqli_num_rows($run);
  if($row<1){
     ?>
		<script>
			alert('username or password not match !!');
			window.open('login.php','self');
		</script>
     <?php
  }
  else
  {
  	//session_start();
  	$data=mysqli_fetch_assoc($run);
  	$id=$data['id'];
  	$_SESSION['uid']=$id;
  	//header('location:admin/admindash.php');
  }
}

 ?>
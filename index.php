<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>student management system</title>
	<style>
		h2{
			margin-right: 50px;
		}
		
		td,th{
			border:1px solid black;
			 border-radius: 5px;
		}
		table{
			box-shadow: 1px 1px 6px black;
			border-radius: 5px;
		}
		
	</style>
</head>
<body>
	<h1 align="center">Welcome to Student Management System</h1>
	<hr>
	<h2 align="right"><a href="login.php">Admin Login</a></h2>
	<header class="indexform">
<form action="index.php" method="post">
	<table align="center" width="30%">
		<tr align="center">
			<td colspan="2"><h2>Student Infomation</h2></td>
		</tr>
		<tr>
			<td>Choose Class</td>
			<td>
				<select name="class" id="">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Enter Rollno</td>
			<td><input type="text" name="rollno" required="required"></td>
		</tr>
		<tr align="center">
			<td colspan="3">
				<input type="submit" value="show info" name="submit">
			</td>
		</tr>
	</table>
	</form>
	</header>
</body>
</html>
<?php 
include('dbcon.php');
if(isset($_POST['submit'])){
$roll=$_POST['rollno'];
$cls=$_POST['class'];
$sql="select * from student where rollno='$roll' and class='$cls'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);

?>
<center>
<table  style="margin-top: 20px;" width="80%">
	<tr>
		<th>
			Name
		</th>
		<td><?php echo $data['name']; ?></td>
	</tr>
	<tr>
		<th>
			Class
		</th>
		<td><?php echo $data['class']; ?></td>
	</tr>
	<tr>
		<th>
			Rollno
		</th>
		<td><?php echo $data['rollno']; ?></td>
	</tr>
	<tr>
		<th>
			Parent's contact no
		</th>
		<td><?php echo $data['pcontactno']; ?></td>
	</tr>
	<tr>
		<th>
			City
		</th>
		<td><?php echo $data['city']; ?></td>
	</tr>
	<tr>
		<th>
			Image
		</th>
		<td><img src="dataimg/<?php echo $data['image']; ?>" width="200px"></td>
	</tr>





</table>



<?php

}
 ?>
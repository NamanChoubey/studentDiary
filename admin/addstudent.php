<?php 
include('header.php');
include('titlehead.php');
 ?>
 </div >
 <div class="addstu">
 <form action="addstudent.php" method="post" enctype="multipart/form-data">
 	<table width="60%" align="center">
 		<tr>
 			<td>Roll No</td>
 			<td><input type="number" maxlength="13" name="rollno" placeholder="Enter your rollno" required="required"></td>
 		</tr>
 		<tr>
 			<td>Full Name</td>
 			<td><input type="text" name="fullname" placeholder="Enter your fullname" required="required"></td>
 		</tr>
 		<tr>
 			<td>City</td>
 			<td><input type="text" name="city" placeholder="Enter your city" required="required"></td>
 		</tr>
 		<tr>
 			<td>Parent Contact No</td>
 			<td><input type="number" maxlength="13" name="pcno" placeholder="Enter the Contact number" required="required"></td>
 		</tr>
 		<tr>
 			<td>Class</td>
 			<td><input type="number" maxlength="13" name="class" placeholder="Enter class " required="required"></td>
 		</tr>
 		<tr>
 			<td>Image</td>
 			<td><input type="file" name="simg" required="required"></td>
 		</tr>
 		<tr align="center">
 			<td><input type="submit" name="submit" value="add"></td>
 		</tr>
 	</table>
 </form>
 </div>
 		
 		</center>
 	</body>
 </html>
 <?php 
if(isset($_POST['submit']))
 {
include('../dbcon.php');

	$rollno= $_POST['rollno'];
	$fullname= $_POST['fullname'];
	$city= $_POST['city'];
	$pcno= $_POST['pcno'];
	$cls= $_POST['class'];
  $imgname=$_FILES['simg']['name'];
  $tempname=$_FILES['simg']['tmp_name'];
  move_uploaded_file($tempname,"../dataimg/$imgname");
    $sql="insert into student(rollno,name,city,pcontactno,class,image) values('$rollno','$fullname','$city','$pcno','$cls','$imgname')";
   $run=mysqli_query($con,$sql);
   if($run==TRUE){
    ?>
        <script>alert("successful submit");</script>
    <?php
   }
   else
   	echo $sql;

 }

  ?>
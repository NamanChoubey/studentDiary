<?php 
include('header.php');
include('titlehead.php');
include('../dbcon.php');
$sid=$_GET['sid'];
$qry="select * from student where id='$sid'";

 $run=mysqli_query($con,$qry);
 $data=mysqli_fetch_assoc($run);
 ?>
 </div >
 <div class="addstu">
 <form action="updatedata.php" method="post" enctype="multipart/form-data">
 	<table width="60%" align="center">
 		<tr>
 			<td>Roll No</td>
 			<td><input type="number" maxlength="13" name="rollno"  value="<?php echo $data['rollno'] ?>" required="required"></td>
 		</tr>
 		<tr>
 			<td>Full Name</td>
 			<td><input type="text" name="fullname"  value="<?php echo $data['name'] ?>" required="required"></td>
 		</tr>
 		<tr>
 			<td>City</td>
 			<td><input type="text" name="city"  value="<?php echo $data['city'] ?>" required="required"></td>
 		</tr>
 		<tr>
 			<td>Parent Contact No</td>
 			<td><input type="number" maxlength="13" name="pcno" value="<?php echo $data['pcontactno'] ?>"  required="required"></td>
 		</tr>
 		<tr>
 			<td>Class</td>
 			<td><input type="number" maxlength="13" name="class" value="<?php echo $data['class'] ?>" ></td>
 		</tr>
 		<tr>
 			<td>Image</td>
 			<td><input type="file" name="simg" required="required"></td>
 		</tr>
 		<tr align="center">
 			<td><input type="hidden" name="sid" value="<?php echo($data['id']); ?>"></td>
 			<td><input type="submit" name="submit" value="update"></td>
 		</tr>
 	</table>
 </form>
 </div>
 		
 		</center>
 	</body>
 </html>
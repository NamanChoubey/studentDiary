<?php 
include('header.php');
include("titlehead.php");
 ?>
 <div style="margin-top:20px;margin-bottom: 30px;">
 	<table>
 		<tr>
 			<form action="updatestudent.php" method="post">
 			<th>Enter class</th>
 			<td><input type="number" name="class"></td>
 			<th>Enter Student Name</th>
 			<td><input type="text" name="studentname"></td>
 			<td><input type="submit" name="submit" value="search"></td>
 			<hr>
 			</form>
 		</tr>
 	</table>
 	<hr>
 </div>
<div>
	<table width="80%" border="1" align="center">
		<tr style="background-color:black;color:white;">
			<th>No</th>
			<th>Image</th>
			<th>Name</th>
			<th>Rollno</th>
			<th>city</th>
			<th>class</th>
			<th>Parent's mobile number</th>
			<th>Operation</th>
		</tr>
		<?php 
			if(isset($_POST['submit'])){
			include('../dbcon.php');
			   $cls=$_POST['class'];
			   $name=$_POST['studentname'];
			   $sql="select * from student where class='$cls' and name like'%$name%'";
			   $run=mysqli_query($con,$sql);
			   if(mysqli_num_rows($run)<1){
			   	?>
					<script>alert("No Record Found");</script>
			   	<?php
			   }
			   else{
			   	$count=0;
			   	while($data=mysqli_fetch_assoc($run)){
			   		$count++;
			   		?>
						<tr align="center" style="background-color:green;color:white;">
							<td> <?php echo $count; ?> </td>
							<td><img src="../dataimg/<?php echo $data['image']; ?>" width="100px" alt="">  </td>
							<td> <?php echo $data['name']; ?> </td>
							<td> <?php echo $data['rollno']; ?> </td>
							<td> <?php echo $data['city']; ?> </td>
							<td> <?php echo $data['class']; ?> </td>
							<td> <?php echo $data['pcontactno']; ?> </td>
							<td style="color:white;"><a href="updateform.php?sid=<?php echo $data['id'] ?>">Edit</a></td>
						</tr>

			   		<?php

			   	}

			   }

			}


		 ?>
		
	</table>

</div>

</body>
</html>
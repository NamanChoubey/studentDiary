<?php 
	session_start();
  	if(isset($_SESSION['uid'])){
  		echo "";
  	}
  	else
  		{
  			header('location: ../login.php');
  		}

 ?>
 <?php 
include('header.php');

  ?>
 		<center>
 			<div id="admintitle">
 				<h1>Welcome to Admin Dashboard</h1>
 				<h2 align="right" class="logout"><a href="../logout.php" style="color:white;">Logout</a></h2>
 			</div>
 			<div class="admindash">
 				<table width="60%">
 					<tr>
 						<td>
 							<a href="">1</a>
 						</td>
 						<td>
 							<a href="addstudent.php"> ADD STUDENT DETAILS</a>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<a href="">2</a>
 						</td>
 						<td>
 							<a href="updatestudent.php"> UPDATE STUDENT DETAILS</a>
 						</td>
 					</tr>
 					<tr>
 						<td>
 							<a href="">3</a>
 						</td>
 						<td>
 							<a href="deletestudent.php"> DELETE STUDENT DETAILS</a>
 						</td>
 					</tr>
 				</table>
 			</div>
 		
 		</center>
 	</body>
 </html>
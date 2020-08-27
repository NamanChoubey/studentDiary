<?php 
include('../dbcon.php');
$rollno= $_POST['rollno'];
	$fullname= $_POST['fullname'];
	$city= $_POST['city'];
	$pcno= $_POST['pcno'];
	$cls= $_POST['class'];
  $imgname=$_FILES['simg']['name'];
  $tempname=$_FILES['simg']['tmp_name'];
  $id=$_POST['sid'];
  move_uploaded_file($tempname,"../dataimg/$imgname");
    $sql="update student set  rollno='$rollno',name='$fullname',city='$city',pcontactno='$pcno',class='$cls',image='$imgname' where id='$id'";
   $run=mysqli_query($con,$sql);
   if($run==TRUE){
    ?>
        <script>
        	alert("data updated successful");
        	window.open('updateform.php?sid=<?php echo $id; ?>','self');

    	</script>
    <?php

   }
   else
   	echo $sql;

  ?>
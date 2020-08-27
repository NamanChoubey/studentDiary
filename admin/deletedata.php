<?php 
include('../dbcon.php');
  $id=$_REQUEST['sid'];
 
    $sql="delete from student where id='$id'";
   $run=mysqli_query($con,$sql);
   if($run==TRUE){
    ?>
        <script>
        	alert("data Deleted successful");
        	window.open('deletestudent.php','self');

    	</script>
    <?php

   }
   else
   	echo $sql;

  ?>
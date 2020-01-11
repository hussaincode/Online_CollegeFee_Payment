



<?php

	$enrollment=$_GET['enrollment'];
		
	
	
	require('extra/db.php');
	
	 $qry="UPDATE student SET status='active' WHERE enrollment='$enrollment'";
	
	$result=mysqli_query($con,$qry);
	

	
	mysqli_close($con);
	header('location:admin_pannel.php');
?>

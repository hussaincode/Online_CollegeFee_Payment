<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>student detail</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
<div class="container">
<h1 align="center"><b>student detail</b></h1>
<table class="table table-bordered table-striped table-hover">
<tr>
<td>Sno</td><td>Name</td><td>enrollment</td><td>email</td><td>branch</td><td>mobile</td><td>delete</td><td>edit</td><td>status</td>
</tr>
<?php
$i=1;
require('extra/db.php');


$qry="SELECT * FROM student WHERE status='inactive'";

$result=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($result))
{   $enrollment=$row['enrollment']; 
	echo '<td>'; echo $i; $i++; 		    echo '</td>';
	echo '<td>'; echo $row['name']; 		echo '</td>';
	echo '<td>'; echo $row['enrollment']; 		echo '</td>';
	echo '<td>'; echo $row['email']; 		echo '</td>';
	echo '<td>'; echo $row['branch']; 		echo '</td>';
	echo '<td>'; echo $row['mobile']; 		echo '</td>';
	echo '<td>'; 
	echo "<button class='btn btn-danger btn-xs'><span class='glyphicon glyphicon-trash'
	  <a href='p'>Delete</a>
	</span></button>"; 		    echo '</td>';
	echo '<td>'; 
	echo "<button class='btn btn-primary btn-xs'><span class='glyphicons glyphicons-pencil'><a href='#'><font color='red'>Update</font></a></span></button>"; 		    echo '</td>';
	echo '<td>'; 
	echo "<button class='btn btn-primary btn-xs'><span class='glyphicons glyphicons-pencil'><a href='active.php?enrollment=$enrollment'><font color='red'>Active</font></a></span></button>"; 		    echo '</td>';
	
	echo '</tr>';
	
	
}
mysqli_close($con);
?>
</table>
</div>
</body>
</html>
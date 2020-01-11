<?php
session_start();
if(!isset($_SESSION['student']))
{header('location:index.php');}
$enrollment=$_SESSION['student'];
require('extra/db.php');
$qry="SELECT * FROM student WHERE enrollment='$enrollment'";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);

$name=$row['name'];		$mobile=$row['mobile'];
$file=$row['pic'];		$email=$row['email'];
$branch=$row['branch'];
mysqli_close($con);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
             <a class="navbar-brand" href="index.php"><img src="image/logo.png" height="37"></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
         
<?php if(!isset($_SESSION['student']))
{
	?>
    <li><a href="index.php">Student Login</a></li>
    <?php
}
else
{
	$enrollment=$_SESSION['student'];
	?>
      <li>
      <!--dropdown-->
      <div class="dropdown">
<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $enrollment;?>
<span class="caret"></span></button>
<ul class="dropdown-menu">
<li><a href="change_password.php">Change Password</a></li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>
      <!--dropdown-->
      </li>
<?php
}
?>
        </div>
    </div>
    <!-- /container -->
</div>

<!-- /Header -->

<!-- Main -->
<div class="col-lg-12">
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">

    <ul class="nav nav-pills nav-stacked" style="border-right:1px solid black">
        <!--<li class="nav-header"></li>-->
        <li class="active"><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
        <li><a href="result.php"><span class="glyphicon glyphicon-education"></span>Result</a></li>
        <li><a href="attendence.php"><span class="glyphicon glyphicon-education"></span>attendence</a></li>
    </ul>
</div><!-- /span-3 -->

    <!-- Right start-->

   <b> Welocome:</b><span class="text-danger" style="font-size:24px"><?php echo $name; ?></span>
     <hr>
     
    <div class="col-sm-9">
   
   <div class="container">
	<div class="row">

<div class="panel panel-default" style="width:950px">
  <div class="panel-heading">  <h4 >User Profile</h4></div
  
    ><div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-3">
                     <div  align="center"> <img alt="User Pic" src="upload/<?php echo $file; ?>" id="profile-image1" class="img-thumbnail img-responsive" style="width:170px" > 
                
              
                     
                     </div>
              
              <br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-9">
            <h4 style="color:#00b1b1;"><?php echo $name; ?> </h4></span>
             <p><strong>Enrollment: </strong><span><?php echo $enrollment; ?></span>            
            <p><strong>Branch: </strong> <span><?php echo $branch; ?></span>  
             <p><strong>Skills: </strong>
                        <span class="tags">html5</span> 
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                        <span class="tags">bootstrap3</span>
                    </p>
                      
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    				
                     <div class="popover-title">
                     
                     <?php


require('extra/db.php');
$qry="SELECT * FROM fee WHERE enrollment='$enrollment'";
$result=mysqli_query($con,$qry);
$row=mysqli_fetch_array($result);

mysqli_close($con);
?>

                     
    				<table class="table" border="5" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td><b>S.NO</b></td>
      <td><b>Enrollment</b></td>
      <td><b>Name</b></td>
      <td><b>Branch</b></td>
      <td><b>Tution Fee</b></td>
      <td style="color:red"><b>Late Fine(For Tution)</b></td>
      <td style="color:red"><b>Fine(For Attendence)</b></td>
      <td><b>Seminar</b></td>
      <td><b>other/Misc</b></td>
      <td style="color:blue"><b>Total</b></td>
    </tr>
    <tr>
      <td>1</td>
      <td><?php echo $enrollment=$row['enrollment']; ?></td>
      <td><?php echo $name=$row['name']; ?></td>
      <td><?php echo $branch=$row['branch']; ?></td>
      <td><?php echo $tution=$row['tution_fee']; ?></td>
      <td><?php echo $late_fine=$row['fee_fine'] ?></td>
      <td><?php echo $attendece_fine=$row['attendence_fine']; ?></td>
      <td><?php echo $seminar=$row['seminar']; ?></td>
      <td><?php echo $misc=$row['misc']; ?></td>
      <td><?php echo $total=$row['total']; ?></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<br>
				<h3 align="center" style="color:green">Select Option for Fee Payment</h3>
                
                <table class="table" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td colspan="5"><b>Online Payment</b></td>
    </tr>
    <tr>
      <td><form> <input type="radio" name="tution_fee" value="Tution"> Tution Fee</form></td>
      <td><form><input type="radio" name="tution_fee" value="FEE_FINE"> Fee Late Fine </form></td>
      <td><form> <input type="radio" name="tution_fee" value="ATTENDENCE"> Attendence Fine</form></td>
      <td><form> <input type="radio" name="tution_fee" value="ALL">All</form> </td>  
    </tr>
  </tbody>
</table>
           <div class="button" style="text-align:center">
   <a href="payment.php"> <button class="btn btn-success" style="text-align:center">Procees for Payment</button>  </a>        
</div>
</div>

 				 
                </div>

            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
   </div>
</div>


   
     </div>
     
</body>
</html>
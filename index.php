<?php
session_start();
if(isset($_SESSION['student']))
{header('location:profile.php');}
?>
<html>
<head>

 <title>harisss</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css"> 
 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
<link rel="stylesheet" href="css/style.css"> 
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  
</head>

<body>


<div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default">
      <div class="container">
       
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="image/logo.png" height="37"></a>
       
        </div>
    
       
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">About us</a></li>
            <li><a href="#">Acadmics</a></li>
            <li><a href="#">campus</a></li>
            <li><a href="#">Training & placement</a></li>
            <li><a href="#">gallery</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Student zone</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->





 

</div>
<div class="container">
<div class="row carousel-holder ">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="image/icot.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/iescampus.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/infranew1.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="image/c.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
<!--caursel close-->

<section>
<h1 align="center">WELCOME TO THE IES GROUP OF INSTITUTION</h1>
</section>
<div class="col-lg-3 container">

<div>
<h3> Latest updates</h3>
<marquee direction="up" scrollamount="6">

<h5>Registration for open campus drive for BE<span class="label label-danger">new</span></h5> <br>
<h5>Registration for CEAT Tyre </h5> <br>
<h5>Google Crowdsource Campaign Registration</h5><br>
<h5>Registration for open campus drive for BE 2018</h5><br>


</marquee>
</div>

</div>
<div class="col-md-6"></div>
<div class="col-md-3">


<h3>Student login</h3>
<?php
if(isset($_POST['login']))
{
	$enrollment=$_POST['enrollment'];
	$password=$_POST['password'];	
	
	require('extra/db.php');
	
	$qry="SELECT * FROM student WHERE enrollment='$enrollment' AND password='$password'";
	
	$result=mysqli_query($con,$qry);
	$row=mysqli_fetch_array($result);
	if(!$row)
	{echo 'Invalid Login details';}
	else
	{
		$_SESSION['student']=$enrollment;
		header('location:profile.php');
	}
	
	mysqli_close($con);
}

?>
<form method="post" action="#" >
<div class="form-group">
<label>Enrollment:</label>
<input type="text" class="form-control" name="enrollment" placeholder="Enter Enrollment">
</div>
<div class="form-group">
<label>Password:</label>
<input type="password" class="form-control" name="password" placeholder="Enter password">
</div>

<input type="submit" class="btn btn-success" value="Login" name="login">
<a href="signup.php" style="text-decoration:none"><input type="button" class="btn btn-default" value="Signup"></a></button>
</form>


</div>
</div>

    <footer>
     <div class="container">
       <div class="row">
       
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <span class="logo"><img src="image/logo.png"></span>
                </div>
                
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="menu">
                         <span>Menu</span>    
                         <li>
                            <a href="#">Home</a>
                          </li>
                               
                          <li>
                             <a href="#">About</a>
                          </li>
                               
                          <li>
                            <a href="#">Blog</a>
                          </li>
                               
                          <li>
                             <a href="#">Gallery </a>
                          </li>
                     </ul>
                </div>
           
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <ul class="address">
                        <span>Contact</span>       
                        <li>
                           <i class="fa fa-phone" aria-hidden="true"></i> <a href="#">Phone</a>
                        </li>
                        <li>
                           <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Adress</a>
                        </li> 
                        <li>
                           <i class="fa fa-envelope" aria-hidden="true"></i> <a href="#">Email</a>
                        </li> 
                   </ul>
               </div>
           
           
           </div> 
        </div>
    </footer>


</body>
</html>

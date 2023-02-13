<?php
session_start();
require_once("connection/connection.php");
$msg="";
$userid= $_SESSION['username'];
	if(!(isset($_SESSION['user']))){
	header("location: login.php");
	}
if(isset($_POST['save'])){
	if($_POST['hemotype']=="red"){
		//echo "<script type='text/javascript'> alert('You are Hyperglycaemic') </script>";
		header("location: hemohyper.php");
	}else if($_POST['hemotype']=="blue"){
		//echo "<script type='text/javascript'> alert('You are Hypoglycaemic'); </script>";
		header("location: hemohypo.php");
		}else{
			$msg = "<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> 
								Soory!! empty Input
							</div>";
		}
	}

?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>ExpertSickle Cell |SYMPTOMS PAGE</title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="shortcut icon" type="shortcut icon" href="images/5.jpg">
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-theme.min.css">
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">	
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
		<style type="text/css">
			 @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css");
			 @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css");
			 body{
			 	margin-top:20px;
				background-color: lightgreen;
			 	background-image:url(images/back2.jpg);
			 }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<center><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/diagnosis.php">diagnosis</a><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/glucometer.php">glucometer</a><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/logout.php">logo</a><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/hemohyper.php">hemohyper</a><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/logout.php">ut</a><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/index.php">index</a><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/hemohypo.php">hemohypo</a><img src="HEADER.png" alt="xpertDiab" class="img-rounded img-responsive"></center>

			    </div>
			    <div class="panel-body">
					<nav class="navbar navbar-default" role="navigation">
					  <!-- Brand and toggle get grouped for better mobile display -->
					  <div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
					    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?></a>
					  </div>

					  <!-- Collect the nav links, forms, and other content for toggling -->
					  <div class="collapse navbar-collapse navbar-ex1-collapse">
					    <ul class="nav navbar-nav">
					      <li><a href="about.php"><span class="glyphicon glyphicon-bullhorn"></span> About ExpertSickle Cell</a></li>
					      <li><a href="symptoms.php"><span class="glyphicon glyphicon-question-sign"></span> Symptoms</a></li>
					      <li><a href="tips.php"><span class="glyphicon glyphicon-cloud"></span> Tips</a></li>
					      <li class="active"><a href="#" style="background-color:skyblue;"><span class="glyphicon glyphicon-book"></span> Diagnostic</a></li>
					      <li class="dropdown">
					        <a href="#" class="dropdown-toggle" data-toggle="dropdown">...Others <b class="caret"></b></a>
					        <ul class="dropdown-menu">
					          <li><a href="suggestion.php"><span class="glyphicon glyphicon-comment"></span> Suggestion</a></li>
					        </ul>
					      </li>
					    </ul>
					    
					    <ul class="nav navbar-nav navbar-right">
					      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LogOut</a></li>
					      
					    </ul>
					  </div><!-- /.navbar-collapse -->
					</nav>
					<div class="row">
						<div class="col-md-3">
							<div class="list-group">
							  <div class="list-group">
							  <a href="diagnosis.php" class="list-group-item"><span class="glyphicon glyphicon-exclamation-sign"></span> Early Symptoms Check Test</a>
							  <a href="glucometer.php" class="list-group-item"><span class="glyphicon glyphicon-map-marker"></span> Hemoglobin Level Test</a>
							  <a href="dipstick.php" class="list-group-item active"><span class="glyphicon glyphicon-question-sign"></span> Genotype Test</a>
							  <a href="hemotype.php" class="list-group-item"><span class="glyphicon glyphicon-question-sign"></span>Hemoglobin Type Test</a>

							  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-open"></span> Get Your Answer</a>
							</div>
							</div>
						</div>
						<div class="col-md-7">
							<center>
							  <h3 style="font-family: monotype corsiva;">Hemoglobin Type Test Result</h3>
							</center>
							<?php echo $msg; ?>
							<form class="form-horizontal" role="form" action="hemotype.php" method="post">
							  <div class="form-group">
							    <label for="inputEmail1" class="col-lg-5 control-label">Enter your Hemoglobin Type Test Result</label>
							    <div class="col-lg-7">
							      <select name="hemotype" class="form-control">
							      	<option></option>
							      	<option value="red">Hemoglobin S +Ve</option>
							      	<option value="blue">Hemoglobin S -Ve</option>
							      </select>
							    </div>
							  </div>
							
							  <div class="form-group">
							    <div class="col-lg-offset-5 col-lg-7">
								 <button type="submit" class="btn btn-lg btn-primary" name="save">Print</button>
							     <!-- <button type="submit" class="btn btn-danger" name="save">Finalize Test</button> -->
							    </div>
							  </div>
							</form>
						</div>
						<div class="col-md-2">
						</div>
					</div>
		  		</div>
			    <div class="panel-footer">
			    	<center>
			    	  COPYRIGHT &COPY; DESIGNED  BY U13CS1160 &REG; <?php echo date("Y"); ?>
			    	</center> 
			    </div>
			</div>
		</div>

		









		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</body>
</html>

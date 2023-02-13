<?php
session_start();
	require_once("connection/connection.php");
$msg="";
$userid= $_SESSION['username'];
	if(!(isset($_SESSION['user']))){
	header("location: login.php");
	}
if(isset($_POST['save'])){
	if($_POST['ill']=="Yes" AND $_POST['vommitted']=="Yes" AND $_POST['frequent']=="Last 6 hours" AND $_POST['medication']=="Yes"){
		$msg = "<div class='alert alert-danger'><span class='glyphicon glyphicon-info-sign'></span> 
								You are at Higher Risk, Please go and See the Doctor.
							</div>";
	}else{
		$sql= "INSERT INTO question VALUES ('', '$userid', '{$_POST['ill']}', '{$_POST['vommitted']}', '{$_POST['frequent']}', '{$_POST['medication']}')";
		$res = mysql_query($sql) or die("eroor exist because: ".mysql_error());
		if($res){
			$msg = "<div class='alert alert-info'><span class='glyphicon glyphicon-info-sign'></span> 
								Your Diagnosis Record have been Successfully saved, Please go for <em>Blood Group Check Test</em>.
							</div>";
		}else{
			$msg = "<span>sorry the diagnosis failed, try again</span>";
		}
	}
}
	$sql = "SELECT * FROM question WHERE user_id ='$userid'";
	$res = mysql_query($sql) or die("eroor exist because: ".mysql_error());
	$row = mysql_fetch_array($res);
	$ill=$row['ill'];
	$vommitted=$row['vommitted'];
	$frequent=$row['frequent'];
	$medication=$row['medication'];
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>XpertDiab|SYMPTOMS PAGE</title>
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
			 	background-color: skyblue;
			 	background-image:url(images/back2.jpg);
			 }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
			    	<!--<center><img src="images/head.png" alt="xpertSickle Cell" class="img-rounded img-responsive"></center>-->
					<center><img src="HEADER.png" alt="xpertSickle Cell" class="img-rounded img-responsive"></center>

			    </div>
			    <div class="panel-body">
					<div class="alert alert-info alert-dismissable">
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					  Answer the questions as applicable to you in order	 to know if you are at risk of contacting the disease.
					</div>
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
					      <li><a href="about.php"><span class="glyphicon glyphicon-bullhorn"></span> About XpertDiab</a></li>
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
							  <a href="diagnosis.php" class="list-group-item active"><span class="glyphicon glyphicon-exclamation-sign"></span> Early Symptoms Check Test</a>
							  <a href="glucometer.php" class="list-group-item"><span class="glyphicon glyphicon-map-marker"></span> Bllod Group Check Test</a>
							  <a href="dipstick.php" class="list-group-item"><span class="glyphicon glyphicon-question-sign"></span> Genotype Test</a>
							  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-open"></span> Get Your Answer</a>
							</div>
							</div>
						</div>
						<div class="col-md-7">
							<center><h3> Are You at Risk <smal>... please ask to know?...</small></h3></center>
							<?php echo $msg; ?>
							<form class="form-horizontal" role="form" action="diagnosis.php" method="post">
							  <div class="form-group">
							    <label for="inputEmail1" class="col-lg-6 control-label">Are you Feeling Ill?</label>
							    <div class="col-lg-6">
							      <select name="ill" class="form-control">
							      	<option>--slect--</option>
							      	<option value="Yes" <?php if($ill=="Yes") echo "selected"; ?> >Yes</option>
							      	<option value="No" <?php if($ill=="No") echo "selected"; ?> >No</option>
							      </select>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail1" class="col-lg-6 control-label">Are feeling excessive fatigue or irritabliy, from                                 anaemia?</label>
							    <div class="col-lg-6">
							      <select name="vommitted" class="form-control">
							      	<option></option>
							      	<option value="Yes" <?php if($vommitted=="Yes") echo "selected"; ?> >Yes</option>
							      	<option value="No"  <?php if($vommitted=="No") echo "selected"; ?> >No</option>
							      </select>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail1" class="col-lg-6 control-label">For how long you are feeling pain in the chest, back,                                  arms or legs?</label>
							    <div class="col-lg-6">
							      <select name="frequent" class="form-control">
							      	<option></option>
							      	<option value="Last 6 hours"  <?php if($frequent=="Last 6 hours") echo "selected"; ?> >A Week</option>
							      	<option value="Earlier than that"  <?php if($frequent=="Earlier than that") echo "selected"; ?> >Two weeks back</option>
							      	<option value="Later than that"  <?php if($frequent=="Later than that") echo "selected"; ?> >Last Month</option>
							      </select>
							    </div>
							  </div>
							  <div class="form-group">
							    <label for="inputEmail1" class="col-lg-6 control-label">Are you Presently under medication?</label>
							    <div class="col-lg-6">
							      <select name="medication" class="form-control">
							      	<option></option>
							      	<option value="Yes" <?php if($medication=="Yes") echo "selected"; ?> >Yes</option>
							      	<option value="No"  <?php if($medication=="No") echo "selected"; ?> >No</option>
							      </select>
							    </div>
							  </div>
							  <div class="form-group">
							    <div class="col-lg-offset-5 col-lg-7">
							      <button type="submit" name="save" class="btn btn-primary">Save</button>
							    </div>
							  </div>
							</form>
						</div>
		  			</div>
		  			<div class="col-md-2">
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

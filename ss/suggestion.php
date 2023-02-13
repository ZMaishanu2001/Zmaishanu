<?php
session_start();
	if(!(isset($_SESSION['user']))){
	header("location: login.php");
	}

mysql_connect("localhost","root","");
	//select database to work with
	mysql_select_db("xpertsystem");
	if(isset($_POST['submit'])){
	//collecting form inputs using the specified method
	$date = date("Y-m-d");
    $time = date("H:i:s");
    $today= $date . "" . $time ;
	$suggestion=@$_POST['suggestion'];
	$query="INSERT INTO suggestion(id, date, suggestion) 
			VALUES(NULL, '$today', '$suggestion')";
	$action= mysql_query($query);
	if($action){
		$error="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					   Posting Successful
					</div>";
	}
	else{
	        $error="<div class='alert alert-danger alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					   Error in POSTING
		    </div>";
	
	    }
	}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title> XpertDiab|Suggest to XpertDiab </title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="shortcut icon" type="shortcut icon" href="images/5.jpg">
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
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
					<center><img src="HEADER.png" alt="xpertSickle Cell" class="img-rounded img-responsive"></center>
			    </div>
			    <div class="panel-body">
			    	<div class="row">
						<div class="col-md-3">
							<div class="list-group">
							  <div class="list-group-item"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?> </div>
							  <a href="about.php" class="list-group-item"> <span class="glyphicon glyphicon-bullhorn"></span> About XpertSickle Cell </a>
							  <a href="symptoms.php" class="list-group-item"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="diagnosis.php" class="list-group-item"> <span class="glyphicon glyphicon-book"></span> Take Diagnosis</a>
							  <a href="tips.php" class="list-group-item"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							  <a href="Suggestion.php" class="list-group-item active"> <span class="glyphicon glyphicon-comment"></span> Suggest / Comment</a>
							  <a href="logout.php" class="list-group-item"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a>
							</div>

						</div>
						<div class="col-md-9">
							<div class="alert alert-info">
							Please Fill In the Suggestion form for evaluation.<em>.......Remember, Your suggestion makes ExpertSickle Cell better......</em>
							</div>
						</div>
						<div class="col-md-2">
						</div>
						<div class="col-md-5">
								<?php
									if(isset($error)){
									echo $error;
									}
								?>
								<form class="form-horizontal" action="suggestion.php" method="post" role="form">
								  <div class="form-group">
									<label for="description" class="col-lg-3 control-label">Suggest</label>
									<div class="col-lg-9">
									  <textarea class="form-control" rows="3" cols="10" name="suggestion" required></textarea>
									</div>
								  </div>
								  
								  <div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
									  <button type="submit" class="btn btn-primary" name="submit">Submit Suggestion</button>
									</div>
								  </div>
								</form>		

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

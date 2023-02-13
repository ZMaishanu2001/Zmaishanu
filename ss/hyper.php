<?php
session_start();
require_once("connection/connection.php");
$userid= $_SESSION['username'];
	if(!(isset($_SESSION['user']))){
	header("location: login.php");
	}

?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title>ExpertSickle Cell|SYMPTOMS PAGE</title>
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
			      <img src="trtmnt.jpg" class="img-circle" height="250"><font size="10" style="font-family: monotype corsiva;">ExpertSickle Cell <small>Treatment Page</small></font>			    
			    </div>
			    <div class="panel-body">
					<div class="row">
						<div class="col-md-3">
							<div class="list-group">
							  <div class="list-group-item active"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?> </div>
							  <a href="about.php" class="list-group-item"> <span class="glyphicon glyphicon-bullhorn"></span> About ExpertSickle Cell</a>
							  <a href="symptoms.php" class="list-group-item"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="diagnosis.php" class="list-group-item"> <span class="glyphicon glyphicon-book"></span> Take Diagnosis</a>
							  <a href="tips.php" class="list-group-item"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							  <a href="suggestion.php" class="list-group-item"> <span class="glyphicon glyphicon-comment"></span> Suggest / Comment</a>
							  <a href="logout.php" class="list-group-item"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a>
							</div>
						</div>
						<div class="col-md-7">
							<table width="80%" class="table table-stripped table-hover table-bordered">
							    <tr>
							    <th colspan="2" class="info"><center><h3>SickleCell Anaemia Report Sheet</h3></center></th>
							    </tr>
							    <tr>
								    <th> Full Name:</th>
								    <td> <?php echo $_SESSION['name']; ?></td>
							    </tr>
							    <tr>
								    <th>Genotype Group:</th>
								    <td>SS</td>								    
								</tr>
								    <th>Treatment Plan:</th>
								    <td>
								    	The treatment plan can be followed to maintain a sound health:
								    <ol>
								    	<li>Folic acid should be given once daily</li>
										<li>Pencillin prophylaxis should be prescribed</li>
										<li>Exercise</li>
										<li>Ensure adequate access to water/hydration</li>
										<li>Education</li>
									</ol>
									</td>
							    </tr>
							    <tr>
							        
							    </tr>
							   
							</table>
									<div>	
										<center><a href="#" onClick="window.print()"><b>PRINT YOUR SLIP</b></a></center>
									</div>


							
							
						
						
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

<?php
session_start();
	if(!(isset($_SESSION['user']))){
	header("location: login.php");
	}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title> ExpertSickle Cell|ABOUT ExpertSickle Cell </title>
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
							  <a href="about.php" class="list-group-item active"> <span class="glyphicon glyphicon-bullhorn"></span> About ExpertSickle                              Cell </a>
							  <a href="symptoms.php" class="list-group-item"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="diagnosis.php" class="list-group-item"> <span class="glyphicon glyphicon-book"></span> Take Diagnosis</a>
							  <a href="tips.php" class="list-group-item"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							  <a href="suggestion.php" class="list-group-item"> <span class="glyphicon glyphicon-comment"></span> Suggest / Comment</a>
							  <a href="logout.php" class="list-group-item"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a>
							</div>

						</div>
						<div class="col-md-9">
							<font size="10" style="font-family: monotype corsiva;">ExpertSickle Cell</font>, <font size="3" style="font-align:justify;">is designed with a graphical user-friendly interface as a
							 diagnostic-aid tool by medical practitioners to guide in the diagnosis and treatment of Sickle Cell Anaemia. The system gets
							  patients information and then asks the patient series of questions that reveal symptoms of Sickle Cell Anaemia, then it will 
							  develop a treatment plan, also, with the information of patients gotten, it has a follow up of the patients to 
							  give advice to patients with Sickle Cell Anaemia. 
							</font>						</div>
						
					</div>

			    </div>
			    <div class="panel-footer">
			    	<center>COPYRIGHT &COPY; DESIGNED  BY U13cs1160 &REG; <?php echo date("Y"); ?></center> 
			    </div>
			</div>
		</div>

		









		<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</body>
</html>

<?php
session_start();
	if(!(isset($_SESSION['admin']))){
	header("location: index.php");
	}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title> ExpertSickle Cell|ADMIN PAGE </title>
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
         <link rel="shortcut icon" type="shortcut icon" href="images/5.jpg">
	    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

		<style type="text/css">
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
			    	<center>
					  <img src="HEADER.png" alt="xpertSickle Cell" class="img-rounded img-responsive">
			    	</center>
			    </div>
			    <div class="panel-body">
			    	<div class="row">
			    		<div class="col-md-3">
			    		</div>
						<div class="col-md-6">
							<h2 style="font-family: monotype corsiva">ExpertSickle Cell Admin Page</h2>
							
							<div class="list-group">
							  <a href="index.php" class="list-group-item active"> <span class="glyphicon glyphicon-user"></span> WELCOME  <?php echo $_SESSION['username']; ?></a>
							  <a href="viewuser.php" class=" list-group-item"> <span class="glyphicon glyphicon-folder-open"></span> View Users</a>
							  <a href="viewsuggestion.php" class="list-group-item"> <span class="glyphicon glyphicon-comment"></span> View Suggestions/ Comments</a>
							  <a href="logout.php" class="list-group-item"> <span class="glyphicon glyphicon-off"></span> Log Out</a>


							</div>

						</div>
						<div class="col-md-3">
						</div>
						
						
					</div>

			    </div>
			    <hr size="5"/>
			    <div class="panel-footer">
			    	<center>COPYRIGHT &COPY; <?php echo date("D-M-Y"); ?> DESIGNED  BY U13CS1160 </center> 
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

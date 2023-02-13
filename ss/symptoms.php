<?php
session_start();
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
		<style type="text/css">
			 @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css");
			 @import url("//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css");
			 body{
			 	margin-top:20px;
			 	/*background-color: skyeblue;*/
				background-color: lightgreen;
			 	background-image:url(images/back2.jpg);
			 }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
			    	<!--<center><img src="images/head.png" alt="xpertSickle Cell" class="img-rounded img-responsive"></center>-->
					<center><a href="file:///C|/Users/AHMAD/xampp/htdocs/expertsystem/tips.php">tips</a><img src="HEADER.png" alt="xpertSickle Cell" class="img-rounded img-responsive"></center>

			    </div>
			    <div class="panel-body">
			    	<div class="row">
						<div class="col-md-3">
							<div class="list-group">
							  <div class="list-group">
							  <div class="list-group-item"> <span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?> </div>
							  <a href="about.php" class="list-group-item"> <span class="glyphicon glyphicon-bullhorn"></span> About ExpertSickle Cell </a>
							  <a href="symptoms.php" class="list-group-item active"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="diagnosis.php" class="list-group-item"> <span class="glyphicon glyphicon-book"></span> Take Diagnosis</a>
							  <a href="tips.php" class="list-group-item"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							  <a href="suggestion.php" class="list-group-item"> <span class="glyphicon glyphicon-comment"></span> Suggest / Comment</a>
							  <a href="logout.php" class="list-group-item"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a>
							</div>
							</div>
						</div>
						<div class="col-md-9">
							<div class="alert alert-info">
								<font size="10" style="font-family: monotype corsiva;">Symptoms</font><br/> 
								People can often have sickle cell anaemia and be completely unaware. The main reason for this is that the symptoms, 
								when seen on their own, seem harmless. However, the earlier sickle cell anaemia is diagnosed the greater the chances
								 are that serious complications, which can result from having sickle cell anaemia, can be avoided.  
								<h3>Common symptoms of sickle cell anaemia </h3>
								The most common signs and symptoms of sickle cell anaemia are:
							    <div class="panel-group" id="accordion">
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
							          Jaundice
							        </a>
							      </h4>
							    </div>
							    <div id="collapseOne" class="panel-collapse collapse">
							      <div class="panel-body">
							        Have you noticed that your eyes are turning yellowi? Do you notice that if you went to toilet your urine is also yello? When you are experiancing all the above mentioned,better see your doctor and ensure you are taking all your prescribed medication especially pencilin. 
							        
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Joint Problem </a></h4>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse">
							      <div class="panel-body">
							       Children and adult that have Sickle Cell Disease should avoid playing in cool weather, washing their hair with cool water, and bathing in cool area.all these should lead to a severe joint problem.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							          Tiredness</a></h4>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse">
							      <div class="panel-body">
							        Always make sure you are taking your meals at time, Tiredness would result on due to the lack of properly taking meal or taking balanced diet.Make sure you are always taking Pencillin tablet, it served as a Vitamin.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
							          Difficulty Breathing
							        </a>
							      </h4>
							    </div>
							    <div id="collapsefour" class="panel-collapse collapse">
							      <div class="panel-body">
							        This might be the result of extreme weather and lack of vintilation. 
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
							          Unusual weight loss
							        </a>
							      </h4>
							    </div>
							    <div id="collapsefive" class="panel-collapse collapse">
							      <div class="panel-body">
						to avoid weight loss make sure you follow all the prescribed drugs and ensure a balanced diet
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
							          increase fatigue
							        </a>
							      </h4>
							    </div>
							    <div id="collapsesix" class="panel-collapse collapse">
							      <div class="panel-body">
							        If your blood is not circulating properly, you will feel fatique at all time. Make sure to see your doctor 
							      </div>
							    </div>
							  </div>
							  
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
							          Pain or Swelling in the Hands or Feet
							        </a>
							      </h4>
							    </div>
							    <div id="collapseseven" class="panel-collapse collapse">
							      <div class="panel-body">
							        This can be caused by cool weather. in cool weather, do not bath or wash your hair with a cool water.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseeight">
							          Pale Skin
							        </a>
							      </h4>
							    </div>
							    <div id="collapseeight" class="panel-collapse collapse">
							      <div class="panel-body">
							        Pale Skin is due to the lack of blood circulation or when your hemoglobin level is low.your skin will turn whitich.					         
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsenine">
							          Cool Hands or Feet
							        </a>
							      </h4>
							    </div>
							    <div id="collapsenine" class="panel-collapse collapse">
							      <div class="panel-body">
							      Your intense bone will be cool
							      </div>
							    </div>
							  </div>

							</div>

								
							</div>
								 
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

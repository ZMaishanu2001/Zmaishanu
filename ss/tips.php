<?php
session_start();
	if(!(isset($_SESSION['user']))){
	header("location: login.php");
	}
?>
<!DOCTYPE html>

<html lang="en">
	<head>
		<title> ExpertSickle Cell|DIABETES TIPS </title>
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
							  <a href="about.php" class="list-group-item"> <span class="glyphicon glyphicon-bullhorn"></span> About ExpertSickle Cell</a>
							  <a href="symptoms.php" class="list-group-item"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="diagnosis.php" class="list-group-item"> <span class="glyphicon glyphicon-book"></span> Take Diagnosis</a>
							  <a href="tips.php" class="list-group-item  active"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							  <a href="suggestion.php" class="list-group-item"> <span class="glyphicon glyphicon-comment"></span> Suggest / Comment</a>
							  <a href="logout.php" class="list-group-item"> <span class="glyphicon glyphicon-log-out"></span> Log Out</a>
							</div>

						</div>
						<div class="col-md-9">

							<h2 style="color:lightblue;"> <em>5 Tips for Controlling sickle cell anaemia </em></h2>
							<font size="10" style="font-family: monotype corsiva;">ExpertSickle Cell </font>, <font size="3" style="font-align:justify;"> developer have chacked different tips of sickle cell anaemia
							 and summarise that following these five tips will help control Sickle cell anaemia </font>
							<div class="panel-group" id="accordion">
							  
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							          Tip 1: Ensure adequate access to water/hydration
							        </a>
							      </h4>
							    </div>
							    <div id="collapseTwo" class="panel-collapse collapse">
							      <div class="panel-body">
							         There are many benefits to having access to Water. Taking much water can help you:<br/>
							         <ul>
    									<li>Promotes weight Loss</li>
   										 <li>Increase Energy and relieves fatique</li>
  										  <li>Improves Skin Complexion</li>
  									</ul>
									Research shows that drinking much water help in blood circulation. 
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							          Tip 2: Allow accomodations during extreme tempratures and conditions
							        </a>
							      </h4>
							    </div>
							    <div id="collapseThree" class="panel-collapse collapse">
							      <div class="panel-body">
							         Sickle Cell Disease Carries always need a moderate Temprature which can help in:
							        <ul>
    								<li>Breathing Smoothly</li>
   									 <li>Lower your risk of heart disease</li>
   									 <li>Prevent Fever</li>
   									</ul>

									too much cool area affect Sickle Cell Disease Carries by affecting their joint. Also, warm  Temprature makes themf eel diffucult in breathing.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
							          Tip 3: Get regular checkups
							        </a>
							      </h4>
							    </div>
							    <div id="collapsefour" class="panel-collapse collapse">
							      <div class="panel-body">
							       Due to the difficulty in their blood circulation, Sickle Cell Disease Carriers are advised to see their doctors regulary for their bllod level check up and other health condition.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
							          Tip 4: Get all recomended Vaccines
							        </a>
							      </h4>
							    </div>
							    <div id="collapsefive" class="panel-collapse collapse">
							      <div class="panel-body">
							       Get all recommended Vaccines recommended by your doctor.
							      </div>
							    </div>
							  </div>
							  <div class="panel panel-default">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
							          Tip 5: Take Penicillin every day
							        </a>
							      </h4>
							    </div>
							    <div id="collapsesix" class="panel-collapse collapse">
							    <div class="panel-body">
							       Pencillin Tablet serves as Vitamin to Sickle Cell Disease Carriers.
							     </div>
							 </div>
							  </div>
							  <div class="panel panel-danger">
							    <div class="panel-heading">
							      <h4 class="panel-title">
							        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
							          <span class="glyphicon glyphicon-exclamation-sign"></span> When to see your doctor
							        </a>
							      </h4>
							    </div>
							    <div id="collapseseven" class="panel-collapse collapse">
							    <div class="panel-body">
							        Always see your doctor when you have problem.
							     </div>
							 </div>
							  </div>

							</div>
							<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span>Disclaimer</em> These tips are not treatments equivalent to a doctor treatment, they are just prescribed, if sickle cell anaemia symptoms persist, <em>please see the doctor</em></danger>
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

		<script type="text/javascript" src="jquery-1.11.1.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</body>
</html>

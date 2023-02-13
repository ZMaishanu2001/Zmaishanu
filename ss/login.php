<?php
session_start();
	//connect to the server
	mysql_connect("localhost","root","");
	//select database to work with
	mysql_select_db("xpertsystem");	
	if(isset($_POST['login'])){
		//collecting form inputs using the specified method
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		//Collect every user in the database to check if signing in user already exist
		$sql="SELECT * FROM user WHERE username='$username' AND password='$password'";
		$query=mysql_query($sql);
		//count the rows in the recordset 
		$count=mysql_num_rows($query);
			//Register sessions and reidrect to about page
			if($count == 1){
				while($row = mysql_fetch_array($query)){
					$_SESSION['user'] = $row['user_id'];
					$_SESSION['username'] = $row['username'];
					$firstname = $row['firstname'];
	            	$lastname = $row['lastname'];
	            	$name = $firstname . " " . $lastname;
            		$_SESSION['name'] = $name;		
					}
			}
			else{
				$error="<div class='alert alert-danger alert-dismissable'>
						  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						   Incorrect Login parameters
			    </div>";
			}
			if(isset($_SESSION['user'])){
				header("location: about.php");
			}
	}
?>  
<html>  
<head lang="en">
	<title> XpertDiab|HOME PAGE </title>  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> 
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
			  
					<center><img src="HEADER.png" alt="xpertSickle Cell" class="img-rounded img-responsive"></center>

			    </div>
			    <div class="panel-body">
			    	<div class="row">
						<div class="col-md-3">
							<div class="list-group">
							  <a href="index.php" class="list-group-item active"> <span class="glyphicon glyphicon-home"></span> Home </a>
							  <a href="about.php" class="disabled list-group-item"> <span class="glyphicon glyphicon-bullhorn"></span> About XpertSickle Cell</a>
							  <a href="symptoms.php" class=" disabled list-group-item"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="#" class="disabled list-group-item"> <span class="glyphicon glyphicon-book"></span> Causes</a>
							  <a href="#" class="disabled list-group-item"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							</div>

						</div>
						<div class="col-md-5">
							<h1 style="font-family: monotype corsiva;">Welcome</h1>
							<font size="4" style="font-align:justify;">XpertSickle Cell, is designed with a graphical user-friendly interface as a diagnostic-aid tool by medical 
								practitioners to guide in the diagnosis and treatment of Sickle Cell. ...<a href="login.php"> Login to Learn more </a>... 
							</font>
						</div>
						<div class="col-md-4">
							<div class="login-panel panel panel-primary">
								<div class="panel-heading"><h3 class="panel-title" style="font-family:monotype corsiva">Login Form</h3> </div>
								<div class="panel-body"> 
									<?php
										if(isset($error)){
											echo $error;
										}
									?>
								<form role="form" method="post" action="login.php">   
			                        <fieldset>  
			                            <div class="form-group"  >  
			                                <input class="form-control" placeholder="username" name="username" type="useername" autofocus>  
			                            </div>  
			                            <div class="form-group">  
			                                <input class="form-control" placeholder="Password" name="password" type="password" value="">  
			                            </div>  
										
			                                
											<input class="btn btn-lg btn-primary btn-block" type="submit" value="login" name="login" >  
			  
			                            <!-- Change this to a button or input when using this as a form -->  
			                          <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
			                        </fieldset>  
			                    </form>  
								</div>
						    </div>	
						</div>
					</div>

			    </div>
			    <hr size="5"/>
			    <div class="panel-footer">
			    	<center>COPYRIGHT &COPY; <?php echo date("d-M-Y"); ?> DESIGNED  BY U13CS1160 </center> 
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
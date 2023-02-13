<?php
session_start();
	if(isset($_POST['register'])){
	//collecting form inputs using the specified method
	$firstname=@$_POST['firstname'];
	$lastname=@$_POST['lastname'];
	$username=@$_POST['username'];
	$password=@$_POST['password'];
	//connect to the server
	mysql_connect("localhost","root","");
	
	//select database to work with
	mysql_select_db("xpertsystem");
	
	if(!empty($firstname) && !empty($lastname) && !empty($username) && !empty($password)){
	$query="INSERT INTO user(user_id, firstname, lastname, username, password) 
						VALUES(NULL, '$firstname', '$lastname', '$username', '$password')";
	$action= mysql_query($query);
	if($action){
		$error="<div class='alert alert-success alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					   Registration successful
					</div>";
	}
	else{
	        $error="<div class='alert alert-danger alert-dismissable'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					   Error in registration
		    </div>";
	
	    }
	}
	else{
	
	    $error="<div class='alert alert-danger alert-dismissable'>
			<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
			Check empty input
		</div>";
		 
		}
	}

	//Admin login
		if(isset($_POST['adminlog'])){
		//collecting form inputs using the specified method
		$adminuser = @$_POST['adminuser'];
		$adminpass = @$_POST['adminpass'];
		mysql_connect("localhost","root","");
	
		//select database to work with
			mysql_select_db("xpertsystem");
		//Collect every user in the database to check if signing in user already exist
		$sql="SELECT * FROM admin WHERE username='$adminuser' AND password='$adminpass'";
		$query=mysql_query($sql);
		//count the rows in the recordset 
		$count=mysql_num_rows($query);
			//Register sessions and reidrect to about page
			if($count == 1){
				while($row = mysql_fetch_array($query)){
					$_SESSION['admin'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					}
			}
			else{
				$erroradmin="<div class='alert alert-danger alert-dismissable'>
					<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					Incorrect Login Parameters
				</div>";
			}
			if(isset($_SESSION['admin'])){
				header("location: admin.php");
			}
	}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<title> XpertDiab|HOME PAGE </title>
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
		<!--For The above style
		background-color: skyblue;

		
		
		 -->
	</head>
	<body>
		<div class="container">
			<div class="panel panel-primary">
				<div class="panel-heading">
		    	<!--<center><img src="images/head.png" alt="xpertDiab" class="img-rounded img-responsive"></center>-->
					<center><img src="HEADER.png" alt="xpertSickle Cell" width="1034" height="214" class="img-rounded img-responsive">
					</center>

			    </div>
			    <div class="panel-body">
			    	<div class="row">
						<div class="col-md-3">
							<?php
										if(isset($erroradmin)){
											echo $erroradmin;
										}
									?>
							<div class="list-group">
							  <a href="index.php" class="list-group-item active"> <span class="glyphicon glyphicon-home"></span> Home </a>
							  <a data-toggle="modal" href="#myModal" class="list-group-item"> <span class="glyphicon glyphicon-user"></span> Admin Login</a>
							  <a href="#" class=" list-group-item disabled"> <span class="glyphicon glyphicon-bullhorn"></span> About XpertSickle Cell</a>
							  <a href="#" class="disabled list-group-item"> <span class="glyphicon glyphicon-question-sign"></span> Symptoms</a>
							  <a href="#" class="disabled list-group-item"> <span class="glyphicon glyphicon-book"></span> Take Diagnosis</a>
							  <a href="#" class="disabled list-group-item"> <span class="glyphicon glyphicon-cloud"></span> Tips</a>
							  <a href="#" class="disabled list-group-item"> <span class="glyphicon glyphicon-comment"></span> Suggest / Comment</a>


							</div>

						</div>
						<!-- Modal2 -->
									  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										  <div class="modal-content">
											<div class="modal-header">
											  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											  <h3 class="modal-title" style="font-family: monotype corsiva;"><span class="glyphicon glyphicon-user"></span> XpertDiab Admin Login Page</h3>
											</div>
											<div class="modal-body">
												<form class="form-horizontal" method="post" action="index.php" role="form" style="padding:0 70px 0 70px;">
												  <div class="form-group">
												    <label for="username" class="col-lg-2 control-label">UserName</label>
												    <div class="col-lg-10">
												      <input type="text" class="form-control" id="username" name="adminuser" placeholder="username">
												    </div>
												  </div>						  
												  												  
												  <div class="form-group">
												    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
												    <div class="col-lg-10">
												      <input type="password" class="form-control" id="password" name="adminpass" placeholder="Password">
												    </div>
												  </div>
												  
												  <div class="form-group">
												    <div class="col-lg-offset-2 col-lg-10">
												      <button type="submit" class="btn btn-lg btn-primary" name="adminlog">LogIn</button>
												    </div>
												  </div>
												</form>
											</div>
										 </div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									  </div><!-- /.modal 2 ends-->
				
						<div class="col-md-5">
							<h1 style="font-family: monotype corsiva;">Welcome</h1>
							<font size="4" style="font-align:justify;">XpertSickle Cell, is designed with a graphical user-friendly interface as a diagnostic-aid tool by medical 
								practitioners to guide in the diagnosis and treatment of Sickle Cell. ...<a href="login.php"> Login to Learn more </a>... 
							</font>
						</div>
						<div class="col-md-4">
							<div class="login-panel panel panel-primary">
								<div class="panel-heading"><h3 class="panel-title" style="font-family:monotype corsiva">Registration</h3> </div>
								<div class="panel-body"> 
								
									<?php
										if(isset($error)){
											echo $error;
										}
									?>
							<form role="form" method="post" action="index.php">
								<fieldset>  
		                            <div class="form-group">  
		                                <input class="form-control" placeholder="firstname" name="firstname" type="text" autofocus>  
		                            </div>
		                            <div class="form-group">  
		                                <input class="form-control" placeholder="lastname" name="lastname" type="text" autofocus>  
		                            </div> 
		                            <div class="form-group">  
		                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>  
		                            </div>  
		                            <div class="form-group">  
		                                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>  
		                            </div>  
		  
		  
		                            <!--<input class="btn btn-lg btn-primary btn-block" type="submit" value="register" name="register" > -->                                    <input class="btn btn-lg btn-warning btn-block" type="submit" value="register" name="register" > 

		  
		                        </fieldset>  
                    	  </form>  
                    <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center><!--for centered text-->   
								</div>
						    </div>	
						</div>
					</div>

			    </div>
			    <div class="panel-footer">
			    	<center>COPYRIGHT &COPY; <?php echo date("D-M-Y"); ?> DESIGNED  BY U13CS1160 </center> 
			    </div>
			</div>
		</div>
		

		








		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="//code.jquery.com/jquery.js"></script>
    	<script src="js/bootstrap.min.js"></script>
    	<!--<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
	</body>
</html>

<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Online Parikshya</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		<link href="bootstrap/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		
		<!-- Custom CSS -->
		<link href="includes/css/styles.css" rel="stylesheet">
		
		<!-- Include Modernizr in the head, before any other Javascript -->
		<script src="includes/js/modernizr-2.6.2.min.js"></script>
		
	</head>
	<body>
		<div class="container">

			<div class="navbar navbar-fixed-top">
			<div class="container">
				
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			
				<a class="navbar-brand" href="index.php"><img src="images/LLO.png" alt="Your Logo"> OnlineParikshya</a>
				
				<div class="nav-collapse collapse navbar-responsive-collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="#">Home</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <strong class="caret"></strong></a>
							
							<ul class="dropdown-menu">
								<li id="conductexam">
									<a id="conductexam1" href="index.php">Conduct Exam</a>
								</li>
								
								<li id="takeexam">
									<a id="takeexam1" href="exam.php">Take Exam</a>
								</li>
								
								
							</ul><!-- end dropdown-menu -->
						</li>
						
					</ul>
					
					
					<ul class="nav navbar-nav pull-right">
						<li>
							<a id = "signhome" href="signin.php">Sign in</a>
						</li>
						<li>
							<a id= "signuphome" href="signup.php">Sign up</a>
						</li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> My Account <strong class="caret"></strong></a>
							
							<ul class="dropdown-menu">
								<li>
									<a href="#"><span class="glyphicon glyphicon-wrench"></span> Settings</a>
								</li>
								
								
								<li class="divider"></li>
								
								<li>
									<a href="#"><span class="glyphicon glyphicon-off"></span> Sign out</a>
								</li>
							</ul>
						</li>-->

					</ul><!-- end nav pull-right -->
				</div><!-- end nav-collapse -->
			
			</div><!-- end container -->
		</div><!-- end navbar -->


	</div><!-- end of main contianer -->

	<div class="container" id="main">
		
		<div class="row" id="partlogin">
			<h1 id="orgentry"style="margin-left:60px;color:#0066ff;">Sign in</h1>
			<hr>
			<div class="col-sm-6">
				
				<div id="signingin">
					<h2>Exam conductor</h2><hr>
			      <form  role="form" action="phps/conductorSignIn.php" method="post">
			        
			    	  	<div class="form-group">
			    		    <input id="emailhulio" class="form-control" placeholder="Your email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input id="passwordhulio" class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		
					 
			    		<button class="btn btn-lg btn-success btn-block" `>Login</button>
			    	
			     </form>  	
                    
				<hr>
			      <p>Don't have an account!</p>
			      <a href="signup.php" target="_blank"><button class="btn btn-lg btn-primary btn-block">Sign Up</button></a>                            
			  </div><!-- end of signingin -->
			</div><!-- end of col-sm-6 -->
			<div class="col-sm-6">
				
				<div id="signingin1">
					<h2>For Students</h2><hr>
			      <form  role="form" action="phps/userSignIn.php" method="post">
			        
			    	  	<div class="form-group">
			    		    <input id="emailhulio" class="form-control" placeholder="Your email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input id="passwordhulio" class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>
			    		
					 
			    		<button class="btn btn-lg btn-success btn-block" `>Login</button>
			    	
			     </form>  	
                    
				<hr>
			      <p>Don't have an account!</p>
			      <a href="signup.php" target="_blank"><button class="btn btn-lg btn-primary btn-block">Sign Up</button></a>                            
			  </div><!-- end of signingin -->
			</div><!-- end of col-sm-6 -->
		</div><!-- end of partlogin -->

		<div class="row" id="partconductor">
			<div class="col-sm-6">
				<form action="" class="form-horizontal"  role="form" enctype="multipart/form-data">
			        <fieldset>
			            <div class="form-group">
			                <label for="dtp_input1" class="col-md-2 control-label">Exam Date & Time</label>
			                <div class="input-group date form_datetime col-md-5" data-date="2015-01-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
			                    <input class="form-control" size="16" type="text" value="" readonly>
			                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
								<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
			                </div>
			                <div class="form-group">
			                	<input type="hidden" id="dtp_input1" value="" />
			                </div>
							
			            </div>
			            <button class="btn btn-lg btn-primary btn-block" type="submit">Submit</button>
			           
			        </fieldset>
			    </form>
			    <hr>
			    <form action="" method="post" enctype="multipart/form-data">
			    	<label for="file_input" class="col-md-2 control-label">Upload question paper document</label>
		 			<input type="file" name="field_name" /><br />
		 			<input type="submit" name="submit" value="Upload" />
				</form>
				<hr>
				<form action="" method="post" enctype="multipart/form-data">
			    	<label for="file_input" class="col-md-2 control-label">Upload the solution file</label>
		 			<input type="file" name="field_name" /><br />
		 			<input type="submit" name="submit" value="Upload" />
				</form>

				
			</div><!-- end of col-sm-6 -->
			
		</div><!-- end of partconductor -->

		<div class="row" id="partuser">

		</div><!-- end of partconductor -->
		

	</div>
	
	<footer>
	<div class="container">
		<div class="row">
			
			<div class="col-sm-6">
				<h5>About Us</h5>
				<h6>Online Parikshya is the website for conducting objective online exams.This website is developed by the students of Pulchowk campus.</h6>
			</div><!-- end col-sm-4 -->
			
			
			<div class="col-sm-6">
				<h5>Coded with <span class="glyphicon glyphicon-heart"></span> by:</h5>
				<h6>Bikash<br><br>Chitraketu<br><br>Manoj Agrahari</h6>
					
			</div><!-- end col-sm-2 -->
		</div><!-- end row -->
	</div><!-- end container -->
</footer>		
	

	<!-- All Javascript at the bottom of the page for faster page loading -->
		
	<!-- First try for the online version of jQuery-->
	<script src="http://code.jquery.com/jquery.js"></script>
	
	<!-- If no online access, fallback to our hardcoded version of jQuery -->
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.3.min.js"><\/script>')</script>
	<script type="text/javascript" src="includes/js/jquery-1.8.3.min.js" charset="UTF-8"></script>
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
	<script type="text/javascript" src="bootstrap/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
	<script type="text/javascript">
	    $('.form_datetime').datetimepicker({
	        //language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			forceParse: 0,
	        showMeridian: 1
	    });
		$('.form_date').datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 2,
			minView: 2,
			forceParse: 0
	    });
		$('.form_time').datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
			autoclose: 1,
			todayHighlight: 1,
			startView: 1,
			minView: 0,
			maxView: 1,
			forceParse: 0
	    });
	</script>
	<p id="hiddenorg"><?php if($_SESSION['orgName']!="")
				echo $_SESSION['orgName']; 
		?></p>
	</body>
</html>


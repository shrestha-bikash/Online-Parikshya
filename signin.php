<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>Sign in</title>
		<meta name="description" content="">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="includes/css/bootstrap-glyphicons.css" rel="stylesheet">
		
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
						<li>
							<a href="index.php">Home</a>
						</li>
						
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <strong class="caret"></strong></a>
							
							<ul class="dropdown-menu">
								<li>
									<a href="#">Conduct Exam</a>
								</li>
								
								<li>
									<a href="exam.php">Give Exam</a>
								</li>
								
								
							</ul><!-- end dropdown-menu -->
						</li>
						
					</ul>
					
					
					<ul class="nav navbar-nav pull-right">
						<li  class="active">
							<a href="#">Sign in</a>
						</li>
						<li>
							<a href="signup.php">Sign up</a>
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
		<div class="row">
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
			      <a href="signup.php"><button class="btn btn-lg btn-primary btn-block">Sign Up</button></a>                            
			  </div><!-- end of signingin -->
			</div><!-- end of col-sm-6 -->

			<div class="col-sm-6">
				
				<div id="signingin">
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
			      <a href="signup.php"><button class="btn btn-lg btn-primary btn-block">Sign Up</button></a>                            
			  </div><!-- end of signingin -->
			</div><!-- end of col-sm-6 -->
		</div><!-- end of row -->
		

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
	<script>window.jQuery || document.write('<script src="includes/js/jquery-1.8.2.min.js"><\/script>')</script>
	
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<!-- Custom JS -->
	<script src="includes/js/script.js"></script>
	
	</body>
</html>


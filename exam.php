<?php
session_start();
 if(!empty($_SESSION['userName'])){
	//secho $_SESSION['userName'];
}
?>
<!DOCTYPE html>

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
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
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
					
					
					
					<ul class="nav navbar-nav pull-right">
						
						<li class="dropdown">
							<a id="profile" href="#" class="dropdown-toggle" data-toggle="dropdown">My account<strong class="caret"></strong></a>
							
							<ul class="dropdown-menu">
								<li>
									<a href="#">My Profile</a>
								</li>
								
								<li>
									<a href="phps/userLogout.php">Log Out</a>
								</li>
								
								
							</ul><!-- end dropdown-menu -->
						</li>
						<li>
							<a id="signupexams" href="signup.php">Sign up</a>
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
		<h2>The exam will start in:</h2>
		        <br />
		<div class="bgcontainer" style="margin-top: 10px;">
		    
		    <div class="col-md-12 text-center">
		        
		    </div>
		    <div class="col-md-2 hidden-xs"></div>
		    <div class="col-md-2 col-sm-3 col-xs-9 text-center">
		        <div id="progress_days" style="background-color: transparent;" class="prg"></div>
		    </div>
		    <div class="col-md-2 col-sm-3 col-xs-9 text-center">
		        <div id="progress_hours" style="background-color: transparent;" class="prg"></div>
		    </div>
		    <div class="col-md-2 col-sm-3 col-xs-9 text-center">
		        <div id="progress_mins" style="background-color: transparent;" class="prg"></div>
		    </div>
		    <div class="col-md-2 col-sm-3 col-xs-9 text-center">
		        <div id="progress_secs" style="background-color: transparent;" class="prg"></div>
		    </div>
		    
		    <br />
    	
		</div>
		

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

<link rel="stylesheet" type="text/css" href="/Content/font-awesome/css/font-awesome.min.css" />
	<!-- you need to include the shieldui css and js assets in order for the charts to work -->
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/shieldui-all.min.css" />
<link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light-bootstrap/all.min.css" />
<script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

<script type="text/javascript">

 
    jQuery(function ($) {
        // the date of the release - for example the below will set the release date to 
        // 1st of March (month is 0-based), 2100 at noon 12:00 o'clock
        // var release_date = new Date(2100, 2, 1, 12, 0, 0);
        // format is: new Date(year, month [, day, hour, minute, second, millisecond]);
        // (note that the month is 0-based).
       
         //alert(datez.toString());

        // for showcase purpose, we set the release date to be 10 days from the current time
        //var datezz= "October 13, 1975 11:13:00";
        var dates= "15 March 2015 - 05:25 pm";
        var arr = dates.split(" ");
        var timez;
        if(arr[5]=="pm"){
            var times = arr[4].split(":");
            times[0]=parseInt(times[0])+12;
           
            timez = times[0]+":"+times[1]+":00";
        }
        var datez = arr[1]+" "+arr[0]+", "+arr[2]+" "+timez;
        var release_date = new Date(datez);
       // release_date.setDate(release_date.getDate() + 10);

        var release_unixtime_ms = release_date.getTime(),
            total_days = Math.floor((release_unixtime_ms - (new Date()).getTime()) / (24 * 60 * 60 * 1000)),
            update_timer = null,
            progress_days,
            progress_hours,
            progress_mins,
            progress_secs;

        // define a function to initialize the progressbars
        function init_progressbars() {
            // set the width and height of each progressbar to the width of their container
            $(".prg").each(function () {
                $(this)
                    .width($(this).parent().width())
                    .height($(this).parent().width());
            });

            // initialize the progressbar widgets
            progress_days = $("#progress_days").shieldProgressBar({
                min: 0,
                max: total_days,
                value: total_days,
                layout: "circular",
                layoutOptions: {
                    circular: {
                    	//diameter:5,
                        borderColor: "white",
                        width: 30,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} days</span> '
                },

                reversed: true
            }).swidget();

            progress_hours = $("#progress_hours").shieldProgressBar({
                min: 0,
                max: 24,
                value: 24,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 23,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} hours</span> '
                },
                reversed: true
            }).swidget();

            progress_mins = $("#progress_mins").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 15,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} min</span> '
                },
                reversed: true
            }).swidget();

            progress_secs = $("#progress_secs").shieldProgressBar({
                min: 0,
                max: 60,
                value: 60,
                layout: "circular",
                layoutOptions: {
                    circular: {
                        borderColor: "white",
                        width: 10,
                        borderWidth: 3,
                        color: "#1E98E4",
                        backgroundColor: "white"
                    }
                },
                text: {
                    enabled: true,
                    template: '<span style="font-size:27px;color:white;">{0:n0} sec</span> '
                },
                reversed: true
            }).swidget();

            // restart the update timer
            clearInterval(update_timer);
            update_timer = setInterval(update_progressbars, 300);
        }

        function update_progressbars() {
            var total_remaining_seconds = Math.floor((release_unixtime_ms - (new Date()).getTime()) / 1000),
                remaining_days = Math.floor(total_remaining_seconds / (24 * 60 * 60));

            total_remaining_seconds = total_remaining_seconds % (24 * 60 * 60);
            var remaining_hours = Math.floor(total_remaining_seconds / (60 * 60));

            total_remaining_seconds = total_remaining_seconds % (60 * 60);
            var remaining_mins = Math.floor(total_remaining_seconds / 60);
            var remaining_secs = total_remaining_seconds % 60;

            // update the progressbars if new values are different
            if (remaining_days != progress_days.value()) {
                progress_days.value(remaining_days);
            }
            if (remaining_hours != progress_hours.value()) {
                progress_hours.value(remaining_hours);
            }
            if (remaining_mins != progress_mins.value()) {
                progress_mins.value(remaining_mins);
            }
            if (remaining_secs != progress_secs.value()) {
                progress_secs.value(remaining_secs);
            }
        }

        // call this function whenever the window size changes
        $(window).on("resize", init_progressbars);

        // init the progressbars now
        init_progressbars();
    });
</script>
	<p id="hidden"><?php echo $_SESSION['userName']; ?></p>
	</body>
</html>


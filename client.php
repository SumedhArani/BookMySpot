<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>BookMySpot</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/animate/animate.css" />
        <link rel="stylesheet" href="assets/css/plugins.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <?php
            function verify(uname, pword)
            {
                include "connect_to_db.php";
                echo uname;

            }
        ?>

        <script>
            var uname;
            var pword;

            function validate()
            {
                uname = f.find('[name=uname]').val();
                pword = f.find('[name=pword]').val();
                document.write("<?php verify(uname, pword) ?>")
                getOptions();
            }

        	function getOptions()
        	{
        		d1 = document.getElementById("change1");
        		d1.style.display="none";
        		d3 = document.getElementById("change3");
        		d3.style.display="none";
        		d4 = document.getElementById("change4");
        		d4.style.display="none";
        		d2 = document.getElementById("change2");
        		d2.style.display="block";
        	}
            
        	function getForm()
        	{
        		d1 = document.getElementById("change1");
        		d1.style.display="none";
        		d2 = document.getElementById("change2");
        		d2.style.display="none";
        		d3 = document.getElementById("change3");
        		d3.style.display="block";
        	}

        	function confirm()
        	{
        		d1 = document.getElementById("change1");
        		d1.style.display="none";
        		d2 = document.getElementById("change2");
        		d2.style.display="none";
        		d3 = document.getElementById("change3");
        		d3.style.display="none";
        		d4 = document.getElementById("change4");
        		d4.style.display="block";

        	}
        </script>
        <style>
        	.hov: hover{color:gray;}
        	button {
						background-color: gray; 
						color: white;
						
						font-size: 16px;
						font-weight:bold;
						margin: 4px 2px;
						cursor: pointer;
						border-radius:0%;
			}
        </style>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<div class='preloader'><div class='loaded'>&nbsp;</div></div>
        <header id="home" class="navbar-fixed-top">
            <div class="header_top_menu clearfix">	
                <div class="container">
                    <div class="row">	
                        <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                            <div class="call_us_text">
								<a href=""><i class="fa fa-clock-o"></i> Book Parking Spots 24/7</a>
								<a href=""><i class="fa fa-phone"></i>+918974523542</a>
							</div>
                        </div>

                        <div class="col-md-4 col-sm-12">
                            <div class="head_top_social text-right">
                                <a href=""><i class="fa fa-facebook"></i></a>
                                <a href=""><i class="fa fa-google-plus"></i></a>
                                <a href=""><i class="fa fa-twitter"></i></a>
                                <a href=""><i class="fa fa-linkedin"></i></a>
                                <a href=""><i class="fa fa-pinterest-p"></i></a>
                                <a href=""><i class="fa fa-youtube"></i></a>
                                <a href=""><i class="fa fa-phone"></i></a>
                                <a href=""><i class="fa fa-camera"></i></a>
                            </div>	
                        </div>

                    </div>			
                </div>
            </div>

            <!-- End navbar-collapse-->

            <div class="main_menu_bg">
                <div class="container"> 
                    <div class="row">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a class="navbar-brand our_logo" href="#"><img src="assets/images/logo.png" alt="" /></a>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="#slider">Home</a></li>
                                        <li><a href="#abouts">About</a></li>
                                       
                                        <li><a href="#portfolio">List Of Malls</a></li>
										<li><a href="#footer_widget">Login</a></li>
										 <li><a href="#footer_widget">Sign-Up</a></li>
										<li><a href="#" class="booking">Our Clients</a></li>
                                        
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header> <!-- End Header Section -->
        <section id="slider" class="slider">
            <div class="slider_overlay">
                <div class="container">
                    <div class="row">
                        <div class="main_slider text-center">
                            <div class="col-md-12">
                                <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                    <h1>BookMySpot</h1>
                                    <div class="col-md-4">
                            <div id="change1" class="single_widget wow fadeIn" data-wow-duration="5s">
                                <h3 style="font-size:60px;">Login</h3>

                                <div  class="single_widget_form text-left">
                                    <form id="formid" onsubmit="validate()" target="hiddenFrame" action="validate.php" >
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="uname" placeholder="Username" required="">
                                        </div>


                                        <div class="form-group">
                                            <input type="text" class="form-control" name="pword" placeholder="Password">
                                        </div> <!-- end of form-group -->


                                        <input type="submit" value="Login" class="btn btn-primary">
                                    </form>	
                                    <iframe name="hiddenFrame" width="0px" height="0px"></iframe>
                                </div>
                            </div>
                            <div id="change2" style="display:none"> 
                            <h1 style="font-size:30px;" onmouseover="this.style.color='gray';" onmouseout="this.style.color='white';" onclick="getForm()">Add Your Mall</h1>
                            <h1 style="font-size:28px;" onmouseover="this.style.color='gray';" onmouseout="this.style.color='white';" onclick="confirm()">Delete Your Mall</h1>
                            </div>
                            <div id="change3" style="display:none">
                            	<form id="detailsform" action="">
                            			<div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Mall Name" required="">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Mall Address">
                                        </div> 

										<div class="form-group">
                                            <input type="text" class="form-control" placeholder="Type">
                                        </div> 
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Rate per hour">
                                        </div> 

                                        <input type="submit" value="Add" class="btn btn-primary"> 
								</form>
                            </div>
                            <div id="change4" style="display:none">
                            	 <h1 style="font-size:30px;">Are you sure?</h1>
                                 <?php
                                    function delete()
                                    include "connect_to_db.php";
                                    $sql = "DELETE FROM MyGuests WHERE id=3";
                                 ?>
                            	<button onclick="delete_from_db()" id="1" >Yes</button>
								<button onclick="getOptions()" id="2" >No</button>
							</div>
                        </div>
                    </div>
                                </div>
                            </div>	
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        
                    <!--Footer-->
        <footer id="footer" class="footer">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="copyright wow zoomIn" data-wow-duration="3s">
							<p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Team 5</a>2017. All Rights Reserved</p>
						</div>
                    </div>
                </div>
            </div>
        </footer>
		
		<div class="scrollup">
			<a href="#"><i class="fa fa-chevron-up"></i></a>
		</div>		


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/jquery-easing/jquery.easing.1.3.js"></script>
        <script src="assets/js/wow/wow.min.js"></script>
        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>

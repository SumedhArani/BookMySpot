<<<<<<< HEAD:bookPage.html
<html>

<head>
		<script type="text/javascript" src="JavaScript/jQuery.js"></script>
		<script type="text/javascript" src="JavaScript/submission.js"></script>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
<script type="text/javascript" src="JavaScript/jquery.min.js"></script>
<script type="text/javascript" src="JavaScript/qrcode.js"></script>



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
<style>
.button {
    background-color: orange; 
    color: white;
    padding: 10px;
    font-size: 16px;
	font-weight:bold;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:0%;
}
button:hover{background-color:gray;}
.button_last {
     background-color: green;
    color: white;
    padding: 10px;
    font-size: 16px;
	font-weight:bold;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:0%;
}
.tag {
   float:left;
   position: absolute;
   left: 0px;
   top: 20px;
   height:1200px;
   z-index: 1000;
   background-color: black;
   padding: 5px;
   color: #FFFFFF;
   font-weight: bold;
   opacity: 0.9;
    filter: alpha(opacity=10);
}
.button2 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.num{
   
    position:absolute;
	top:250px;
	left:500px;
	
	}
.container1 {
   border: 1px solid #DDDDDD;
   width: 700px;
   height: 500px;
   margin-top: 50px;
   font-size:10;
   color:red;
   opacity:1.0;
   filter: alpha(opacity=100)
   position: relative;
}
.innerDiv {
			border: 0px solid blue;
			background-color: white;
			width: 250px;
   			height: 20px;
		 }
h5  {
	color:blue;
	}
</style>
</head>

<script>
  
   var check=0;
   
   function allot(l)
			{
			  
			  var j = document.getElementById(l);
			  if(j.style.backgroundColor != "green")
			  {
				console.log("hello here -" + j.id);
				var a=document.getElementById("pop");
				a.className="tag";
				a.style.color="black";
				a.innerHTML='<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > \
				<h5>ENTER DETAILS </h5></br></br>\
				<h5>NAME : <input type ="text" id="add" ></br></br>\
				   ARRIVAL TIME : <textarea row="4" col="50" id ="add" ></textarea></br></br>\
				   TIME OF STAY : <input type="city" id="ad"></br></h5></br></br>\
				<br> <a href="#" class="button2" onclick="address()">Proceed     </a>\
				<a href="#" class="button2" onclick="foo1()">close</a></div>';
				//console.log(check);
				check = j;
				console.log(check+" ddd"+j);
				
				a.style.width="100%";
				a.style.height="800";
				a.align="center";
				console.log("hello1");
				}
				else
				{
				  window.alert("This seat is not available");
				}
			}
			
			
	function pay(tar , sou)
			{
			  //var textnode = document.createTextNode("hel");
			  //var item = document.getElementById("cod").childNodes[0];
			  //item.replaceChild(textnode, item.childNodes[0]);	
				document.getElementById(tar).innerHTML = document.getElementById(sou).innerHTML;
				//window.location.href = '127.0.0.1:5000';
			}
			 
			 
			function foo1(t)
			{   check = 1;
				console.log("foo1 close");
				var a=document.getElementById("pop");
				a.innerHTML="";
				a.style.width="0%";
				a.style.height="0";
				//console.log("hey"+t);
				//a.align="center";
				//a.className=" ";
				//a.style.backgroundColor = "#FFFFFF"
			}
			
			function foo2(t)
			{    //check = 2;
			    //var j = document.getElementById(t);
				console.log("foo2 close");
				var a=document.getElementById("pop");
				a.innerHTML="";
				a.style.width="0%";
				a.style.height="0";
				check.style.backgroundColor = "green";
				
				//a.align="center";
				//a.className=" ";
				//a.style.backgroundColor = "#FFFFFF"
			}

			

			
			function proceed(q)
			{
                var a=document.getElementById("pop");
				a.className="tag"
				var d=document.createElement("div");				

				a.innerHTML = '<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > \
				<h5>YOUR BOOKING IS SUCCESSFUL. </h5></br></br>\
				<a href="#" class="button2" onclick="foo2()" >close</a>';
				a.appendChild(d);
				var qrcode = new QRCode(document.getElementById("d"), {
				text: "http://jindo.dev.naver.com/collie",
				width: 128,
				height: 128,
				colorDark : "#000000",
				colorLight : "#ffffff",
				correctLevel : QRCode.CorrectLevel.H
				});


				//a.className="";
				
			}
			
			function address(q)
			{
			  var a=document.getElementById("pop");
				a.className="tag"
				a.innerHTML = '<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > </br></br></br></br>\
				<h5>PAYMENT MODE</h5></br></br>\
				<h5><input type="radio" value="cash" id="cod" onselect="pay()">Cash on Exit</h5>\
				<h5><input type="radio" value="cash1" id="debit" onselect="pay()"> Debit Cards\
				<h5><input type="radio" value="cash1" id="credit" ">  Credit Cards\
				 <br><a href="#" class="button2" onclick="proceed()">Proceed     </a>\
				<a href="#" class="button2" onclick="foo1()">close</a></div>';
			}
</script>
<body>

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
                                        <li><a href="index.php#slider">Home</a></li>
                                        <li><a href="index.php#abouts">About</a></li>
                                       
                                        <li><a href="index.php#portfolio">List Of Malls</a></li>
										<li><a href="index.php#footer_widget">Login</a></li>
										 <li><a href="index.php#footer_widget">Sign-Up</a></li>
										<li><a href="client.html" class="booking">Our Clients</a></li>
                                        
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header>
        </div>
        <div id="pop" class="pop"></div>
	 <div class="head_title text-center">
                                <h4 style="margin-top: 25px;font-size: 45px;">BookMySpot</h4>
     <div style="margin-left: 1000px;">
     <input type="text" id="searchbar" onkeypress="submissionThrotlling.makeDecission()"/>
     <img src="assets/images/search.png" width=30px height=30px/></img>
     <a href="loggedindex.php#portfolio">
		<div id="suggessionDiv" style="visibility: hidden"></div>
     </a>
	 </div>	
	 </div>
	<div class="num">
	<button class="button button1" onClick="allot(this.id)" id="1" ></button>
	<button class="button button1" onClick="allot(this.id)" id="2" ></button>
	<button class="button button1" onClick="allot(this.id)" id="3" ></button>
	<button class="button button1" onClick="allot(this.id)" id="4" ></button>
	<button class="button button1" onClick="allot(this.id)" id="5"></button>
	&nbsp &nbsp &nbsp &nbsp
	<button class="button button1" onClick="allot(this.id)" id="7"></button>
	<button class="button button1" onClick="allot(this.id)" id="8"></button>
	<button class="button button1" onClick="allot(this.id)" id="9"></button>
	<button class="button button1" onClick="allot(this.id)" id="10"></button>
	<button class="button button1" onClick="allot(this.id)" id="11"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="12"></button>
	<button class="button button1" onClick="allot(this.id)" id="13"></button>
	<button class="button button1" onClick="allot(this.id)" id="14"></button>
	<button class="button button1" onClick="allot(this.id)" id="15"></button>
	<button class="button button1" onClick="allot(this.id)" id="16"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="17"></button>
	<button class="button button1" onClick="allot(this.id)" id="18"></button>
	<button class="button button1" onClick="allot(this.id)" id="19"></button>
	<button class="button button1" onClick="allot(this.id)" id="20"></button>
	<button class="button button1" onClick="allot(this.id)" id="21"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="21"></button>
	<button class="button button1" onClick="allot(this.id)" id="22"></button>
	<button class="button button1" onClick="allot(this.id)" id="23"></button>
	<button class="button button1" onClick="allot(this.id)" id="24"></button>
	<button class="button button1" onClick="allot(this.id)" id="25"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="26"></button>
	<button class="button button1" onClick="allot(this.id)" id="27"></button>
	<button class="button button1" onClick="allot(this.id)" id="28"></button>
	<button class="button button1" onClick="allot(this.id)" id="29"></button>
	<button class="button button1" onClick="allot(this.id)" id="30"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="31"></button>
	<button class="button button1" onClick="allot(this.id)" id="32"></button>
	<button class="button button1" onClick="allot(this.id)" id="33"></button>
	<button class="button button1" onClick="allot(this.id)" id="34"></button>
	<button class="button button1" onClick="allot(this.id)" id="35"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="36"></button>
	<button class="button button1" onClick="allot(this.id)" id="37"></button>
	<button class="button button1" onClick="allot(this.id)" id="38"></button>
	<button class="button button1" onClick="allot(this.id)" id="39"></button>
	<button class="button button1" onClick="allot(this.id)" id="40"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="41"></button>
	<button class="button button1" onClick="allot(this.id)" id="42"></button>
	<button class="button button1" onClick="allot(this.id)" id="43"></button>
	<button class="button button1" onClick="allot(this.id)" id="44"></button>
	<button class="button button1" onClick="allot(this.id)" id="45"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="46"></button>
	<button class="button button1" onClick="allot(this.id)" id="47"></button>
	<button class="button button1" onClick="allot(this.id)" id="48"></button>
	<button class="button button1" onClick="allot(this.id)" id="49"></button>
	<button class="button button1" onClick="allot(this.id)" id="50"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="51"></button>
	<button class="button button1" onClick="allot(this.id)" id="52"></button>
	<button class="button button1" onClick="allot(this.id)" id="53"></button>
	<button class="button button1" onClick="allot(this.id)" id="54"></button>
	<button class="button button1" onClick="allot(this.id)" id="55"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="56"></button>
	<button class="button button1" onClick="allot(this.id)" id="57"></button>
	<button class="button button1" onClick="allot(this.id)" id="58"></button>
	<button class="button button1" onClick="allot(this.id)" id="59"></button>
	<button class="button button1" onClick="allot(this.id)" id="60"></button></br>
	</br></br></br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<button class="button button1" onClick="" id="61" background-color="green"></button> &nbsp &nbsp &nbsp &nbsp
	<button class="button_last button1" onClick="" id="62" background-color="orange"></button>
	</br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Available &nbsp &nbsp Booked
	</div>
	
	

</body>
=======
<?php
	session_start();
?>
<html>

<head>
		<script type="text/javascript" src="JavaScript/jQuery.js"></script>
		<script type="text/javascript" src="JavaScript/submission.js"></script>
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
<style>
.button {
    background-color: orange; 
    color: white;
    padding: 10px;
    font-size: 16px;
	font-weight:bold;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:0%;
}
button:hover{background-color:gray;}
.button_last {
     background-color: green;
    color: white;
    padding: 10px;
    font-size: 16px;
	font-weight:bold;
    margin: 4px 2px;
    cursor: pointer;
	border-radius:0%;
}
.tag {
   float:left;
   position: absolute;
   left: 0px;
   top: 20px;
   height:1200px;
   z-index: 1000;
   background-color: black;
   padding: 5px;
   color: #FFFFFF;
   font-weight: bold;
   opacity: 0.9;
    filter: alpha(opacity=10);
}
.button2 {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.num{
   
    position:absolute;
	top:250px;
	left:500px;
	
	}
.container1 {
   border: 1px solid #DDDDDD;
   width: 700px;
   height: 500px;
   margin-top: 50px;
   font-size:10;
   color:red;
   opacity:1.0;
   filter: alpha(opacity=100)
   position: relative;
}
.innerDiv {
			border: 0px solid blue;
			background-color: white;
			width: 250px;
   			height: 20px;
		 }
h5  {
	color:blue;
	}
</style>
</head>

<script>
  
   var check=0;
   var selected_slot;
   var arrival_time;
   var end_time;
   var vehicle;
   
   function allot(l)
			{
			  
			  // NAME : <input type ="text" id="add" ></br></br>\

			  selected_slot=l;

			  var j = document.getElementById(l);
			  if(j.style.backgroundColor != "green")
			  {
				// console.log("hello here -" + j.id);
				var a=document.getElementById("pop");
				a.className="tag";
				a.style.color="black";
				a.innerHTML='<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > \
				<h5>ENTER DETAILS </h5></br></br>\
				<h5>VEHICLE TYPE <select id="vehicle_select"><option value="sedan">Sedan</option><option value="hatchback">Hatchback</option></select></br></br>\
				ARRIVAL TIME <textarea id ="arrival_time" required></textarea></br></br>\
				   TIME OF STAY <input id="end_time" required></br></h5></br></br>\
				<br> <a href="#" class="button2" onclick="address()">Proceed     </a>\
				<a href="#" class="button2" onclick="foo1()">close</a></div>';
				//console.log(check);
				check = j;
				// console.log(check+" ddd"+j);
				
				a.style.width="100%";
				a.style.height="800";
				a.align="center";
				}
				else
				{
				  window.alert("This parking bay is not available");
				}
			}
			
			
	function pay(tar , sou)
			{
				//var textnode = document.createTextNode("hel");
				//var item = document.getElementById("cod").childNodes[0];
				//item.replaceChild(textnode, item.childNodes[0]);	
				
				console.log("Payment gateway to be implemented");
				// document.getElementById(tar).innerHTML = document.getElementById(sou).innerHTML;
				// window.location.href = '127.0.0.1:5000';
			}
			 
			 
			function foo1(t)
			{   
				check = 1;
				console.log("foo1 close");
				var a=document.getElementById("pop");
				a.innerHTML="";
				a.style.width="0%";
				a.style.height="0";
				//console.log("hey"+t);
				//a.align="center";
				//a.className=" ";
				//a.style.backgroundColor = "#FFFFFF"
			}
			
			function foo2(t)
			{    //check = 2;
			    //var j = document.getElementById(t);

				window.location.href="loggedindex.php";

				/*console.log("foo2 close");
				var a=document.getElementById("pop");
				a.innerHTML="";
				a.style.width="0%";
				a.style.height="0";
				check.style.backgroundColor = "green";*/
				
				//a.align="center";
				//a.className=" ";
				//a.style.backgroundColor = "#FFFFFF"
			}
			
			function proceed()
			{
				// Selected slot is q
				// Send selection details to client
                $.post("parking_action_update.php",
                	{
                		user_id: "<?php echo $_SESSION['username']; ?>",
                		bay_id: selected_slot,
                		vehicle: vehicle,
                		end_time: end_time,
                		arrival_time: arrival_time
                	},
                	function(data, status){
                		alert("Database file reachable! "+data);	
                	});

                var a=document.getElementById("pop");
				a.className="tag"
				a.innerHTML = '<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > \
				<h5>YOUR BOOKING IS SUCCESSFUL. </h5></br></br>\
				<a href="#" class="button2" onclick="foo2()" >close</a>';
				//a.className="";
				
			}
			
			function address()
			{
				vehicle=document.getElementById("vehicle_select").value;
				end_time=document.getElementById('end_time').value;
				arrival_time=document.getElementById('arrival_time').value;


				var a=document.getElementById("pop");
				a.className="tag"
				a.innerHTML = '<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > </br></br></br></br>\
				<h5>PAYMENT MODE</h5></br></br>\
				<h5><input type="radio" name="payment_mode" value="cash" id="cod" onclick="pay()">Cash on Exit</h5>\
				<h5><input type="radio" name="payment_mode" value="cash1" id="debit" onclick="pay()"> Debit Card\
				<h5><input type="radio" name="payment_mode" value="cash1" id="credit">  Credit Card\
				 <br><a href="#" class="button2" onclick="proceed()">Proceed     </a>\
				<a href="#" class="button2" onclick="foo1()">close</a></div>';
			}
</script>
<body>

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

                                	<?php
                                        echo "<b style='color:white;'>Hello ".$_SESSION['username']."</b>";
                                    ?>

                                    <ul class="nav navbar-nav navbar-right">
                                        <li><a href="index.php#slider">Home</a></li>
                                        <li><a href="index.php#abouts">About</a></li>
                                       
                                        <li><a href="index.php#portfolio">List Of Malls</a></li>
										<li><a href="index.php#footer_widget">Login</a></li>
										 <li><a href="index.php#footer_widget">Sign-Up</a></li>
										<li><a href="client.html" class="booking">Our Clients</a></li>
                                        
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
            </div>	
        </header>
        </div>
        <div id="pop" class="pop"></div>
	 <div class="head_title text-center">
                                <h4 style="margin-top: 25px;font-size: 45px;">BookMySpot</h4>
     <div style="margin-left: 1000px;">
     <input type="text" id="searchbar" onkeypress="submissionThrotlling.makeDecission()"/>
     <img src="assets/images/search.png" width=30px height=30px/></img>
     <a href="loggedindex.php#portfolio">
		<div id="suggessionDiv" style="visibility: hidden"></div>
     </a>
	 </div>	
	 </div>
	<div class="num">
	<button class="button button1" onClick="allot(this.id)" id="1" ></button>
	<button class="button button1" onClick="allot(this.id)" id="2" ></button>
	<button class="button button1" onClick="allot(this.id)" id="3" ></button>
	<button class="button button1" onClick="allot(this.id)" id="4" ></button>
	<button class="button button1" onClick="allot(this.id)" id="5"></button>
	&nbsp &nbsp &nbsp &nbsp
	<button class="button button1" onClick="allot(this.id)" id="7"></button>
	<button class="button button1" onClick="allot(this.id)" id="8"></button>
	<button class="button button1" onClick="allot(this.id)" id="9"></button>
	<button class="button button1" onClick="allot(this.id)" id="10"></button>
	<button class="button button1" onClick="allot(this.id)" id="11"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="12"></button>
	<button class="button button1" onClick="allot(this.id)" id="13"></button>
	<button class="button button1" onClick="allot(this.id)" id="14"></button>
	<button class="button button1" onClick="allot(this.id)" id="15"></button>
	<button class="button button1" onClick="allot(this.id)" id="16"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="17"></button>
	<button class="button button1" onClick="allot(this.id)" id="18"></button>
	<button class="button button1" onClick="allot(this.id)" id="19"></button>
	<button class="button button1" onClick="allot(this.id)" id="20"></button>
	<button class="button button1" onClick="allot(this.id)" id="21"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="21"></button>
	<button class="button button1" onClick="allot(this.id)" id="22"></button>
	<button class="button button1" onClick="allot(this.id)" id="23"></button>
	<button class="button button1" onClick="allot(this.id)" id="24"></button>
	<button class="button button1" onClick="allot(this.id)" id="25"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="26"></button>
	<button class="button button1" onClick="allot(this.id)" id="27"></button>
	<button class="button button1" onClick="allot(this.id)" id="28"></button>
	<button class="button button1" onClick="allot(this.id)" id="29"></button>
	<button class="button button1" onClick="allot(this.id)" id="30"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="31"></button>
	<button class="button button1" onClick="allot(this.id)" id="32"></button>
	<button class="button button1" onClick="allot(this.id)" id="33"></button>
	<button class="button button1" onClick="allot(this.id)" id="34"></button>
	<button class="button button1" onClick="allot(this.id)" id="35"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="36"></button>
	<button class="button button1" onClick="allot(this.id)" id="37"></button>
	<button class="button button1" onClick="allot(this.id)" id="38"></button>
	<button class="button button1" onClick="allot(this.id)" id="39"></button>
	<button class="button button1" onClick="allot(this.id)" id="40"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="41"></button>
	<button class="button button1" onClick="allot(this.id)" id="42"></button>
	<button class="button button1" onClick="allot(this.id)" id="43"></button>
	<button class="button button1" onClick="allot(this.id)" id="44"></button>
	<button class="button button1" onClick="allot(this.id)" id="45"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="46"></button>
	<button class="button button1" onClick="allot(this.id)" id="47"></button>
	<button class="button button1" onClick="allot(this.id)" id="48"></button>
	<button class="button button1" onClick="allot(this.id)" id="49"></button>
	<button class="button button1" onClick="allot(this.id)" id="50"></button></br>
	
	<button class="button button1" onClick="allot(this.id)" id="51"></button>
	<button class="button button1" onClick="allot(this.id)" id="52"></button>
	<button class="button button1" onClick="allot(this.id)" id="53"></button>
	<button class="button button1" onClick="allot(this.id)" id="54"></button>
	<button class="button button1" onClick="allot(this.id)" id="55"></button> &nbsp &nbsp &nbsp &nbsp
	
	<button class="button button1" onClick="allot(this.id)" id="56"></button>
	<button class="button button1" onClick="allot(this.id)" id="57"></button>
	<button class="button button1" onClick="allot(this.id)" id="58"></button>
	<button class="button button1" onClick="allot(this.id)" id="59"></button>
	<button class="button button1" onClick="allot(this.id)" id="60"></button></br>
	</br></br></br> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	<button class="button button1" onClick="" id="61" background-color="green"></button> &nbsp &nbsp &nbsp &nbsp
	<button class="button_last button1" onClick="" id="62" background-color="orange"></button>
	</br>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Available &nbsp &nbsp Booked
	</div>
	
	

</body>
>>>>>>> 856cb1f13c77a086e2166fea34d6c0ed4c38e1d0:bookPage.php
</html>
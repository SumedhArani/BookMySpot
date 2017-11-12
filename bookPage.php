<html>

<head>
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
button:hover{background-color:grey;}

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
</style>
</head>

<script>
  
   var check=0;
   
   function allot(l)
			{
			  
			  var j = document.getElementById(l);
			  if(j.style.backgroundColor != "green")
			  {
				console.log("hello here" + l);
				var a=document.getElementById("pop");
				a.className="tag";
				a.style.color="black";
				a.innerHTML='<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > \
				<h1>ENTER DETAILS </h1></br></br>\
				<h1>NAME : <input type ="text" id="add" ></br></br>\
				   ARRIVAL TIME : <textarea row="4" col="50" id ="add" ></textarea></br></br>\
				   TIME OF STAY : <input type="city" id="ad"></br></h1></br></br>\
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
				a.innerHTML = '<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > \
				<h1>YOUR BOOKING IS SUCCESSFUL. </h1></br></br>\
				<a href="#" class="button2" onclick="foo2()" >close</a>';
				//a.className="";
				
			}
			
			function address(q)
			{
			  var a=document.getElementById("pop");
				a.className="tag"
				a.innerHTML = '<br><br><br><div class="container1" id="d" style="background-color:white; width:600 ; text-align:left" > </br></br></br></br>\
				<h1>PAYMENT MODE</h1></br></br>\
				<h1><input type="radio" value="cash" id="cod" onselect="pay()">Cash on Exit</h3>\
				<h1>Cards </h1>\
				<h1><input type="radio" value="cash1" id="debit" onselect="pay()"> Debit Cards\
				<h1><input type="radio" value="cash1" id="credit" ">  Credit Cards\
				 <a href="#" class="button2" onclick="proceed()">Proceed     </a>\
				<a href="#" class="button2" onclick="foo1()">close</a></div>';
			}
</script>
<body>

	 <div id="pop" class="pop"></div>
	 
	<div class="num">
	<button class="button button1" onClick="allot(this.id)" id="1" ></button>
	<button class="button button1" onClick="allot(this.id)" id="2" ></button>
	<button class="button button1" onClick="allot(this.id)" id="3" ></button>
	<button class="button button1" onClick="allot(this.id)" id="4" ></button>
	<button class="button button1" onClick="allot(this.id)" id="5"></button>
	<button class="button button1" onClick="allot(this.id)" id="6"></button>
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
</html>
<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: "Lato", sans-serif;}

.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 20px;
    font-size: 17px;
    width: 16.2%;
	
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content */
.tabcontent {
    color: white;
    display: none;
    padding: 2px;
    text-align: center;
	border-top-right-radius:15px;
	border-top-left-radius:15px;

}
.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown {
    float: center;
    overflow: hidden;
}

.dropdown .dropbtn {
    cursor: pointer;
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 1.5px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn, .dropbtn:focus {
    background-color: #555;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: #555;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #777;
}

.show {
    display: block;
}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    width: 100%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
	width:100%;

}
.icon:hover {
    box-shadow: 0 8px 30px 0 rgba(0,0,0,0.2);
	border-bottom-left-radius:10px;
	border-bottom-right-radius:10px;
	border-top-left-radius:10px;
	border-top-right-radius:10px;
}
#myDIV {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
}


table.purpleHorizon {
  border: 4px solid #792396;
  background-color: #555555;
  width: 100%;
  
  text-align: center;
  border-collapse: collapse;
}
table.purpleHorizon td, table.purpleHorizon th {
  border: 3px solid #555555;
  padding: 5px 2px;
}
table.purpleHorizon tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
}
table.purpleHorizon tr:nth-child(even) {
  background: #CC3BFC;
}
table.purpleHorizon thead {
  background: #792396;
  border-bottom: 4px solid #792396;
}
table.purpleHorizon thead th {
  font-size: 19px;
  font-weight: bold;
  color: #FFFFFF;
  text-align: left;
  border-top-right-radius:6px;
border-top-left-radius:6px;
border-bottom-right-radius:6px;
border-bottom-left-radius:6px;
  border-left: 2px solid #792396;
}
table.purpleHorizon thead th:first-child {
  border-left: none;
}

table.purpleHorizon tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  background: #CE3CFF;
  background: -moz-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  background: -webkit-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  background: linear-gradient(to bottom, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  border-top: 5px solid #792396;
}
table.purpleHorizon tfoot td {
  font-size: 13px;
}
table.purpleHorizon tfoot .links {
  text-align: right;
}
table.purpleHorizon tfoot .links a{
  display: inline-block;
  background: #792396;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.button{
	border-bottom-left-radius:2px;
	border-bottom-right-radius:2px;
	border-top-left-radius:2px;
	border-top-right-radius:2px;
	background:red;
	color:Black;
	width: 16.31%;
	height: 200%;
}
input[type=text], select {
	width:95%;
	float:left;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 95%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type=submit]:hover {
    background-color: #45a049;
}
#London {background-color:red;}
#Paris {background-color:red;}
#Tokyo {background-color:red;}
#Oslo {background-color:red;}

</style>
</head>
<body onload="showhide_home()" bgcolor="#f2f2f2">

<div id="London" class="tabcontent">
  <h3>Calendario</h3>
  <p>Home Page.</p>
</div>

<div id="Paris" class="tabcontent">
  <h3>Calendario</h3>
  <p>Teacher Prefrence Form.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Calendario</h3>
  <p>About Project.</p>
</div>

<div id="Oslo" class="tabcontent">
  <h3>Calendario</h3>
  <p>Send Message to Administrator.</p>
</div>


<button class="tablink" onclick="openCity('London', this, 'red');showhide_home();" id="defaultOpen">Home</button>
<div class="tablink">
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Department
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#">Computer Science</a>
      <a href="#">Information Technology</a>
    </div>
  </div> 
  </div>
<button class="tablink" onclick="openCity('Paris', this, 'red');showhide_form();">Form</button>
<button class="tablink" onclick="openCity('Paris', this, 'red');showhide_about();">About</button>
<button class="tablink" onclick="openCity('Oslo', this, 'red');showhide_message();">Send Message</button>
<button class="tablink" onclick="openCity('Oslo2', this, 'red');logout();">Logout</button>


<script>
function logout()
{
	window.location="logout.php";
}
function disableclick(){
document.onmousedown=function(event){
if(event.button==2)
	{alert("Sorry Buddy You Can't See Source Code");
	return false;
	}
}
}
function message()
{
	alert("Form Successfully Submitted");
}
 function showhide_home()
     {
	 var div1 = document.getElementById("home");
           var div = document.getElementById("form");
		   var div2 = document.getElementById("about");
		   var div3 = document.getElementById("message");
		
    if (div.style.display !== "none") {
        div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
    else {
        div1.style.display = "block";
		div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
     }
	  function showhide_form()
     {
	 var div1 = document.getElementById("form");
           var div = document.getElementById("about");
		   var div2 = document.getElementById("message");
		   var div3 = document.getElementById("home");
    if (div.style.display !== "none") {
        div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
    else {
        div1.style.display = "block";
		div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
     }
	 function showhide_about()
     {
			var div1 = document.getElementById("about");
           var div = document.getElementById("home");
		   var div2 = document.getElementById("form");
		   var div3 = document.getElementById("message");
    if (div.style.display !== "none") {
        div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
    else {
        div1.style.display = "block";
		div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
     }
	 function showhide_message()
     {
	 var div1 = document.getElementById("message");
           var div = document.getElementById("home");
		   var div2 = document.getElementById("form");
		   var div3 = document.getElementById("about");
		   
    if (div.style.display !== "none") {
        div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
    else {
        div1.style.display = "block";
		div.style.display = "none";
		div2.style.display = "none";
		div3.style.display = "none";
    }
     }
function openCity(cityName,elmnt,color) {
if(cityName == "Oslo2")
{
	window.location="index2.php";
}
else{
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(cityName).style.display = "block";
    elmnt.style.backgroundColor = color;
}
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
	
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
</script>

 &nbsp
	
	<div class="card">
			<div class="container">
			<h4  style="font-family:Aerial Black;"> &nbsp<img src="green.png"/>
			<p style="font-family:Aerial Black; font-size:20px;">Welcome: <?php echo $login_session; ?></p> </h4><hr> 
				<div id="home">
				
				<img src="workshop.png" style="margin-left:300px; cursor:pointer; "class="icon"/>
				<img src="seminar.png"  style="margin-left:600px; cursor:pointer; "class="icon"/>
				<h3  style="margin-left:260px;">Organize Workshops &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
			Organize Seminars</h3>
				<br><br><br><br><br>
				<img src="internship.png"  style="margin-left:300px;cursor:pointer;"class="icon"/>
				<img src="events.png"  style="margin-left:600px; cursor:pointer;"class="icon"/>
				<h3  style="margin-left:260px;">Intern Recruiment &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			Organize Events</h3>
				
				
				</div>
			</div>
	</div>
	
	<div class="card">
			<div class="container">
				<div id="form">
				<h4><b>Form</b></h4> 
				<center>
	 <center>
	 <b><p id="textbox"> </p></b>
		<form method="post" action="preference_form.php">	 
		<input type="text"  name="t_id" value="<?php echo $login_session; ?>" placeholder="Faculty ID:" disabled /><br><br>
		 <br>
		<input type="text" name="full_name" id="full_name" class="login"  placeholder="Full Name:"/><br>
	
		<label>----Preference Details----</label>
					<select name="selectd" id="selectd" class="header">
							<option value="CS">CS/IT</option>													
						</select>

					<select name="select" id="select" class="header">
							
							<optgroup label="5th">
							<option >Subjects</option>
							<option value="s1">SE</option>
							<option value="s2">DBMS</option>
							<option value="s3">FLA</option>
							<option value="s3">Multimedia</option>
							<option value="s3">ERP</option>
							</optgroup>
							<optgroup label="6th">							
							<option>DA</option>
							<option>CI</option>
							<option>OOSD</option>
							<option>CD</option>
							<option>OE</option>
							</optgroup>
						</select>
							&nbsp&nbsp|&nbsp
								<select name="selectL" id="selectL" class="header">
									<optgroup label="5th">
									<option>Lab</option>
									<option>LAB1</option>
									<option>LAB2</option>
									<option>LAB3</option>
									</optgroup>
									<optgroup label="6th">
									<option>Select</option>
									<option>DA LAB</option>
									<option>CD LAB</option>
									<option>T&T LAB</option>
									</optgroup>
								</select>	&nbsp <br><br><br>
								<input type="submit" value="SUBMIT" onclick="message()">	
								<input type="reset" value="Clear Form"><br><br><br><br>
								 <h5 align="bottom">
								 </form>
								 </center>
								 </center>
				</div>
			</div>
	</div>
	
	<div class="card">
			<div class="container">
				<div id="about">
				<h4><b><center>Acknowledgement</center></b></h4> <hr width="80%">
				<center><p>We would like to express our special thanks of grattiude to our project guide Prof.</p><p> Manas R Lenka who gave us the golden opportunity to work on this challenging project.
				</p><p>while working on project we came to learn new things and we are really Thankful to our Project Guide.  </p><p>Thank You.</p>
<p align="center">Minor Project by 1506415 | 1506224 | 1506413 | 1506254 | 1506056</p>				</center>
				</div>
			</div>
	</div>
	
	<div class="card">
			<div class="container">
				<div id="message">
				<h4><b>Messages</b></h4> 

 <form method="post" action="message_by_t.php">
 <input type="text" id="msg" name="msg" size='40' style="outset:dotted 5px grey;" placeholder="Message Here" />
<input type="text"  id="msg_tid" name="msg_tid" value="<?php echo $login_session; ?>" disabled/>
 <input type="submit" value="Leave a Message" onclick="message()">
				</div>
			</div>
	</div>

</body>
</html> 
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
    padding: 1px 16px;
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
	height:100%;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    padding: 2px 16px;
	width:100%;
	height:100%;
}
.icon:hover {
    box-shadow: 0 16px 16px 0 rgba(0,0,0,0.2);
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
  border: 4px solid #06cae5;
  background-color: #ffffff;
  width: 350px;
  
  text-align: center;
  border-collapse: collapse;
}
table.purpleHorizon td, table.purpleHorizon th {
  border: 3px solid #ffffff;
  padding: 2px 2px;
}
table.purpleHorizon tbody td {
  font-size: 13px;
  font-weight: bold;
  color: #000000;
  border-bottom-left-radius:10px;
}
table.purpleHorizon tr:nth-child(even) {
  background: #d9e0e0;
}
table.purpleHorizon thead {
  background: #06cae5;
  border-bottom: 4px solid #06cae5;
}
table.purpleHorizon thead th {
  font-size: 19px;
  font-weight: bold;
  color: #000000;
  text-align: left;
  border-top-right-radius:6px;
border-top-left-radius:6px;
border-bottom-right-radius:6px;
border-bottom-left-radius:6px;
  border-left: 2px solid #06cae5;
}
table.purpleHorizon thead th:first-child {
    border-top-right-radius:6px;
border-top-left-radius:6px;
border-bottom-right-radius:6px;
border-bottom-left-radius:6px;
}

table.purpleHorizon tfoot {
  font-size: 13px;
  font-weight: bold;
  color: #FFFFFF;
  background: #CE3CFF;
  background: -moz-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  background: -webkit-linear-gradient(top, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  background: linear-gradient(to bottom, #da6dff 0%, #d34fff 66%, #CE3CFF 100%);
  border-top: 5px solid #06cae5;
}
table.purpleHorizon tfoot td {
  font-size: 13px;
}
table.purpleHorizon tfoot .links {
  text-align: right;
}
table.purpleHorizon tfoot .links a{
  display: inline-block;
  background: #06cae5;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.button{
	border-bottom-left-radius:2px;
	border-bottom-right-radius:2px;
	border-top-left-radius:2px;
	border-top-right-radius:2px;
	background:#06cae5;
	color:Black;
	width: 16.31%;
	font-size: 15px;
	height: 200%;
	cursor: pointer;
}
.button_generate {
    background-color: #333333;
    border: none;
    color: white;
    padding: 12px 28px;
    text-align: center;

    font-size: 18px;
	width:100%;
	cursor: pointer;
}
#London {background-color:red;}
#Paris {background-color:red;}
#Tokyo {background-color:red;}
#Oslo {background-color:red;}

</style>
</head>
<body onload="showhide_home()" bgcolor="#f2f2f2">

<div id="London" class="tabcontent">
  <h1 style="font-family:Georgia;">Calendario</h1>
  <p>Admin Control Panel.</p>
</div>

<div id="Paris" class="tabcontent">
  <h1 style="font-family:Georgia;">Calendario</h1>
  <p>Teacher Prefrence Form.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h1 style="font-family:Georgia;">Calendario</h1>
  <p>About Project.</p>
</div>

<div id="Oslo" class="tabcontent">
  <h1 style="font-family:Georgia;">Calendario</h1>
  <p>Messaging Service.</p>
</div>


<button class="tablink" onclick="openCity('London', this, 'red');showhide_home();" id="defaultOpen">Home</button>
<div class="tablink">
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()">Department
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content" id="myDropdown">
      <button onclick="cs_table()" class="button_generate" >Computer Science</button><br>
      <button onclick="it_table()" class="button_generate">Information Technology</button>
    </div>
  </div> 
  </div>
<button class="tablink" onclick="openCity('Paris', this, 'red');showhide_form();">Timetable</button>
<button class="tablink" onclick="openCity('Paris', this, 'red');showhide_about();">About</button>
<button class="tablink" onclick="openCity('Oslo', this, 'red');showhide_message();">Requests/Response</button>
<button class="tablink" onclick="openCity('Oslo2', this, 'red')">Logout</button>

<script>
function message()
{
	alert("Your Response has been Recorded");
	window.location="htmlnew.html";
}

function showhide_table()
     {
        var div = document.getElementById("timetable");	
		var div_cs = document.getElementById("timetable_cs");	
    if (div.style.display !== "none") {
        div.style.display = "visible	";
		div_cs.style.display = "visible	";
    }
    else {
		div.style.display = "block";
		div_cs.style.display = "block";
    }
     }
	 function showhide_table_cs()
     {
      
		var div_cs = document.getElementById("timetable_cs");	
    if (div_cs.style.display !== "none") {
		div_cs.style.display = "visible	";
    }
    else {
		div_cs.style.display = "block";
    }
     }
	 function it_table()
     {
        var div = document.getElementById("it");
		var ptr = document.getElementById("ptr");
		ptr.style.display="none";
			var div2 = document.getElementById("cse");
    if (div.style.display !== "none") {
		div.style.display = "none";
		div2.style.display = "block";
    }
    else {
		div.style.display = "block";
		div2.style.display = "none";
    }
     }
	 function cs_table()
     {
        var div = document.getElementById("cse");	
		var ptr = document.getElementById("ptr");
		ptr.style.display="none";
    if (div.style.display !== "none") {
        div.style.display = "none";
		div2.style.display = "block";
    }
    else {
		div.style.display = "block";
		div2.style.display = "none";
    }
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

function put_value()
{

    var x = document.getElementById("one").value;
    var y = document.getElementById("two").value;
	var z = document.getElementById("three").value;
	var p = document.getElementById("four").value;
	var q = document.getElementById("five").value;
	var r = document.getElementById("sixlab").value;
	var s = document.getElementById("sevenlab").value;
	var t = document.getElementById("eightlab").value;
	var u = document.getElementById("nine").value;
		document.getElementById("11").innerHTML = x;
		document.getElementById("155").innerHTML = x;
		document.getElementById("1333").innerHTML = x;
		document.getElementById("122222").innerHTML = x;
		document.getElementById("21").innerHTML = x;
		document.getElementById("233").innerHTML = x;
		document.getElementById("2555").innerHTML = x;
		document.getElementById("222222").innerHTML = x;
		document.getElementById("322").innerHTML = x;
		document.getElementById("3444").innerHTML = x;
		document.getElementById("31111").innerHTML = x;
		document.getElementById("333333").innerHTML = x;
		document.getElementById("411").innerHTML = x;
		document.getElementById("4333").innerHTML = x;
		document.getElementById("45555").innerHTML = x;
		document.getElementById("422222").innerHTML = x;
		document.getElementById("55").innerHTML = x;
		document.getElementById("533").innerHTML = x;
		document.getElementById("51111").innerHTML = x;
		document.getElementById("522222").innerHTML = x;
	   
	    document.getElementById("12").innerHTML = y;
		document.getElementById("133").innerHTML = y;
	    document.getElementById("11111").innerHTML = y;
		document.getElementById("22").innerHTML = y;
		document.getElementById("244").innerHTML = y;
		document.getElementById("2333").innerHTML = y;
		document.getElementById("21111").innerHTML = y;
		document.getElementById("31").innerHTML = y;
		document.getElementById("333").innerHTML = y;
		document.getElementById("3555").innerHTML = y;
		document.getElementById("32222").innerHTML = y;
		document.getElementById("422").innerHTML = y;
		document.getElementById("41111").innerHTML = y;
		document.getElementById("433333").innerHTML = y;
		document.getElementById("54").innerHTML = y;
		document.getElementById("522").innerHTML = y;
		document.getElementById("5333").innerHTML = y;
		document.getElementById("511111").innerHTML = y;
		
		document.getElementById("13").innerHTML = z;
		document.getElementById("122").innerHTML = z;
		document.getElementById("111111").innerHTML = z;
		document.getElementById("23").innerHTML = z;
		document.getElementById("255").innerHTML = z;
		document.getElementById("2444").innerHTML = z;
		document.getElementById("22222").innerHTML = z;
		document.getElementById("211111").innerHTML = z;
		document.getElementById("32").innerHTML = z;
		document.getElementById("3111").innerHTML = z;
		document.getElementById("33333").innerHTML = z;
		document.getElementById("41").innerHTML = z;
		document.getElementById("433").innerHTML = z;
		document.getElementById("42222").innerHTML = z;
		document.getElementById("444444").innerHTML = z;
		document.getElementById("53").innerHTML = z;
		document.getElementById("511").innerHTML = z;
		document.getElementById("52222").innerHTML = z;
		document.getElementById("544444").innerHTML = z;
		
		document.getElementById("14").innerHTML = p;
		document.getElementById("111").innerHTML = p;
		document.getElementById("1222").innerHTML = p;
		document.getElementById("13333").innerHTML = p;
		document.getElementById("211").innerHTML = p;
		document.getElementById("2222").innerHTML = p;
		document.getElementById("23333").innerHTML = p;
		document.getElementById("33").innerHTML = p;
		document.getElementById("3222").innerHTML = p;
		document.getElementById("34444").innerHTML = p;
		document.getElementById("311111").innerHTML = p;
		document.getElementById("42").innerHTML = p;
		document.getElementById("4111").innerHTML = p;
		document.getElementById("43333").innerHTML = p;
		document.getElementById("455555").innerHTML = p;
		document.getElementById("52").innerHTML = p;
		document.getElementById("5111").innerHTML = p;
		document.getElementById("53333").innerHTML = p;
		document.getElementById("ffffff").innerHTML = p;

		document.getElementById("15").innerHTML = q;
		document.getElementById("144").innerHTML = q;
		document.getElementById("1111").innerHTML = q;
		document.getElementById("12222").innerHTML = q;
		document.getElementById("133333").innerHTML = q;
		document.getElementById("222").innerHTML = q;
		document.getElementById("2111").innerHTML = q;
		document.getElementById("233333").innerHTML = q;
		document.getElementById("311").innerHTML = q;
		document.getElementById("3333").innerHTML = q;
		document.getElementById("35555").innerHTML = q;
		document.getElementById("322222").innerHTML = q;
		document.getElementById("43").innerHTML = q;
		document.getElementById("4222").innerHTML = q;
		document.getElementById("44444").innerHTML = q;
		document.getElementById("411111").innerHTML = q;
		document.getElementById("51").innerHTML = q;
		document.getElementById("5222").innerHTML = q;
		document.getElementById("533333").innerHTML = q;

		document.getElementById("1444").innerHTML = r;
		document.getElementById("1555").innerHTML = r;
		document.getElementById("1666").innerHTML = r;		
		document.getElementById("25").innerHTML = r;
		document.getElementById("344444").innerHTML = r;
		document.getElementById("355555").innerHTML = r;
		document.getElementById("366666").innerHTML = r;
		document.getElementById("24444").innerHTML = r;
		document.getElementById("25555").innerHTML = r;
		document.getElementById("26666").innerHTML = r;
		document.getElementById("44").innerHTML = r;
		document.getElementById("45").innerHTML = r;
		document.getElementById("46").innerHTML = r;		
		document.getElementById("544").innerHTML = r;
		document.getElementById("555").innerHTML = r;
		document.getElementById("566").innerHTML = r;
					
		document.getElementById("14444").innerHTML = s;
		document.getElementById("15555").innerHTML = s;
		document.getElementById("16666").innerHTML = s;
		document.getElementById("244444").innerHTML = s;
		document.getElementById("255555").innerHTML = s;	
		document.getElementById("266666").innerHTML = s;
		document.getElementById("34").innerHTML = s;
		document.getElementById("35").innerHTML = s;
		document.getElementById("36").innerHTML = s;
		document.getElementById("444").innerHTML = s;
		document.getElementById("455").innerHTML = s;
		document.getElementById("466").innerHTML = s;
		document.getElementById("5444").innerHTML = s;
		document.getElementById("5555").innerHTML = s;
		document.getElementById("5666888").innerHTML = s;
				
		document.getElementById("144444").innerHTML = t;
		document.getElementById("155555").innerHTML = t;
		document.getElementById("166666").innerHTML = t;
		document.getElementById("344").innerHTML = t;
		document.getElementById("355").innerHTML = t;
		document.getElementById("366").innerHTML = t;
		document.getElementById("24").innerHTML = t;
		document.getElementById("25").innerHTML = t;
		document.getElementById("26").innerHTML = t;
		document.getElementById("4444").innerHTML = t;
		document.getElementById("4555").innerHTML = t;
		document.getElementById("4666").innerHTML = t;
		document.getElementById("54444").innerHTML = t;
		document.getElementById("55555").innerHTML = t;
		document.getElementById("56666").innerHTML = t;
		
		document.getElementById("16").innerHTML = u;
		document.getElementById("166").innerHTML = u;
		document.getElementById("266").innerHTML = u;
		document.getElementById("2666").innerHTML = u;
		document.getElementById("3666").innerHTML = u;
		document.getElementById("36666").innerHTML = u;
		document.getElementById("46666").innerHTML = u;
		document.getElementById("466666").innerHTML = u;
		document.getElementById("56").innerHTML = u;
		document.getElementById("566666").innerHTML = u;
}
function put_value_c()
{
	
    var x1 = document.getElementById("one").value;
    var y1 = document.getElementById("two").value;
	var z1 = document.getElementById("three").value;
	var p1 = document.getElementById("four").value;
	var q1 = document.getElementById("five").value;
	var r1 = document.getElementById("sixlab").value;
	var s1 = document.getElementById("sevenlab").value;
	var t1 = document.getElementById("eightlab").value;
	var u1 = document.getElementById("nine").value;
	
		document.getElementById("c11").innerHTML = x1;
		document.getElementById("c133").innerHTML = x1;
		document.getElementById("c1666").innerHTML = x1;
		document.getElementById("c15555").innerHTML = x1;
		document.getElementById("c1222222").innerHTML = x1;
		document.getElementById("c1111111111").innerHTML = x1;
		document.getElementById("c23").innerHTML = x1;
		document.getElementById("c2222").innerHTML = x1;
		document.getElementById("c22222").innerHTML = x1;
		document.getElementById("c244444").innerHTML = x1;
		document.getElementById("c21111111").innerHTML = x1;
		document.getElementById("c211111111").innerHTML = x1;
		document.getElementById("c2333333333").innerHTML = x1;
		document.getElementById("c35").innerHTML = x1;
		document.getElementById("c3222").innerHTML = x1;
		document.getElementById("c34444").innerHTML = x1;
		document.getElementById("c3111111").innerHTML = x1;
		document.getElementById("c33333333").innerHTML = x1;
		document.getElementById("c355555555").innerHTML = x1;
		document.getElementById("c422").innerHTML = x1;
		document.getElementById("c4222").innerHTML = x1;
		document.getElementById("c45555").innerHTML = x1;
		document.getElementById("c444444").innerHTML = x1;
		document.getElementById("c41111111").innerHTML = x1;
		document.getElementById("c444444444").innerHTML = x1;
		document.getElementById("c4333333333").innerHTML = x1;
		document.getElementById("c52").innerHTML = x1;
		document.getElementById("c555").innerHTML = x1;
		document.getElementById("c5444").innerHTML = x1;
		document.getElementById("c511111").innerHTML = x1;
		document.getElementById("c5333333").innerHTML = x1;
		document.getElementById("c511111111").innerHTML = x1;		
	   
	    document.getElementById("c12").innerHTML = y1;
		document.getElementById("c144").innerHTML = y1;
	    document.getElementById("c11111").innerHTML = y1;
		document.getElementById("c111111").innerHTML = y1;
		document.getElementById("c1333333").innerHTML = y1;
		document.getElementById("c16666666").innerHTML = y1;
		document.getElementById("c1222222222").innerHTML = y1;
		document.getElementById("c244").innerHTML = y1;
		document.getElementById("c2333").innerHTML = y1;
		document.getElementById("c23333").innerHTML = y1;
		document.getElementById("c255555").innerHTML = y1;
		document.getElementById("c22222222").innerHTML = y1;
		document.getElementById("c222222222").innerHTML = y1;
		document.getElementById("c2444444444").innerHTML = y1;
		document.getElementById("c31").innerHTML = y1;
		document.getElementById("c344").innerHTML = y1;
		document.getElementById("c3333").innerHTML = y1;
		document.getElementById("c35555").innerHTML = y1;
		document.getElementById("c3222222").innerHTML = y1;
		document.getElementById("c311111111").innerHTML = y1;
		document.getElementById("c3444444444").innerHTML = y1;
		document.getElementById("c41").innerHTML = y1;
		document.getElementById("c433").innerHTML = y1;
		document.getElementById("c4333").innerHTML = y1;
		document.getElementById("c46666").innerHTML = y1;
		document.getElementById("c455555").innerHTML = y1;
		document.getElementById("c42222222").innerHTML = y1;
		document.getElementById("c455555555").innerHTML = y1;
		document.getElementById("c4444444444").innerHTML = y1;
		document.getElementById("c53").innerHTML = y1;
		document.getElementById("c566").innerHTML = y1;
		document.getElementById("c5555").innerHTML = y1;
		document.getElementById("c522222").innerHTML = y1;
		document.getElementById("c5444444").innerHTML = y1;
		document.getElementById("c522222222").innerHTML = y1;
		document.getElementById("c5111111111").innerHTML = y1;
				
		document.getElementById("c13").innerHTML = z1;
		document.getElementById("c155").innerHTML = z1;
		document.getElementById("c12222").innerHTML = z1;
		document.getElementById("c122222").innerHTML = z1;
		document.getElementById("c1444444").innerHTML = z1;
		document.getElementById("c14444444").innerHTML = z1;
		document.getElementById("c111111111").innerHTML = z1;
		document.getElementById("c1333333333").innerHTML = z1;
		document.getElementById("c255").innerHTML = z1;
		document.getElementById("c2444").innerHTML = z1;
		document.getElementById("c211111").innerHTML = z1;
		document.getElementById("c2444444").innerHTML = z1;
		document.getElementById("c23333333").innerHTML = z1;
		document.getElementById("c233333333").innerHTML = z1;
		document.getElementById("c2555555555").innerHTML = z1;
		document.getElementById("c32").innerHTML = z1;
		document.getElementById("c355").innerHTML = z1;
		document.getElementById("c31111").innerHTML = z1;
		document.getElementById("c344444").innerHTML = z1;
		document.getElementById("c3333333").innerHTML = z1;
		document.getElementById("c322222222").innerHTML = z1;
		document.getElementById("c3555555555").innerHTML = z1;
		document.getElementById("c42").innerHTML = z1;
		document.getElementById("c444").innerHTML = z1;
		document.getElementById("c4444").innerHTML = z1;
		document.getElementById("c411111").innerHTML = z1;
		document.getElementById("c4111111").innerHTML = z1;
		document.getElementById("c43333333").innerHTML = z1;
		document.getElementById("c466666666").innerHTML = z1;
		document.getElementById("c4555555555").innerHTML = z1;
		document.getElementById("c54").innerHTML = z1;
		document.getElementById("c5111").innerHTML = z1;
		document.getElementById("c51111").innerHTML = z1;
		document.getElementById("c533333").innerHTML = z1;
		document.getElementById("c5555555").innerHTML = z1;
		document.getElementById("c533333333").innerHTML = z1;
		document.getElementById("c5222222222").innerHTML = z1;
		
		document.getElementById("c111").innerHTML = p1;
		document.getElementById("c1444").innerHTML = p1;
		document.getElementById("c13333").innerHTML = p1;
		document.getElementById("c133333").innerHTML = p1;
		document.getElementById("c1555555").innerHTML = p1;
		document.getElementById("c15555555").innerHTML = p1;
		document.getElementById("c122222222").innerHTML = p1;
		document.getElementById("c21").innerHTML = p1;
		document.getElementById("c266").innerHTML = p1;
		document.getElementById("c2555").innerHTML = p1;
		document.getElementById("c222222").innerHTML = p1;
		document.getElementById("c2555555").innerHTML = p1;
		document.getElementById("c24444444").innerHTML = p1;
		document.getElementById("c2111111111").innerHTML = p1;
		document.getElementById("c33").innerHTML = p1;
		document.getElementById("c366").innerHTML = p1;
		document.getElementById("c32222").innerHTML = p1;
		document.getElementById("c355555").innerHTML = p1;
		document.getElementById("c31111111").innerHTML = p1;
		document.getElementById("c333333333").innerHTML = p1;
		document.getElementById("c3666666666").innerHTML = p1;
		document.getElementById("c43").innerHTML = p1;
		document.getElementById("c455").innerHTML = p1;
		document.getElementById("c4555").innerHTML = p1;
		document.getElementById("c422222").innerHTML = p1;
		document.getElementById("c4222222").innerHTML = p1;
		document.getElementById("c44444444").innerHTML = p1;
		document.getElementById("c4111111111").innerHTML = p1;
		document.getElementById("c55").innerHTML = p1;
		document.getElementById("c5222").innerHTML = p1;
		document.getElementById("c52222").innerHTML = p1;
		document.getElementById("c5111111").innerHTML = p1;
		document.getElementById("c54444444").innerHTML = p1;
		document.getElementById("c544444444").innerHTML = p1;
		document.getElementById("c5333333333").innerHTML = p1;

		document.getElementById("c122").innerHTML = q1;
		document.getElementById("c1555").innerHTML = q1;
		document.getElementById("c14444").innerHTML = q1;
		document.getElementById("c1111111").innerHTML = q1;
		document.getElementById("c133333333").innerHTML = q1;
		document.getElementById("c22").innerHTML = q1;
		document.getElementById("c2111").innerHTML = q1;
		document.getElementById("c21111").innerHTML = q1;
		document.getElementById("c233333").innerHTML = q1;
		document.getElementById("c2666666").innerHTML = q1;
		document.getElementById("c25555555").innerHTML = q1;
		document.getElementById("c2222222222").innerHTML = q1;
		document.getElementById("c34").innerHTML = q1;
		document.getElementById("c3111").innerHTML = q1;
		document.getElementById("c33333").innerHTML = q1;
		document.getElementById("c3666666").innerHTML = q1;
		document.getElementById("c32222222").innerHTML = q1;
		document.getElementById("c344444444").innerHTML = q1;
		document.getElementById("c411").innerHTML = q1;
		document.getElementById("c4111").innerHTML = q1;
		document.getElementById("c44444").innerHTML = q1;
		document.getElementById("c433333").innerHTML = q1;
		document.getElementById("c4333333").innerHTML = q1;
		document.getElementById("c45555555").innerHTML = q1;
		document.getElementById("c4222222222").innerHTML = q1;
		document.getElementById("c51").innerHTML = q1;
		document.getElementById("c544").innerHTML = q1;
		document.getElementById("c5333").innerHTML = q1;
		document.getElementById("c53333").innerHTML = q1;
		document.getElementById("c5222222").innerHTML = q1;
		document.getElementById("c55555555").innerHTML = q1;
		document.getElementById("c555555555").innerHTML = q1;
		
						
		document.getElementById("c14").innerHTML = r1;
		document.getElementById("c15").innerHTML = r1;
		document.getElementById("c16").innerHTML = r1;
		document.getElementById("c11111111").innerHTML = r1;
		document.getElementById("c12222222").innerHTML = r1;	
		document.getElementById("c13333333").innerHTML = r1;
		document.getElementById("c211").innerHTML = r1;
		document.getElementById("c222").innerHTML = r1;
		document.getElementById("c233").innerHTML = r1;
		document.getElementById("c244444444").innerHTML = r1;
		document.getElementById("c255555555").innerHTML = r1;
		document.getElementById("c266666666").innerHTML = r1;
		document.getElementById("c3444").innerHTML = r1;
		document.getElementById("c3555").innerHTML = r1;
		document.getElementById("c3666").innerHTML = r1;
		document.getElementById("c3444444").innerHTML = r1;
		document.getElementById("c3555555").innerHTML = r1;
		document.getElementById("c3666666").innerHTML = r1;
		document.getElementById("c3111111111").innerHTML = r1;
		document.getElementById("c3222222222").innerHTML = r1;
		document.getElementById("c3333333333").innerHTML = r1;
		document.getElementById("c41111").innerHTML = r1;
		document.getElementById("c42222").innerHTML = r1;
		document.getElementById("c43333").innerHTML = r1;
		document.getElementById("c544444").innerHTML = r1;
		document.getElementById("c555555").innerHTML = r1;
		document.getElementById("c566666").innerHTML = r1;
		
		document.getElementById("c1444").innerHTML = s1;
		document.getElementById("c1555").innerHTML = s1;
		document.getElementById("c1666").innerHTML = s1;
		document.getElementById("c144444444").innerHTML = s1;
		document.getElementById("c155555555").innerHTML = s1;
		document.getElementById("c166666666").innerHTML = s1;
		document.getElementById("c1444444444").innerHTML = s1;
		document.getElementById("c1555555555").innerHTML = s1;
		document.getElementById("c1666666666").innerHTML = s1;
		document.getElementById("c24").innerHTML = s1;
		document.getElementById("c25").innerHTML = s1;
		document.getElementById("c26").innerHTML = s1;
		document.getElementById("c24444").innerHTML = s1;
		document.getElementById("c25555").innerHTML = s1;
		document.getElementById("c26666").innerHTML = s1;
		document.getElementById("c311").innerHTML = s1;
		document.getElementById("c322").innerHTML = s1;
		document.getElementById("c333").innerHTML = s1;
		document.getElementById("c311111").innerHTML = s1;
		document.getElementById("c322222").innerHTML = s1;
		document.getElementById("c333333").innerHTML = s1;
		document.getElementById("c4444444").innerHTML = s1;
		document.getElementById("c4555555").innerHTML = s1;
		document.getElementById("c4666666").innerHTML = s1;
		document.getElementById("c51111111").innerHTML = s1;
		document.getElementById("c52222222").innerHTML = s1;
		document.getElementById("c53333333").innerHTML = s1;		
		
		document.getElementById("c144444").innerHTML = t1;
		document.getElementById("c155555").innerHTML = t1;
		document.getElementById("c166666").innerHTML = t1;
		document.getElementById("c2111111").innerHTML = t1;
		document.getElementById("c2222222").innerHTML = t1;
		document.getElementById("c2333333").innerHTML = t1;
		document.getElementById("c34444444").innerHTML = t1;
		document.getElementById("c35555555").innerHTML = t1;
		document.getElementById("c36666666").innerHTML = t1;
		document.getElementById("c44").innerHTML = t1;
		document.getElementById("c45").innerHTML = t1;
		document.getElementById("c46").innerHTML = t1;
		document.getElementById("c411111111").innerHTML = t1;
		document.getElementById("c422222222").innerHTML = t1;
		document.getElementById("c433333333").innerHTML = t1;
		document.getElementById("c511").innerHTML = t1;
		document.getElementById("c522").innerHTML = t1;
		document.getElementById("c533").innerHTML = t1;
		document.getElementById("c54444").innerHTML = t1;
		document.getElementById("c55555").innerHTML = t1;
		document.getElementById("c56666").innerHTML = t1;
		document.getElementById("c5444444444").innerHTML = t1;
		document.getElementById("c5555555555").innerHTML = t1;
		document.getElementById("c5666666666").innerHTML = t1;	

}
</script>
    &nbsp
	
	<div class="card">
			<div class="container">
			<h4  style="font-family:Aerial Black;"> &nbsp<img src="green.png"/>
			<p style="font-family:Aerial Black; font-size:20px;">Admin Panel</p> </h4><hr width="95%">
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
				<img src="events.png"  style="margin-left:600px; cursor:pointer; " class="icon"/>
				<h3  style="margin-left:260px;">Intern Recruiment &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

			Organize Events</h3><hr width="95%">
				
				
				<b><p style="font-family:Aerial Black; font-size:20px; width:10%;" class="button_generate">Online Faculties</p></b> 
								<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";

$conn =mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql = "SELECT * from login WHERE status = 1";
$result = $conn->query($sql);
echo "<table border='2'  style=' font-family: arial, sans-serif;
    width: 15%; ' >
<thead>
<tr>
</tr></thead>";

if ($result->num_rows > 0) 
{echo "<tbody><tr>";
	while($row = $result->fetch_assoc())
	  {
	  echo "<td colspan='1' style='background:#e8eced;'><h4>" . $row['username'] . "<img src='green.png'></h4></td>";
	  }
	  echo "<tbody><tr>";
}

else
{
	 	  echo "<tbody><tr>";
	  echo "<td colspan='4' style='background:#e8eced;'><h4>Seems No one is online</h4></td>";
	  echo "</tr>";
}
  echo "</tbody>";
echo "</table>";
$conn->close();
?>


				</div>
			</div>
	</div>
	
	<div class="card">
			<div class="container">
				<div id="form">
				<h4><b>Timetable</b></h4> 
				<img src ="pointer.png" style="margin-left:270px;" id="ptr"/>
				
<div id="it" style="display:none;">		
<h1 style="font-family:Aerial Black;">Enter subject Names(Information Technology)</h1>

	<form method="post" action="check_s.php">
		
		<br />
	
						<h3 style="font-family:Aerial Black;">Teachers Availability :
								<select name="select" id="select" class="header">										
							<optgroup label="5th">
							<option >Subjects</option>
							<option value="SE">SE</option>
							<option value="DBMS">DBMS</option>
							<option value="FLA">FLA</option>
							<option value="Multimedia">Multimedia</option>
							<option value="ERP">ERP</option>
							</optgroup>
							<optgroup label="6th">							
							<option>DA</option>
							<option>CI</option>
							<option>OOSD</option>
							<option>CD</option>
							<option>OE</option>
							</optgroup>
						</select>
						<input class="button" type="submit" value="CHECK" height="50%"></h3>
						</form>

Enter Subject 1:
<input type="text" id="one" class="login" />&nbsp&nbsp&nbsp
Enter Subject 2:
<input type="text" id="two" class="login"/>&nbsp&nbsp&nbsp
Enter Subject 3:
<input type="text" id="three" class="login"/>&nbsp&nbsp&nbsp<br><br>
Enter Subject 4:
<input type="text" id="four" class="login"/>&nbsp&nbsp&nbsp
Enter Subject 5:
<input type="text" id="five" class="login"/>&nbsp&nbsp&nbsp
Enter Subject 6:
<input type="text" placeholder="Optional"id="nine" class="login"/>&nbsp&nbsp&nbsp
<br><br>
<h1 style="font-family:Aerial Black;">Enter Lab Names(Information Technology)</h1>

<form method="post" action="check.php">
<h3 style="font-family:Aerial Black;">Teachers Availability :
								<select name="selectL" id="selectL" class="header">
									<optgroup label="LAB">
									<option>Labs</option>
									<option>LAB1</option>
									<option>LAB2</option>
									<option>LAB3</option>
									<option>LAB4</option>
									</optgroup>
								</select>
								
								<input class="button" type="submit" value="CHECK" height="50%"></h3>																 
								 </form>
Enter Lab 1:&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" id="sixlab" class="login"/> &nbsp&nbsp&nbsp
Enter Lab 2:&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" id="sevenlab" class="login"/> &nbsp&nbsp&nbsp
Enter Lab 3:&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" id="eightlab" class="login"/> <br>&nbsp
	
								
								 <center><button class="button_generate" onClick="showhide_table() ; put_value();">Generate Timetable</button></center>
								
	<div id="timetable" style="display:none;">							
	<center>
	<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Monday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon"  style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tbody>
<tr>
<td>C - 11</td>
<td>IT - 1</td>
<td id="11"></td>
<td id="12"></td>
<td id="13"></td>
<td id="14"></td>
<td id="15"></td>
<td id="16"></td>
</tr>
<tr>
<td>C - 10</td>
<td>IT - 2</td>
<td id="111"></td>
<td id="122"></td>
<td id="133"></td>
<td id="144"></td>
<td id="155"></td>
<td id="166"></td>
</tr>
<tr>
<td>C - 12</td>
<td>IT - 3</td>
<td id="1111"></td>
<td id="1222"></td>
<td id="1333"></td>
<td id="1444"></td>
<td id="1555"></td>
<td id="1666"></td>
</tr>
<tr>
<td>C - 13</td>
<td>IT - 4</td>
<td id="11111"></td>
<td id="12222"></td>
<td id="13333"></td>
<td id="14444"></td>
<td id="15555"></td>
<td id="16666"></td>
</tr>
<tr>
<td>C - 18</td>
<td>IT - 5</td>
<td id="111111"></td>
<td id="122222"></td>
<td id="133333"></td>
<td id="144444"></td>
<td id="155555"></td>
<td id="166666"></td>
</tr>
</tbody>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Tuesday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tbody>
<tr>
<td>C - 12</td>
<td>IT - 1</td>
<td id="21"></td>
<td id="22"></td>
<td id="23"></td>
<td id="24"></td>
<td id="25"></td>
<td id="26"></td>
</tr>
<tr>
<td>C - 10</td>
<td>IT - 2</td>
<td id="211"></td>
<td id="222"></td>
<td id="233"></td>
<td id="244"></td>
<td id="255"></td>
<td id="266"></td>
</tr>
<tr>
<td>C - 16</td>
<td>IT - 3</td>
<td id="2111"></td>
<td id="2222"></td>
<td id="2333"></td>
<td id="2444"></td>
<td id="2555"></td>
<td id="2666"></td>
</tr>
<tr>
<td>C - 15</td>
<td>IT - 4</td>
<td id="21111"></td>
<td id="22222"></td>
<td id="23333"></td>
<td id="24444"></td>
<td id="25555"></td>
<td id="26666"></td>
</tr>
<tr>
<td>C - 11</td>
<td>IT - 5</td>
<td id="211111"></td>
<td id="222222"></td>
<td id="233333"></td>
<td id="244444"></td>
<td id="255555"></td>
<td id="266666"></td>
</tr>
</tbody>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Wednesday</th>
</tr></thead></table>

<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tbody>

<tr>
<td>C - 13</td>
<td>IT - 1</td>
<td id="31"></td>
<td id="32"></td>
<td id="33"></td>
<td id="34"></td>
<td id="35"></td>
<td id="36"></td>
</tr>
<tr>
<td>C - 12</td>
<td>IT - 2</td>
<td id="311"></td>
<td id="322"></td>
<td id="333"></td>
<td id="344"></td>
<td id="355"></td>
<td id="366"></td>
</tr>
<tr>
<td>C - 11</td>
<td>IT - 3</td>
<td id="3111"></td>
<td id="3222"></td>
<td id="3333"></td>
<td id="3444"></td>
<td id="3555"></td>
<td id="3666"></td>
</tr>
<tr>
<td>C - 17</td>
<td>IT - 4</td>
<td id="31111"></td>
<td id="32222"></td>
<td id="33333"></td>
<td id="34444"></td>
<td id="35555"></td>
<td id="36666"></td>
</tr>
<tr>
<td>C - 18</td>
<td>IT - 5</td>
<td id="311111"></td>
<td id="322222"></td>
<td id="333333"></td>
<td id="344444"></td>
<td id="355555"></td>
<td id="366666"></td>
</tr>
</tbody>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Thursday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">

<tr>
<td>C - 16</td>
<td>IT - 1</td>
<td id="41"></td>
<td id="42"></td>
<td id="43"></td>
<td id="44"></td>
<td id="45"></td>
<td id="46"></td>
</tr>
<tr>
<td>C - 17</td>
<td>IT - 2</td>
<td id="411"></td>
<td id="422"></td>
<td id="433"></td>
<td id="444"></td>
<td id="455"></td>
<td id="466"></td>
</tr>
<tr>
<td>C - 12</td>
<td>IT - 3</td>
<td id="4111"></td>
<td id="4222"></td>
<td id="4333"></td>
<td id="4444"></td>
<td id="4555"></td>
<td id="4666"></td>
</tr>
<tr>
<td>C - 18</td>
<td>IT - 4</td>
<td id="41111"></td>
<td id="42222"></td>
<td id="43333"></td>
<td id="44444"></td>
<td id="45555"></td>
<td id="46666"></td>
</tr>
<tr>
<td>C - 10</td>
<td>IT - 5</td>
<td id="411111"></td>
<td id="422222"></td>
<td id="433333"></td>
<td id="444444"></td>
<td id="455555"></td>
<td id="466666"></td>
</tr>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Friday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tr>
<td>C - 10</td>
<td>IT - 1</td>
<td id="51"></td>
<td id="52"></td>
<td id="53"></td>
<td id="54"></td>
<td id="55"></td>
<td id="56"></td>
</tr>
<tr>
<td>C - 18</td>
<td>IT - 2</td>
<td id="511"></td>
<td id="522"></td>
<td id="533"></td>
<td id="544"></td>
<td id="555"></td>
<td id="566"></td>
</tr>
<tr>
<td>C - 16</td>
<td>IT - 3</td>
<td id="5111"></td>
<td id="5222"></td>
<td id="5333"></td>
<td id="5444"></td>
<td id="5555"></td>
<td id="5666888"></td>
</tr>
<tr>
<td>C - 11</td>
<td>IT - 4</td>
<td id="51111"></td>
<td id="52222"></td>
<td id="53333"></td>
<td id="54444"></td>
<td id="55555"></td>
<td id="56666"></td>
</tr>
<tr>
<td>C - 12</td>
<td>IT - 5</td>
<td id="511111"></td>
<td id="522222"></td>
<td id="533333"></td>
<td id="544444"></td>
<td id="ffffff"></td>
<td id="566666"></td>
</tr>
</table>
</center>
<center><input type="button" value="Print this page" onClick="window.print()"></center>
</div>
 </center>
 </div>
 
 <div id="cse" style="display:none;">
 <h1 style="font-family:Aerial Black;">Enter subject Names(Computer Science)</h1>
 		<form method="post" action="check_s.php">
		
		<br />
	
						<label><h3 style="font-family:Aerial Black;">Teachers Availability for Subjects & Lab
								<select name="select" id="select" class="header">
										<optgroup label="5th">
							<option >Subjects</option>
							<option value="SE">SE</option>
							<option value="DBMS">DBMS</option>
							<option value="FLA">FLA</option>
							<option value="Multimedia">Multimedia</option>
							<option value="ERP">ERP</option>
							</optgroup>
							<optgroup label="6th">							
							<option>DA</option>
							<option>CI</option>
							<option>OOSD</option>
							<option>CD</option>
							<option>OE</option>
							</optgroup>
								</select>&nbsp&nbsp|&nbsp
								<input class="button" type="submit" value="CHECK" height="50%"></h3></label>																 
								 </form>
Enter Subject 1:
<input type="text" id="one" class="login" />&nbsp&nbsp&nbsp
Enter Subject 2:
<input type="text" id="two" class="login"/>&nbsp&nbsp&nbsp
Enter Subject 3:
<input type="text" id="three" class="login"/>&nbsp&nbsp&nbsp<br><br>
Enter Subject 4:
<input type="text" id="four" class="login"/>&nbsp&nbsp&nbsp
Enter Subject 5:
<input type="text" id="five" class="login"/>&nbsp&nbsp&nbsp
Enter Subject 6:
<input type="text" placeholder="Optional"id="nine" class="login"/>&nbsp&nbsp&nbsp
<br><br>
<h1 style="font-family:Aerial Black;">Enter Lab Names(Computer Science)</h1>
<form method="post" action="check.php">
<h3 style="font-family:Aerial Black;">Teachers Availability :
								<select name="selectL" id="selectL" class="header">
									<optgroup label="LAB">
									<option>Labs</option>
									<option>LAB1</option>
									<option>LAB2</option>
									<option>LAB3</option>
									<option>LAB4</option>
									</optgroup>
								</select>
								
								<input class="button" type="submit" value="CHECK" height="50%"></h3>																 
								 </form>

Enter Lab 1:&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" id="sixlab" class="login"/> &nbsp&nbsp&nbsp
Enter Lab 2:&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" id="sevenlab" class="login"/> &nbsp&nbsp&nbsp
Enter Lab 3:&nbsp&nbsp&nbsp&nbsp&nbsp
<input type="text" id="eightlab" class="login"/> <br>

	 <p id="textbox"> </p>

								 <center><button class="button_generate" onClick="showhide_table_cs() ; put_value_c()">Generate Timetable</button></center>
<center>								 <div id="timetable_cs" style="display:none;">		
 <table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Monday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon"  style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tbody>
<tr>
<td>C - 1</td>
<td>CS - 1</td>
<td id="c11"></td>
<td id="c12"></td>
<td id="c13"></td>
<td id="c14"></td>
<td id="c15"></td>
<td id="c16"></td>
</tr>
<tr>
<td>C - 2</td>
<td>CS - 2</td>
<td id="c111"></td>
<td id="c122"></td>
<td id="c133"></td>
<td id="c144"></td>
<td id="c155"></td>
<td id="c166"></td>
</tr>
<tr>
<td>C - 3</td>
<td>CS - 3</td>
<td id="c1111"></td>
<td id="c1222"></td>
<td id="c1333"></td>
<td id="c1444"></td>
<td id="c1555"></td>
<td id="c1666"></td>
</tr>
<tr>
<td>C - 4</td>
<td>CS - 4</td>
<td id="c11111"></td>
<td id="c12222"></td>
<td id="c13333"></td>
<td id="c14444"></td>
<td id="c15555"></td>
<td id="c16666"></td>
</tr>
<tr>
<td>C - 5</td>
<td>CS - 5</td>
<td id="c111111"></td>
<td id="c122222"></td>
<td id="c133333"></td>
<td id="c144444"></td>
<td id="c155555"></td>
<td id="c166666"></td>
</tr>
<tr>
<td>C - 6</td>
<td>CS - 6</td>
<td id="c1111111"></td>
<td id="c1222222"></td>
<td id="c1333333"></td>
<td id="c1444444"></td>
<td id="c1555555"></td>
<td id="c1666666"></td>
</tr>
<tr>
<td>C - 7</td>
<td>CS - 7</td>
<td id="c11111111"></td>
<td id="c12222222"></td>
<td id="c13333333"></td>
<td id="c14444444"></td>
<td id="c15555555"></td>
<td id="c16666666"></td>
</tr>
<tr>
<td>C - 8</td>
<td>CS - 8</td>
<td id="c111111111"></td>
<td id="c122222222"></td>
<td id="c133333333"></td>
<td id="c144444444"></td>
<td id="c155555555"></td>
<td id="c166666666"></td>
</tr>
<tr>
<td>C - 9</td>
<td>CS - 9</td>
<td id="c1111111111"></td>
<td id="c1222222222"></td>
<td id="c1333333333"></td>
<td id="c1444444444"></td>
<td id="c1555555555"></td>
<td id="c1666666666"></td>
</tr>
</tbody>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Tuesday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tbody>
<tr>
<td>C - 1</td>
<td>CS - 1</td>
<td id="c21"></td>
<td id="c22"></td>
<td id="c23"></td>
<td id="c24"></td>
<td id="c25"></td>
<td id="c26"></td>
</tr>
<tr>
<td>C - 2</td>
<td>CS - 2</td>
<td id="c211"></td>
<td id="c222"></td>
<td id="c233"></td>
<td id="c244"></td>
<td id="c255"></td>
<td id="c266"></td>
</tr>
<tr>
<td>C - 3</td>
<td>CS - 3</td>
<td id="c2111"></td>
<td id="c2222"></td>
<td id="c2333"></td>
<td id="c2444"></td>
<td id="c2555"></td>
<td id="c2666"></td>
</tr>
<tr>
<td>C - 5</td>
<td>CS - 4</td>
<td id="c21111"></td>
<td id="c22222"></td>
<td id="c23333"></td>
<td id="c24444"></td>
<td id="c25555"></td>
<td id="c26666"></td>
</tr>
<tr>
<td>C - 4</td>
<td>CS - 5</td>
<td id="c211111"></td>
<td id="c222222"></td>
<td id="c233333"></td>
<td id="c244444"></td>
<td id="c255555"></td>
<td id="c266666"></td>
</tr>
<tr>
<td>C - 7</td>
<td>CS - 6</td>
<td id="c2111111"></td>
<td id="c2222222"></td>
<td id="c2333333"></td>
<td id="c2444444"></td>
<td id="c2555555"></td>
<td id="c2666666"></td>
</tr>
<tr>
<td>C - 6</td>
<td>CS - 7</td>
<td id="c21111111"></td>
<td id="c22222222"></td>
<td id="c23333333"></td>
<td id="c24444444"></td>
<td id="c25555555"></td>
<td id="c26666666"></td>
</tr>
<tr>
<td>C - 9</td>
<td>CS - 8</td>
<td id="c211111111"></td>
<td id="c222222222"></td>
<td id="c233333333"></td>
<td id="c244444444"></td>
<td id="c255555555"></td>
<td id="c266666666"></td>
</tr>
<tr>
<td>C - 8</td>
<td>CS - 9</td>
<td id="c2111111111"></td>
<td id="c2222222222"></td>
<td id="c2333333333"></td>
<td id="c2444444444"></td>
<td id="c2555555555"></td>
<td id="c2666666666"></td>
</tbody
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Wednesday</th>
</tr></thead></table>

<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tbody>

<tr>
<td>C - 2</td>
<td>CS - 1</td>
<td id="c31"></td>
<td id="c32"></td>
<td id="c33"></td>
<td id="c34"></td>
<td id="c35"></td>
<td id="c36"></td>
</tr>
<tr>
<td>C - 1</td>
<td>CS - 2</td>
<td id="c311"></td>
<td id="c322"></td>
<td id="c333"></td>
<td id="c344"></td>
<td id="c355"></td>
<td id="c366"></td>
</tr>
<tr>
<td>C - 3</td>
<td>CS - 3</td>
<td id="c3111"></td>
<td id="c3222"></td>
<td id="c3333"></td>
<td id="c3444"></td>
<td id="c3555"></td>
<td id="c3666"></td>
</tr>
<tr>
<td>C - 5</td>
<td>CS - 4</td>
<td id="c31111"></td>
<td id="c32222"></td>
<td id="c33333"></td>
<td id="c34444"></td>
<td id="c35555"></td>
<td id="c36666"></td>
</tr>
<tr>
<td>C - 4</td>
<td>CS - 5</td>
<td id="c311111"></td>
<td id="c322222"></td>
<td id="c333333"></td>
<td id="c344444"></td>
<td id="c355555"></td>
<td id="c366666"></td>
</tr>
<tr>
<td>C - 8</td>
<td>CS - 6</td>
<td id="c3111111"></td>
<td id="c3222222"></td>
<td id="c3333333"></td>
<td id="c3444444"></td>
<td id="c3555555"></td>
<td id="c3666666"></td>
</tr>
<tr>
<td>C - 6</td>
<td>CS - 7</td>
<td id="c31111111"></td>
<td id="c32222222"></td>
<td id="c33333333"></td>
<td id="c34444444"></td>
<td id="c35555555"></td>
<td id="c36666666"></td>
</tr>
<tr>
<td>C - 7</td>
<td>CS - 8</td>
<td id="c311111111"></td>
<td id="c322222222"></td>
<td id="c333333333"></td>
<td id="c344444444"></td>
<td id="c355555555"></td>
<td id="c366666666"></td>
</tr>
<tr><td>C - 9</td>
<td>CS - 9</td>
<td id="c3111111111"></td>
<td id="c3222222222"></td>
<td id="c3333333333"></td>
<td id="c3444444444"></td>
<td id="c3555555555"></td>
<td id="c3666666666"></td>
</tbody>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Thursday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">

<tr>
<td>C - 6</td>
<td>CS - 1</td>
<td id="c41"></td>
<td id="c42"></td>
<td id="c43"></td>
<td id="c44"></td>
<td id="c45"></td>
<td id="c46"></td>
</tr>
<tr>
<td>C - 9</td>
<td>CS - 2</td>
<td id="c411"></td>
<td id="c422"></td>
<td id="c433"></td>
<td id="c444"></td>
<td id="c455"></td>
<td id="c466"></td>
</tr>
<tr>
<td>C - 6</td>
<td>CS - 3</td>
<td id="c4111"></td>
<td id="c4222"></td>
<td id="c4333"></td>
<td id="c4444"></td>
<td id="c4555"></td>
<td id="c4666"></td>
</tr>
<tr>
<td>C - 2</td>
<td>CS - 4</td>
<td id="c41111"></td>
<td id="c42222"></td>
<td id="c43333"></td>
<td id="c44444"></td>
<td id="c45555"></td>
<td id="c46666"></td>
</tr>
<tr>
<td>C - 4</td>
<td>CS - 5</td>
<td id="c411111"></td>
<td id="c422222"></td>
<td id="c433333"></td>
<td id="c444444"></td>
<td id="c455555"></td>
<td id="c466666"></td>
</tr>
<tr>
<tr>
<td>C - 8</td>
<td>CS - 6</td>
<td id="c4111111"></td>
<td id="c4222222"></td>
<td id="c4333333"></td>
<td id="c4444444"></td>
<td id="c4555555"></td>
<td id="c4666666"></td>
</tr>
<tr>
<td>C - 1</td>
<td>CS - 7</td>
<td id="c41111111"></td>
<td id="c42222222"></td>
<td id="c43333333"></td>
<td id="c44444444"></td>
<td id="c45555555"></td>
<td id="c46666666"></td>
</tr>
<tr>
<td>C - 7</td>
<td>CS - 8</td>
<td id="c411111111"></td>
<td id="c422222222"></td>
<td id="c433333333"></td>
<td id="c444444444"></td>
<td id="c455555555"></td>
<td id="c466666666"></td>
</tr>
<tr>
<td>C - 2</td>
<td>CS - 9</td>
<td id="c4111111111"></td>
<td id="c4222222222"></td>
<td id="c4333333333"></td>
<td id="c4444444444"></td>
<td id="c4555555555"></td>
<td id="c4666666666"></td>
</table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<thead>
<tr>
<th>Friday</th>
</tr></thead></table>
<table border='5' class="purpleHorizon" style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 90%;">
<tr>
<td>C - 2</td>
<td>CS - 1</td>
<td id="c51"></td>
<td id="c52"></td>
<td id="c53"></td>
<td id="c54"></td>
<td id="c55"></td>
<td id="c56"></td>
</tr>
<tr>
<td>C - 4</td>
<td>CS - 2</td>
<td id="c511"></td>
<td id="c522"></td>
<td id="c533"></td>
<td id="c544"></td>
<td id="c555"></td>
<td id="c566"></td>
</tr>
<tr>
<td>C - 8</td>
<td>CS - 3</td>
<td id="c5111"></td>
<td id="c5222"></td>
<td id="c5333"></td>
<td id="c5444"></td>
<td id="c5555"></td>
<td id="c5666"></td>
</tr>
<tr>
<td>C - 6</td>
<td>CS - 4</td>
<td id="c51111"></td>
<td id="c52222"></td>
<td id="c53333"></td>
<td id="c54444"></td>
<td id="c55555"></td>
<td id="c56666"></td>
</tr>
<tr>
<td>C - 3</td>
<td>CS - 5</td>
<td id="c511111"></td>
<td id="c522222"></td>
<td id="c533333"></td>
<td id="c544444"></td>
<td id="c555555"></td>
<td id="c566666"></td>
</tr>
<tr>
<tr>
<td>C - 9</td>
<td>CS - 6</td>
<td id="c5111111"></td>
<td id="c5222222"></td>
<td id="c5333333"></td>
<td id="c5444444"></td>
<td id="c5555555"></td>
<td id="c5666666"></td>
</tr>
<tr>
<td>C - 2</td>
<td>CS - 7</td>
<td id="c51111111"></td>
<td id="c52222222"></td>
<td id="c53333333"></td>
<td id="c54444444"></td>
<td id="c55555555"></td>
<td id="c56666666"></td>
</tr>
<tr>
<td>C - 1</td>
<td>CS - 8</td>
<td id="c511111111"></td>
<td id="c522222222"></td>
<td id="c533333333"></td>
<td id="c544444444"></td>
<td id="c555555555"></td>
<td id="c566666666"></td>
</tr>
<tr>
<td>C - 7</td>
<td>CS - 9</td>
<td id="c5111111111"></td>
<td id="c5222222222"></td>
<td id="c5333333333"></td>
<td id="c5444444444"></td>
<td id="c5555555555"></td>
<td id="c5666666666"></td>
</table>
</center>
<center><input type="button" value="Print this page" onClick="window.print()"></center>
 </div>
 </div>
 
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
				<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main_db";

$conn =mysqli_connect($servername, $username, $password, $dbname);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }
$sql = "SELECT * from messages";
$result = $conn->query($sql);
echo "<table border='5' class='purpleHorizon'  style=' font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 95%;' >
<thead>
<tr>
</tr></thead>";

if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc())
		
	  {
	  echo "<tbody><tr>";
	  echo "<td colspan='4' style='background:#e8eced;'><h4>" . $row['message'] . "</h4></td>";
	  echo "</tr>";
	  }
}
else
{
	  echo "<tbody><tr>";
	  echo "<td colspan='4' style='background:#e8eced;'><h4>0 Results</h4></td>";
	  echo "</tr>";
}
  echo "</tbody>";
echo "</table>";
$conn->close();
?>&nbsp <br>
 <form method="post" action="message_by_a.php">
 <input type="text" id="msg" name="msg" size='168'style="border:outset 5px grey;" placeholder="Message Here">
 <input type="submit" value="Leave a Message" onclick="message()" class="button">
				</div>
			</div>
	</div>

</body>
</html> 

<?php

require_once("../LogicLayer/DatabaseManager.php");	
require_once("../LogicLayer/Cargo.php");



if($_SERVER["REQUEST_METHOD"] == "POST") {
	$id=$_POST['idofcargo'];	
	$result1 = UserManager::mycargo($id);
}





?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="..//scripts/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="..//style/mystyle.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

<body>

<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card-2 w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">Side Navigation</h1>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
</nav>

<!-- Header -->
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> 
  <div class="w3-center">
  <h4>HBT CORPORATION</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">International Cargo</h1>
    <div class="w3-padding-32">
     
    </div>
  </div>
</header>

<!-- Modal -->

  <hr>

  <!-- Sender -->
<div class="w3-container">
  <div class="w3-center">
    <h2>Sender</h2>
    <p w3-class="w3-large">Info</p>
  </div>

<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>Name</th>
  <th>Surname</th>
  <th>Country</th>
  <th>City</th>
</tr>
</thead>
<tbody>
<tr>
  <td><?php echo $result1->getsenderName();?></td>
  <td><?php echo $result1->getsenderSurname();?></td>
  <td><?php echo $result1->getsenderCountry();?></td>  
  <td><?php echo $result1->getsenderCity();?></td>
</tr>

</tbody>
</table>
</div>
</div>

<!-- Receiver -->
<div class="w3-container">
  <div class="w3-center">
    <h2>Receiver</h2>
    <p w3-class="w3-large">Info</p>
  </div>
  
  
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>Name</th>
  <th>Surname</th>
  <th>Country</th>
  <th>City</th>
</tr>
</thead>
<tbody>
<tr>
  <td><?php echo $result1->getreceiverName();?></td>
  <td><?php echo $result1->getreceiverSurname();?></td>
  <td><?php echo $result1->getreceiverCountry();?></td>  
  <td><?php echo $result1->getreceiverCity();?></td>
</tr>

</tbody>
</table>
</div>
  
  


</div>
<!-- Cargo -->
<div class="w3-container">
  <div class="w3-center">
    <h2>Cargo</h2>
    <p w3-class="w3-large">Info</p>
  </div>
  
  
<div class="w3-responsive w3-card-4">
<table class="w3-table w3-striped w3-bordered">
<thead>
<tr class="w3-theme">
  <th>Weight</th>
  <th>Volume</th>


</tr>
</thead>
<tbody>
<tr>
  <td><?php echo $result1->getcweight();?></td>
  <td><?php echo $result1->getcvolume();?></td>
</tr>

</tbody>
</table>
</div>
  
  
  <br><br>

</div>


<div class="w3-container"> 
<div class="w3-center">
<button class="w3-btn w3-xlarge w3-red w3-hover-light-grey" onclick="addCargo()" style="font-weight:900;">Delete</button>
</div>
</div>

<br><br>

<div class="w3-container"> 
<div class="w3-center">
<button class="w3-btn w3-xlarge w3-black w3-hover-light-grey" onclick="addCargo()" style="font-weight:900;">Update</button>
</div>
</div>

<br><br>

<!-- Footer -->

<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Footer</h3>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  <div style="position:relative;bottom:55px;" class="w3-tooltip w3-right">
    <span class="w3-text w3-theme-light w3-padding">Go To Top</span>    
    <a class="w3-text-white" href="#myHeader"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
  <p>Remember to check out our  <a href="w3css_references.asp" class="w3-btn w3-theme-light" target="_blank">W3.CSS Reference</a></p>
</footer>

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->

<script>
// Side navigation




function removeOptions(selectbox)
{
    var i;
    for(i = selectbox.options.length - 1 ; i >= 0 ; i--)
    {
        selectbox.remove(i);
    }
}

function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}

function opentc(open,close,out)
{
	if(out==0)
	{
	var elem1 = document.getElementById(open);  
	elem1.setAttribute("style", "");
	var elem2 = document.getElementById(close);  
	elem2.setAttribute("style", "display:none");
	}
	else
	{
	var elem1 = document.getElementById(close);  
	elem1.setAttribute("style", "");
	var elem2 = document.getElementById(open);  
	elem2.setAttribute("style", "display:none");
	}
}
  


</script>

</body>
</html>

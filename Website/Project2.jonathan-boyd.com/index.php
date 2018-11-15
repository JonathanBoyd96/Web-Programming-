<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul>
  <li><a href="http://jonathan-boyd.com">Home</a></li>
  <li><a href="http://fun.jonathan-boyd.com">Fun</a></li>
  <li><a href="http://php.jonathan-boyd.com">PHP</a></li>
  <li><a href="http://ajax.jonathan-boyd.com">AJAX</a></li>
  <li><a href="http://csharp.jonathan-boyd.com">C Sharp</a></li>
  <li><a href="http://api.jonathan-boyd.com">Map!</a></li>
  <li><a href="http://webapi.jonathan-boyd.com">Web API Chart</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn active" onclick="myFunction()">Projects</a>
    <div class="dropdown-content" id="myDropdown">
      <a href="http://Project1.jonathan-boyd.com">Project 1</a>
      <a href="http://Project2.jonathan-boyd.com">Project 2</a>
    </div>
  </li>
</ul>
<script>
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</body>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<h1>Project 2</h1>
<br><br><br><br>
<h3 class="center">Majestic Pictures of me</h3>

<div class="content section" style="max-width:500px">
  <img class="mySlides" src="images/me1.jpg" style="width:100%">
  <img class="mySlides" src="images/me2.jpg" style="width:100%">
  <img class="mySlides" src="images/me3.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000);
}
</script>
<h3>Interactive javascript example<h1>
<script>
function light(sw) {
    var pic;
    if (sw == 0) {
        pic = "images/bulb1.png"
    } else {
        pic = "images/bulb2.png"
    }
    document.getElementById('myImage').src = pic;
}
</script>

<img id="myImage" src="images/bulb1.png" width="100" height="180">

<p>
<button type="button" onclick="light(1)">Light On</button>
<button type="button" onclick="light(0)">Light Off</button>
</p>
</body>
</html>
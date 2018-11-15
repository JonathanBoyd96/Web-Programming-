<!DOCTYPE html>
<html>
  <head>
<link type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<ul>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages">Home</a></li>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages/forms">Forms</a></li>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages/autocomplete">Autocomplete</a></li>
  <li><a class ="active" href="http://final.jonathan-boyd.com/index.php/pages/API1">API 1</a></li>
  <li><a href="http://final.jonathan-boyd.com/index.php/pages/API2">API 2</a></li>
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
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
	<style>
ul {list-style-type: none; margin: 0; padding: 0;overflow: hidden; background-color: #333;}

li {float: left;}

li a, .dropbtn {display: inline-block; color: white; text-align: center; padding: 14px 16px; text-decoration: none;}

li a:hover, .dropdown:hover .dropbtn {background-color: red;}

li.dropdown {display: inline-block;}

.dropdown-content {display: none; position: absolute; background-color: #f9f9f9; min-width: 160px; box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);}

.dropdown-content a {color: black; padding: 12px 16px; text-decoration: none; display: block; text-align: left;}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}

.active {background-color: #4CAF50; color: white;}

.mySlides {display:none;}

.content{max-width:980px;margin:auto}

.section{margin-top:16px!important;margin-bottom:16px!important}

img {float: right; margin: 0 0 10px 10px;}

body {background-color: white}

body {color: black;}

h1 {text-align: center; background-color: gray; color: black;}

h2 {text-align: center; background-color: gray; color: ;}

h3 {text-align: center; background-color: gray; color: ;}

table, th, td {border: 2px solid orange; border-spacing: 1px;}

.class {text-align: center; background-color: yellow;}

#id {text-align: center; background-color: red;}

a:link{background-color: none;}

.header {text-align: center; background-color: green;}

      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 34.528659, lng: -83.986241},
          zoom: 16,
		  mapTypeId: 'hybrid'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtkolQvD1-a5YyMzovxekSaqGNX8_Bmzg&callback=initMap"
    async defer></script>
    
  </body>
</html>
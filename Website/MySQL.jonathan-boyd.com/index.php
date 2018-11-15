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
  <li><a class="active" href="http://MySQL.jonathan-boyd.com">MySQL</a></li>
  <li><a href="http://php.jonathan-boyd.com">PHP</a></li>
 <li><a href="http://ajax.jonathan-boyd.com">AJAX</a></li>
   <li><a href="http://csharp.jonathan-boyd.com">C Sharp</a></li>
   <li><a href="http://api.jonathan-boyd.com">Map!</a></li>
   <li><a href="http://webapi.jonathan-boyd.com">Web API Chart</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Projects</a>
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
</html>
<h1>MySQL</h1>
<br>

<?php 
  $servername = "50.62.209.148:3306";
  $username = "JonathanBoyd";
  $password = "12345";
   define('DB_NAME', 'JonathanBoyd');
  $link = mysql_connect($servername, $username, $password);
  if (!$link) {
    die("Could not connect: " . mysql_error());
    } 
    $db_select=mysql_select_db(DB_NAME, $link);
    if (!db_select) {
      die('cant use ' .DB_NAME .'.mysql_error()');
    }

    $first= $_POST['first'];
	$last= $_POST['last'];
	$email= $_POST['email'];
    $sql = "INSERT INTO Final (first, last, email) VALUES ('$first','$last','$email')";
	
if (!mysql_query($sql)) {
      die('Error: '.mysql_error());
    }

$sql="SELECT * FROM Final";
    $record=mysql_query($sql);
    mysql_close();

 ?>
 
  <form method="post">
    First Name: <input type="text" name="input1"><br>
    Last Name: <input type="text" name="input2"><br>
    Age: <input type="text" name="input3"><br>
    Major: <input type="text" name="input4"><br>
    <input type="submit" name="insert">
  </form>
  
  <br>
  <h2>Table</h2>
  <br>
 
 <table border="1" cellpadding="1" cellspacing="1">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
    <th>Major</th>
  </tr>
  
  <?php
     while ($Test=mysql_fetch_assoc($record)) {
        echo "<tr>";
        echo "<td>".$Test['input1']."</td>";
        echo "<td>".$Test['input2']."</td>";
        echo "<td>".$Test['input3']."</td>";
		echo "<td>".$Test['input4']."</td>";
        echo "</tr>";
      } 
	  
  ?>
 
<footer>Copyright © Jonathan-Boyd.com</footer>

</body>
</html>
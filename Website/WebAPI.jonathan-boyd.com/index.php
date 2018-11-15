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

    $name= $_POST['name'];
	$age= $_POST['age'];
	$color= $_POST['color'];
    $sql = "INSERT INTO tbl_student (name, age, color) VALUES ('$name','$age','$color')";
	
if (!mysql_query($sql)) {
      die('Error: '.mysql_error());
    }

$sql="SELECT * FROM Test";
    $record=mysql_query($sql);
    mysql_close();


$connect = mysqli_connect("50.62.209.148:3306", "JonathanBoyd", "12345", "JonathanBoyd");  
 $query = "SELECT color, count(*) as number FROM tbl_student GROUP BY color";  
 $result = mysqli_query($connect, $query); 
 ?>
  
 <!DOCTYPE html>  
 <html>  
 <link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js">
</script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<ul>
  <li><a href="http://jonathan-boyd.com">Home</a></li>
  <li><a href="http://MySQL.jonathan-boyd.com">MySQL</a></li>
  <li><a href="http://php.jonathan-boyd.com">PHP</a></li>
  <li><a href="http://ajax.jonathan-boyd.com">AJAX</a></li>
  <li><a href="http://csharp.jonathan-boyd.com/Default.aspx">C Sharp</a></li>
  <li><a href="http://api.jonathan-boyd.com">Map!</a></li>
  <li><a class="active" href="http://webapi.jonathan-boyd.com">Web API Chart</a></li>
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
 
 <h3>Enter your information</h3>
 <form method="post">
    Name: <input type="text" name="name"><br>
    Age: <input type="text" name="age"><br>
    Favorite Color: <input type="text" name="color"><br>
    <input type="submit" name="insert">
  </form>
  
      <head>  
           <title>A pie chart of favorite colors using PHP Mysql database</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['color', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["color"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of favorite colors',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>
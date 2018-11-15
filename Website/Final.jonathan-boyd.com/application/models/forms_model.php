<?php class forms_model extends CI_Model
{
	
	
function insert()
{
  $servername = "50.62.209.148:3306";
  $username = "JonathanBoyd";
  $password = "12345";
   define('DB_NAME', 'JonathanBoyd');
  $link = mysql_connect($servername, $username, $password);
  if (!$link) {
    die("Could not connect: " . mysql_error());
    } 
    $db_select=mysql_select_db(DB_NAME, $link);
    

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

}

function insert2()
{
  $servername = "50.62.209.148:3306";
  $username = "JonathanBoyd";
  $password = "12345";
   define('DB_NAME', 'JonathanBoyd');
  $link = mysql_connect($servername, $username, $password);
  if (!$link) {
    die("Could not connect: " . mysql_error());
    } 
    $db_select=mysql_select_db(DB_NAME, $link);
    

    $color= $_POST['color'];
    $sql = "INSERT INTO Final2 (color) VALUES ('$color')";
	
if (!mysql_query($sql)) {
      die('Error: '.mysql_error());
    }

$sql="SELECT * FROM Final2";
    $record=mysql_query($sql);
    mysql_close();

}

}
?>
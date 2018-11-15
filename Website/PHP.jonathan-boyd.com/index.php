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
  <li><a href="http://MySQL.jonathan-boyd.com">MySQL</a></li>
  <li><a class= "active" href="http://php.jonathan-boyd.com">PHP</a></li>
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

<h1>PHP Project</h1>
<br/>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<p> Please fill out all the information and submit.
<span class="error">* signifies a required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  <span class="error"><?php echo $websiteErr;?></span>
  Gender:
  
  <select name="gender">
  <option value="">Select...</option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  </select>

  <?php if (isset($gender) && $gender=="Female")?>
  <?php if (isset($gender) && $gender=="Male")?>
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Your information is displayed below:</h2>";
echo "Name: ";
echo $name;
echo "<br>";
echo "Email: ";
echo $email;
echo "<br>";
echo "Gender: ";
echo $gender;
?>

<footer>Copyright © Jonathan-Boyd.com</footer>

</body>
</html>
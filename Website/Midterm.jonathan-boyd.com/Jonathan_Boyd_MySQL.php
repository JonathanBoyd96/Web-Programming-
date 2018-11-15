<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="Jonathan_Boyd.css">

	<link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

	<script type="text/javascript" src="Jonathan_Boyd.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta charset="UTF-8">

	<title>Jonathan Boyd's Website</title>
</head>
<body>
<section id="header">
	<div class="header">
		<h1>Jonathan Boyd's</h1>
		<h2>Website</h2>
	</div>
</section>
<div class="container">
	<div class="page-wrap">

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

    $input1= $_POST['input1'];
	$input2= $_POST['input2'];
	$input3= $_POST['input3'];
    $sql = "INSERT INTO Test (input1, input2, input3) VALUES ('$input1','$input2','$input3')";
	
if (!mysql_query($sql)) {
      die('Error: '.mysql_error());
    }

$sql="SELECT * FROM Test";
    $record=mysql_query($sql);
    mysql_close();

 ?>

		<section id="form-area">
			<div class="forms">
				<form method="post">
    First Name: <input type="text" name="input1"><br>
    Last Name: <input type="text" name="input2"><br>
    Age: <input type="text" name="input3"><br>
  </form>
					<div id="age-container">
						<select id="form">
<?php
    for ($i=1; $i<=100; $i++)
    {
        ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
        <?php
    }
?>
</select>
					</div>
					<div class="submit-button">
						<input type="submit" name="insert">
					</div>
				</form>
			</div>
		</section>
		<section id="table-area">
			<div class="table">
				<table class="table-info" border="1" cellpadding="1" cellspacing="1">
  <tr>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Age</th>
  </tr>
  
  <?php
     while ($Test=mysql_fetch_assoc($record)) {
        echo "<tr>";
        echo "<td>".$Test['input1']."</td>";
        echo "<td>".$Test['input2']."</td>";
        echo "<td>".$Test['input3']."</td>";
		
        echo "</tr>";
      } 
	  
  ?>	
			</div>
		</section>
	</div>
</div>
	
</body>
</html>
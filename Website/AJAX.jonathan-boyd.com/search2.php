<?
$server="50.62.209.148:3306";
$dbname="JonathanBoyd";
$username="JonathanBoyd";
$password="12345";
$db = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
$select = $db->prepare("SELECT * FROM `ajax` WHERE `First` LIKE ?");
$select->bindParam(1, $last);
$last = "%".$_GET['q']."%";
$select->execute();
$results = $select->fetchAll(PDO::FETCH_ASSOC);
if($_GET['type'] == "html")
{
echo "<table>";
echo "<tr>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Email</th>";
echo "</tr>";
foreach($results as $row)
{
echo "<tr>";
echo "<td>".$row['First']."</td>";
echo "<td>".$row['Last']."</td>";
echo "<td>".$row['Email']."</td>";
echo "</tr>";
}
echo "</table>";
}
else
{
echo json_encode($results);
}
?>
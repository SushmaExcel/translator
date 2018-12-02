<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="view-port" content="width=device-width, initial-scale=1">
<style>
body{
	/*background-color: #3385ff /*#1a75ff*/;
	/*background-image: url("5.jpg");*/
	/*background-position: center;*/
	/*background-repeat: no-repeat;*/
	background-size: cover;
	height: 100%
}

h1{
	color: #0066ff;
	text-align: center;
	font-family: "Courier New", Monospace;
	font-style: italic;
	font-size: 40px;
	
}

font{
	font-size: 15px;
	text-align: center;
	color: #663300;
	
}
/*table {
	border: 1px solid rgba(150,100,0,1);
}*/
th,td {
	text-align: center;
	padding: 7px;
	border-bottom: 1px solid rgba(100,100,55,1);
}
th {
	background-color: #6f6fdc
}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color:#adadeb;}

input[type=submit]{
    background-color: white; /* Green */
    border: none;
	/*border-color: #1a75ff;*/
    color:  #006600;
    padding: 15px 32px;
   text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	cursor: pointer;
	height: 50px;
	width: 140px;
}
</style>
</head>

<body> 
<h1> EXPLORE! </h1>

<form action="index.php" method="post">
<input type="submit" name="submit" value="Back to Menu">
</form>
<br>

<?php
require 'login.php';

//$servername = "localhost";
//$username = "newuser";
//$password = "password";
//$database = "itrans";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
    mysqli_set_charset($conn, 'utf8');
    //mysqli_query($conn, $sql);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//select itrans
$check = mysqli_select_db($conn,$database);

// check selection
if(!$check) {
   die("connection to database failed: " . mysqli_error($conn)); 
}
/*
echo "<table width='100%'>";
echo "<th>";
echo "<td><form method='post' action='look.php'>
<input type='text' name='sitrans'>
<input type='submit' value='Search in ITRANS'>
</form></td>";
echo "<td><form method='post' action='look.php'>
<input type='text' name='seng'>
<input type='submit' value='Search In English'>
</form></td>";
echo "</th>";
echo "</table>";*/

echo "<div style='position:absolute;left:10px;top:160px;'>
<form method='post' action='look.php'>
<input type='text' name='sitrans'>
<input type='submit' value='Search ITRANS!' style='background-color:#4caf50;height: 30px;padding: 0px 0px;'>
</form></div>";
echo "<div style='position: absolute; left: 400px;top: 160px;'>
<form method='post' action='look.php'>
<input type='text' name='seng'>
<input type='submit' value='Search ENG' style='background-color:#4caf50;height: 30px;padding: 0px 0px;''>
</form>
</div>";

if(isset($_POST['sitrans']))
{   $nvar = $_POST['sitrans'];$check = 0;
	$query1 = "SELECT * FROM words WHERE ITRANS LIKE '%$nvar%'";
}

else if(isset($_POST['seng']))
{   $nvar = $_POST['seng'];$check = 0;
	$query1 = "SELECT * FROM words WHERE English LIKE '%$nvar%'";
}
else{
$query1 = "SELECT * FROM words";
}

$result1 = $conn->query($query1);

$rows_check = $result1->num_rows;
//echo "rows check is: $rows_check";

if($rows_check == 0){
	echo "<br>";
	echo "<br>";
	 echo "<div style='position: absolute; right: 50%;'><pre><form method='post' action='look.php'>
<strong>No Results Found. </strong><input type='submit' value='Return'>
	</form></pre></div>";
}
/*echo '<div style="position:fixed; left:400px; top:150px;">';*/
else{
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo '<table>';
echo '<tr>';
echo  '<th>ITRANS</th>';
echo  '<th>English</th>';
echo  '<th>Example in English</th>';
echo  '<th>Example in Hindi</th>';
echo '</tr>';
while($rows = $result1->fetch_assoc())
{
echo '<tr>';
echo '<td>';
echo $rows["ITRANS"];
echo '</td>';
echo '<td>';
echo $rows["English"];
echo '</td>';
echo '<td>';
echo $rows["Example_e"];
echo '</td>';
echo '<td>';
echo $rows["Example_h"];
echo '</td>';
echo '</tr>';

/*echo '<font>In ITRANS:  </font>' . $rows["ITRANS"] . '<br>';
echo '<font>In English :  </font>' . $rows["English"] . '<br>';
echo '<font>Example :  </font>' . $rows["Example"] . '<br>';
echo '<br>';
/*echo '
<form action = "del1.php" method = "post">
<input type="hidden" name="delete" value="'.$temp.'">
<input type="submit" value="delete record" name="submit">

</form>
<br> ' ;
echo "--------------------------------------------------------------------------------------- <br>";*/
}
echo '</table>';
/*echo '</div>';*/

}


$conn->close();
?> 
<br>
<form action="index.php" method="post">
<input type="submit" name="submit" value="Back to Menu" style="position: fixed;bottom:0px">
</form>
<br>
</body>
</html>

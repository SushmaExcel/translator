

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

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

$tab_query = "CREATE TABLE IF NOT EXISTS add_sugg(
           ITRANS VARCHAR(40),English VARCHAR(40), Example_e VARCHAR(170),
           Example_h VARCHAR(170),  id INT UNSIGNED NOT NULL AUTO_INCREMENT KEY)";

mysqli_query($conn,$tab_query);

if(isset($_POST['submit']))

{
	if(isset($_POST['ITRANS']) && isset($_POST['English']) && isset($_POST['Example_e']) && isset($_POST['Example_h']))
	{
		$itrans = $_POST['ITRANS'];
		$eng = $_POST['English'];
		$ege = $_POST['Example_e'];
		$egh = $_POST['Example_h'];
		//echo "came";
		echo "$itrans";

		$query = "INSERT INTO add_sugg(ITRANS,English,Example_e,Example_h) VALUES" . "('$itrans','$eng','$ege','$egh');";
		$added = 0;
		if(!mysqli_query($conn,$query))
		{ echo "Insert failed :" . mysqli_error($conn) . "<br>" ; }
	else{
		$added = 1;
		echo "<script type='text/javascript'>alert('Thank you!');</script>";
	}

	} else { echo "all details are required" ; }

}


$conn->close();
header("location: add.php");

?> 

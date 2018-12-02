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
if(isset($_POST['submit']))

{		
		$name = $_POST["delete"]; 
		
		
		$query = "DELETE FROM words WHERE ITRANS='$name'";
		
		if(!mysqli_query($conn,$query))
		{ echo "delete failed :" . mysqli_error($conn) . "<br>" ; } 
		else { echo "deleted successfully"; }
	
}






$conn->close();
header("location: del.php");

?> 

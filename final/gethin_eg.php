<?php

//this is for from "eng" text one.

//echo "came";
$q_eg = $_GET["q"];
//echo $q_eg;
$db = 'etoh';
$con = mysqli_connect('localhost', 'root','',$db);
mysqli_set_charset($con, 'utf8');
if(!$con){
	//echo "Not possible"
    die("Could not connnect: ".mysqli_error($con));
}

$query = "SELECT Example_h FROM words WHERE ITRANS='$q_eg'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result)){
	echo $row['Example_h'];
}

mysqli_close($con);

?>
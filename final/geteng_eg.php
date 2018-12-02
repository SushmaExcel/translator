<?php

//this is for id = "eng" one.
//echo "came";
$q_eg = $_GET["q"];
//echo $q_eg;
$db = 'etoh';
$con = mysqli_connect('localhost', 'root','',$db);
if(!$con){
	//echo "Not possible"
    die("Could not connnect: ".mysqli_error($con));
}

$query = "SELECT Example_e FROM words WHERE ITRANS='$q_eg'";
$result = mysqli_query($con, $query);

while($row = mysqli_fetch_array($result)){
	echo $row['Example_e'];
}

mysqli_close($con);

?>
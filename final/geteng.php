<?php

$q_h = ($_GET['q']);
$db = 'etoh';
$con = mysqli_connect('localhost', 'root', '', $db);
if(!$con){
	echo "Not possible";
	die('Could not connect: '.mysqli_error($con));
}

$sql = "SELECT English FROM words WHERE ITRANS='$q_h'";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)){
	echo $row['English'];
}

mysqli_close($con);
?>
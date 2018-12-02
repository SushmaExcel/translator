<?php
//echo "came in php";

$q = ($_GET['q']);
$db = 'etoh';
$con = mysqli_connect('localhost','root','',$db);
if (!$con) {
    echo "not possible";
    die('Could not connect: ' . mysqli_error($con));
}

//mysqli_select_db($con,"words1");
$sql="SELECT ITRANS FROM words WHERE English='$q'";
$result = mysqli_query($con,$sql);

/*echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";*/
//echo "q is $q";
while($row = mysqli_fetch_array($result)) {
   /*echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "<td>" . $row['Hometown'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";*/
    echo $row['ITRANS'];
}
//echo "</table>";
mysqli_close($con);
?>
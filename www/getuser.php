<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','nearby');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"nearby");
$sql="SELECT * FROM nearby WHERE adminid = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Username</th>
<th>Admin ID</th>
<th>Phone</th>
</tr>";
if($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['adminid'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
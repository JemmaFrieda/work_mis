<?php
include 'connection.php';
$sql = "SELECT * FROM studentmgt";
$result = $con->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr>
        <th>Student ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Department</th>
    </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
<td>".$row["studid"]."</td>
<td>".$row["username"]."</td>
<td>".$row["password"]."</td>
<td>".$row["firstname"]."</td>
<td>".$row["lastname"]."</td>
<td>".$row["department"]."</td>
</tr>";
    }
    echo "</table>";}
    else {
    echo "No data";
}
$con->close();
?>
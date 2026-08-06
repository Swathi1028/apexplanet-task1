<?php

include "connect.php";

$sql = "SELECT * FROM contact";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Page</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
    padding:30px;
}

h2{
    text-align:center;
    color:#0d6efd;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th{
    background:#0d6efd;
    color:white;
}

th,td{
    padding:12px;
    border:1px solid #ccc;
    text-align:center;
}

tr:hover{
    background:#f1f1f1;
}

</style>

</head>


<body>

<h2>Contact Messages</h2>


<table>

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
</tr>


<?php

if(mysqli_num_rows($result)>0)
{

while($row=mysqli_fetch_assoc($result))
{

?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['message']; ?></td>

</tr>


<?php

}

}
else
{

echo "<tr><td colspan='4'>No Messages Found</td></tr>";

}

?>


</table>


</body>
</html>
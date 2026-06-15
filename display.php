<?php

include "connect.php";

$sql = "SELECT * FROM student";

$stmt = $conn->prepare($sql);

$stmt->execute();

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<table border="1">

<tr>
    <th>Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Age</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php foreach($students as $row){ ?>

<tr>

<td><?php echo $row['user_name']; ?></td>

<td><?php echo $row['last_name']; ?></td>

<td><?php echo $row['Email']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td><?php echo $row['age']; ?></td>

<td>
<a href="edit.php?user_name=<?php echo $row['user_name']; ?>">
Edit
</a>
</td>

<td>
<a href="delete.php?id=<?php echo $row['id']; ?>">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>
<?php
include("../config/database.php");

$users = mysqli_query($conn,"SELECT * FROM users");
?>

<!DOCTYPE html>
<html>
<head>

<title>Users</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="p-5">

<h2>Users</h2>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php while($row = mysqli_fetch_assoc($users)){ ?>

<tr>
<td><?php echo $row['user_id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
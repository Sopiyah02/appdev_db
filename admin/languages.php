<?php
include("../config/database.php");

$lang = mysqli_query($conn,"SELECT * FROM languages");
?>

<!DOCTYPE html>
<html>
<head>

<title>Languages</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="p-5">

<h2>Languages</h2>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Language</th>
</tr>

<?php while($row = mysqli_fetch_assoc($lang)){ ?>

<tr>
<td><?php echo $row['language_id']; ?></td>
<td><?php echo $row['language_name']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
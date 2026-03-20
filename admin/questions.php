<?php
include("../config/database.php");

$result = mysqli_query($conn,"
SELECT q.question_id, q.question_text, l.language_name
FROM questions q
JOIN languages l ON q.language_id = l.language_id
");
?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Questions</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="p-5">

<h2>Manage Questions</h2>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Language</th>
<th>Question</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>
<td><?php echo $row['question_id']; ?></td>
<td><?php echo $row['language_name']; ?></td>
<td><?php echo $row['question_text']; ?></td>
</tr>

<?php } ?>

</table>

</body>
</html>
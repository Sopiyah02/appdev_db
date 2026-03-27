<?php
include("../config/database.php");
session_start();

$username = $_SESSION['username'] ?? "User";
$user_id = $_SESSION['user_id'] ?? 1;

// Example: get user email if you store it
$user = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM users WHERE user_id = $user_id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: #ffe6f0;
    font-family: 'Segoe UI', sans-serif;
}
.sidebar {
    height: 100vh;
    width: 240px;
    background: #fff0f6;
    position: fixed;
    padding: 20px;
    border-right: 1px solid #ffc0cb;
}
.sidebar h4 { color: #d63384; font-weight: 700; margin-bottom: 30px; }
.sidebar a { display:flex; align-items:center; padding:12px; border-radius:10px; color:#6b7280; text-decoration:none; margin-bottom:10px; transition:0.3s; }
.sidebar a:hover { background:#ffd6e8; color:#d63384; }
.sidebar a i { margin-right:10px; }
.content { margin-left:260px; padding:30px; }
.card-custom { background:#fff; border-radius:16px; padding:20px; box-shadow:0 8px 20px rgba(0,0,0,0.05); }
</style>
</head>
<body>

<div class="sidebar">
    <h4>USER</h4>
    <a href="dashboard.php"><i class="bi bi-house"></i> Dashboard</a>
    <a href="questions.php"><i class="bi bi-question-circle"></i> View Questions</a>
    <a href="my_answers.php"><i class="bi bi-chat-left-text"></i> My Answers</a>
    <a href="profile.php"><i class="bi bi-person"></i> Profile</a>
    <a href="../logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<div class="content">
    <h3>My Profile 👤</h3>
    <div class="row g-4 mt-3">
        <div class="col-md-6">
            <div class="card-custom">
                <p><strong>Username:</strong> <?php echo $username; ?></p>
                <p><strong>Email:</strong> <?php echo $user['email'] ?? 'Not set'; ?></p>
                <p><strong>User ID:</strong> <?php echo $user_id; ?></p>
                <a href="edit_profile.php" class="btn btn-primary mt-2">Edit Profile</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>
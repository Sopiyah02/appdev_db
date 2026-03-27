<?php
include("../config/database.php");
session_start();

// OPTIONAL: get logged in user name
$username = $_SESSION['username'] ?? "User";

// Example user-specific queries (adjust if needed)
$questions = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM questions"));
$languages = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM languages"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: #f5f7fb;
    font-family: 'Segoe UI', sans-serif;
}

.sidebar {
    height: 100vh;
    width: 240px;
    background: #ffffff;
    position: fixed;
    padding: 20px;
    border-right: 1px solid #e5e7eb;
}

.sidebar h4 {
    font-weight: 700;
    margin-bottom: 30px;
}

.sidebar a {
    display: flex;
    align-items: center;
    padding: 12px;
    border-radius: 10px;
    color: #6b7280;
    text-decoration: none;
    margin-bottom: 10px;
    transition: 0.3s;
}

.sidebar a:hover {
    background: #f3f4f6;
    color: #111827;
}

.sidebar a i {
    margin-right: 10px;
}

.content {
    margin-left: 260px;
    padding: 30px;
}

.card-custom {
    background: #fff;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

.card-dark {
    background: linear-gradient(135deg, #ce77c2, #1e40af);
    color: #ba31be;
}

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

    <h3>Welcome, <?php echo $username; ?> 👋</h3>
    <p class="text-muted">Here’s your activity overview</p>

    <div class="row g-4 mt-3">

        <div class="col-md-6">
            <div class="card-custom card-dark">
                <p>Total Questions Available</p>
                <h2><?php echo $questions['total']; ?></h2>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card-custom">
                <p>Languages Available</p>
                <h2><?php echo $languages['total']; ?></h2>
            </div>
        </div>

    </div>

    <div class="mt-4">
        <div class="card-custom">
            <h5>Quick Actions</h5>
            <div class="mt-3">
                <a href="questions.php" class="btn btn-primary me-2">Answer Questions</a>
                <a href="profile.php" class="btn btn-outline-secondary">View Profile</a>
            </div>
        </div>
    </div>

</div>

</body>
</html>
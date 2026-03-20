<?php
include("../config/database.php");

$users = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM users"));
$questions = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM questions"));
$languages = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM languages"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<style>
body {
    background: #eef2f7;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}


.sidebar {
    height: 100vh;
    width: 220px;
    background: #1f2937; 
    position: fixed;
    padding-top: 20px;
    transition: width 0.3s;
}

.sidebar h4 {
    color: #fff;
    margin-bottom: 30px;
    font-weight: 700;
    letter-spacing: 1px;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    padding: 12px 20px;
    text-decoration: none;
    font-size: 1rem;
    transition: 0.3s;
    border-radius: 8px;
    margin: 2px 10px;
}

.sidebar a i {
    margin-right: 12px;
    font-size: 1.2rem;
}

.sidebar a:hover {
    background: #374151;
    color: #fff;
}

/* Content */
.content {
    margin-left: 240px;
    padding: 30px;
}

h2 {
    margin-bottom: 30px;
    font-weight: 700;
    color: #111827;
}

/* Dashboard cards */
.card {
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0,0,0,0.08);
    transition: transform 0.3s, box-shadow 0.3s;
    color: #fff;
}

.card:hover {
    transform: translateY(-7px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
}

.card h4 {
    font-weight: 600;
    margin-bottom: 15px;
}

.card h2 {
    font-weight: 700;
    font-size: 2.5rem;
}

/* Gradient cards */
.bg-primary {
    background: linear-gradient(135deg, #3b82f6, #60a5fa);
}

.bg-success {
    background: linear-gradient(135deg, #10b981, #34d399);
}

.bg-warning {
    background: linear-gradient(135deg, #f59e0b, #fbbf24);
}

/* Responsive */
@media (max-width: 768px) {
    .sidebar {
        width: 100%;
        height: auto;
        position: relative;
    }
    .content {
        margin-left: 0;
    }
}
</style>
</head>
<body>

<div class="sidebar d-flex flex-column align-items-start">
    <h4 class="text-center w-100">ADMIN</h4>
    <a href="questions.php"><i class="bi bi-question-circle"></i> Manage Questions</a>
    <a href="languages.php"><i class="bi bi-translate"></i> Languages</a>
    <a href="users.php"><i class="bi bi-people"></i> Users</a>
    <a href="../logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<div class="content">
    <h2>Dashboard</h2>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card p-4 bg-primary">
                <h4><i class="bi bi-people"></i> Total Users</h4>
                <h2><?php echo $users['total']; ?></h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 bg-success">
                <h4><i class="bi bi-question-circle"></i> Total Questions</h4>
                <h2><?php echo $questions['total']; ?></h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card p-4 bg-warning">
                <h4><i class="bi bi-translate"></i> Total Languages</h4>
                <h2><?php echo $languages['total']; ?></h2>
            </div>
        </div>

    </div>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flashcard System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #f5f7fb;
    font-family: 'Segoe UI', sans-serif;
}

.hero {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.card-home {
    background: #fff;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.05);
    text-align: center;
}

.btn-dark-custom {
    background: linear-gradient(135deg, #111827, #374151);
    color: #fff;
    border-radius: 10px;
}
</style>
</head>

<body>

<div class="hero">
    <div class="card-home">
        <h2 class="mb-3">Flashcard Learning System</h2>
        <p class="text-muted">Practice programming with interactive flashcards</p>

        <div class="mt-4">
            <a href="auth/login.php" class="btn btn-dark-custom w-100 mb-2">Login</a>
            <a href="auth/register.php" class="btn btn-outline-dark w-100">Create Account</a>
        </div>
    </div>
</div>

</body>
</html>
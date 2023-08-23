<?php
session_start();

if (isset($_SESSION['generated_password'])) {
    $generatedPassword = $_SESSION['generated_password'];
}

// Includi il percorso corretto del file functions.php
include('./includes/functions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            height: 100%;
        }
        .center-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .container {
            border-radius: 20px;
            padding: 50px;
        }
    </style>
</head>
<body>
    <main class="center-container">
        <div class="container text-center bg-primary text-white fs-1">
            <h1>Password Generata</h1>
            <p>La tua password generata è: <?php echo $generatedPassword; ?></p>
        </div>
    </main>
    
</body>
</html>

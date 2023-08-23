<?php
session_start();

include('./includes/functions.php');

if (isset($_GET['length'])) {
    $passwordLength = intval($_GET['length']);
    $generatedPassword = generateRandomPassword($passwordLength);

    // Memorizza la password nella sessione
    $_SESSION['generated_password'] = $generatedPassword;

    // Effettua il reindirizzamento alla pagina dedicata
    header('Location: password.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
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
            <h1>Generatore di Password Sicure</h1>

            <form action="index.php" method="get" class="d-flex flex-column align-items-center">
                <label class="fs-3" for="length">Lunghezza della Password:</label>
                <input class="fs-5" type="number" name="length" id="length" min="8" max="32" required>
                <button class="mt-2 fs-2 btn btn-success" type="submit">Genera Password</button>
            </form>
        </div>
    </main>
</body>
</html>

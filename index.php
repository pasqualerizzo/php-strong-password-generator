<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore di Password</title>
</head>
<body>
    <h1>Generatore di Password Sicure</h1>

    <?php
    // Includi il file functions.php dalla cartella includes
    include('./includes/functions.php');

    // Verifica se è stata inviata la richiesta di generare una password
    if (isset($_GET['length'])) {
        $passwordLength = intval($_GET['length']);
        $generatedPassword = generateRandomPassword($passwordLength);
    }
    ?>

    <form action="index.php" method="get">
        <label for="length">Lunghezza della Password:</label>
        <input type="number" name="length" id="length" min="8" max="32" required>
        <button type="submit">Genera Password</button>
    </form>

    <?php if (isset($generatedPassword)): ?>
        <h2>Password Generata:</h2>
        <p><?php echo $generatedPassword; ?></p>
    <?php endif; ?>
</body>
</html>

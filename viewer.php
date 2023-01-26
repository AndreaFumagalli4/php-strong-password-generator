<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viewer</title>
</head>
<body>
    <header>
        <h1>
            New password
        </h1>
    </header>
    <main>
        <p>
            La tua nuova password è: 
            <?php
            echo $_SESSION['newPassword'];
            ?>
        </p>
    </main>
</body>
</html>
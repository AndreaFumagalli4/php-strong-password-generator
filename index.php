<?php
    session_start();
    include_once __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stronger Password Generator</title>
    </head>
    <body>
        <header>
            <h1>
                Password generator
            </h1>
        </header>
        <main>
            <form action="./index.php" method="GET">
                <label for="character">
                    Inserisci il numero di caratteri che avrà la password
                </label>
                <input type="text" name="character">
                <button type="submit">Invia</button>
            </form>
            <?php
                if ((isset($_GET["character"])) && ($_GET["character"])){
                    // echo "<p>";
                    // echo "La tua nuova password è: ";
                    // echo getRandomPassword(intval($_GET["character"]));
                    // echo "</p>";
                    $newPassword = getRandomPassword(intval($_GET["character"]));
                    $_SESSION['newPassword'] = $newPassword;
                    header("location: ./viewer.php");
                }
            ?>
        </main>
    </body>
</html>
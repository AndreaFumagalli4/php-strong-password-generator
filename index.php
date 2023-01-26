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
                function getRandomPassword($passwordLength) {
                    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!"$%&=?;:_-.,';
                    $randomPassword = '';
                    for ($i = 0; $i < $passwordLength; $i++){
                        $randomPassword .= $characters[rand(0, (strlen($characters) - 1))];
                    }
                    return $randomPassword;
                }
                echo getRandomPassword(intval($_GET["character"]));
            ?>
        </main>
    </body>
</html>
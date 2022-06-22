<?php

$word = 'Ciao mi chiamo andii';

$parola_censurata = $_GET['word'];

$word_modificata = str_replace($parola_censurata, '***', $word);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="word">
        <button type="submit">censura</button>
    </form>
    <h1>Lunghezza originale:<h1><p><?php echo $word; ?></p>
    <h1>Lunghezza censurata:<h1><p><?php echo $word_modificata; ?></p>
</body>
</html>
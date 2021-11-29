<!-- Inizio PHP -->
<?php

$name = "";
$mail = "";
$age = "";

if (!array_key_exists("name", $_GET) || strlen(trim($_GET['name'])) === 0) {
    exit("Nessun nome inserito");
} elseif (strlen(trim($_GET['name'])) < 3) {
    exit("Lunghezza minima nome: 3 caratteri");
} else {
    $name = $_GET["name"];
}

if (!array_key_exists("mail", $_GET) || strlen(trim($_GET['mail'])) === 0) {
    exit("Nessuna mail inserita");
} elseif (!strchr($_GET["mail"], ".") || !strchr($_GET["mail"], "@")) {
    exit('La mail deve contenere un "." e una "@"');
} else {
    $mail = $_GET["mail"];
}

if (!array_key_exists("age", $_GET) || strlen(trim($_GET['age'])) === 0) {
    exit("Nessuna età inserita");
} elseif (!is_numeric($_GET['age'])) {
    exit("L'età inserita non è un numero");
} else {
    $age = $_GET["age"];
}


?>
<!-- Fine PHP -->

<!-- Inizio HTML -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validator</title>
</head>

<body>
    <h2>Nome: <?php echo $name ?></h2>
    <h2>Mail: <?php echo $mail ?></h2>
    <h2>Età: <?php echo $age ?> anni</h2>
</body>

</html>
<!-- Fine HTML -->
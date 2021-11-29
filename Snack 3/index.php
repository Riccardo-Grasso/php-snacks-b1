<?php
$array = [];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2> 15 numeri random:
        <?php
        while (count($array) < 15) {
            $numeroRandom = rand(1, 100);
            if (!in_array($numeroRandom, $array)) {
                $array[] = $numeroRandom;
            }
        }
        for ($i = 0; $i < count($array); $i++) {
            echo $array[$i] . " ";
        }
        ?>
    </h2>

</body>

</html>
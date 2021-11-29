<?php

$posts = [

    '10-01-2021' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele ',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Giulia',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2021' => [
        [
            'title' => 'Post 3',
            'author' => 'Paolo',
            'text' => 'Testo post 3'
        ]
    ],
    '15-05-2021' => [
        [
            'title' => 'Post 4',
            'author' => 'Sara',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Sara',
            'text' => 'Testo post 5'
        ],
    ],
];

?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date e post</title>
</head>

<body>
    <ul>
        <?php
        $chiavi = array_keys($posts);

        for ($i = 0; $i < count($chiavi); $i++) {
            $data = $chiavi[$i];
            $post = $posts[$data];
            echo "<hr>$data<br> <br>";
            for ($j = 0; $j < count($post); $j++) {
                $title = $post[$j]["title"];
                $author = $post[$j]["author"];
                $text = $post[$j]["text"];

                echo "
                    <li>
                       <strong>Titolo:</strong> $title
                    </li>
                    <li>
                       <strong>Autore:</strong> $author
                    </li>
                    <li>
                       <strong>Testo:</strong> $text 
                    </li>
                    <br><br>
                ";
            }
        }
        ?>
    </ul>
</body>

</html>
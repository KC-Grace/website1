<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    salut les gens
    <?php
    $name = 'Grace';
    echo $name;

    $furnitures = [
        [
            'type' => 'chair',
            'height' => [14, 16, 18, 20],
            'price' => [20, 40, 50, 80],
        ],
        [
            'type' => 'table',
            'height' => [18, 20, 22, 24],
            'price' => [40, 60, 90, 110],
        ]
    ];

    var_dump($furnitures);

    ?>
</body>

</html>
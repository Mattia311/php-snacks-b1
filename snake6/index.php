<?php
/*Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.*/
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            max-width: 800px;
            margin: auto;
        }
        .teacher{
            background-color: grey;
            padding: 20px;
            color:white;
        }
        .pm{
            padding: 20px;
            background-color:green;
            color:white;
        }
    </style>
</head>
<body>
<div class="teacher">
    <ul>
        <?php foreach($db["teachers"] as $teacher) { ?>
            <li>
                <?php echo "{$teacher["name"]} {$teacher["lastname"]}"; ?>
            </li>
        <?php }?>
    </ul>
</div>
<div class="pm">
    <ul>
        <?php foreach($db["pm"] as $pm) { ?>
            <li>
                <?php echo "{$pm["name"]} {$pm["lastname"]}"; ?>
            </li>
        <?php }?>
    </ul>
    </div>
    
</body>
</html>
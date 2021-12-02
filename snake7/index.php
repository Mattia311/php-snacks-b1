<?php
/*Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/
$alunni = [
    [
        "nome" => "Mattia",
        "cognome" => "Villani",
        "voti" => ["8,5,6,3,2"]

    ],
    [
        "nome" => "Luca ",
        "cognome" => "Tortello",
        "voti" => ["9,1,5,5,3"]

    ],
    [
        "nome" => "Alex",
        "cognome" => "Corvo",
        "voti" => ["2,3,5,6,8"]

    ],
    [
        "nome" => "Miriam",
        "cognome" => "Leuci",
        "voti" => ["8,4,3,2,9"]

    ],
];
function calcolaMedia($nums) {
    $qt = count($nums);
    $res = 0;
    foreach ($nums as $n) {
      $res += $n;
    }
    return $res/$qt;
}


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
    <h1>Lista studenti</h1>
    <ul>
        <?php foreach ($alunni as $alunno) {?>
            <h2>Alunno</h2>
            <li>
                Nome studente:<?php echo"{$alunno["nome"]} {$alunno["cognome"]}";?>
            </li>
            <li>Media voti studente <?php echo calcolaMedia($alunno["voti"])?></li>
        <?php }?>
    </ul>
    
</body>
</html>
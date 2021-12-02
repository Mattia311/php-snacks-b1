<?php
/*Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

// var_dump($name . $mail . $age);
echo 'mui';

if(strlen($name) >= 4 && strpos($mail,"@") && strpos($mail,".") && is_numeric($age)){
    $result ="Accesso riuscito";
}else{
    $result ="Accesso negato";
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
    <form action="./index.php" method= 'get'>
        <label for="name">name </label>
        <input type="text" name='name' id='name'>

        <label for="mail">Email </label>
        <input type="text" name='mail' id='mail'>

        <label for="age">age </label>
        <input type="text" name='age' id='age'>

        <input type="submit" value="Invia" />
    </form>
    <h1><?php echo $result ?></h1>
    
</body>
</html>
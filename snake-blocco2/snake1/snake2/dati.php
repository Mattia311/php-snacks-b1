<?php

$invito = $_GET['invito'];

$invitati = [
    'mattia',
    'Luca',
    'Michele',
    'Lucia',
];
foreach($invitati as $invitato) {
    if ($invito === $invitato) {
        echo 'ok';
        
    }else {
        echo ' ko';
    }
}



?>
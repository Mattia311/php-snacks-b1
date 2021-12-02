<?php
$partite = [
    [
        "casa" => "Varese",
        "ospite" => "Reggiana",
        "puntiCasa" => "50",
        "puntiOspite" => "89"
    ],
    [
        "casa" => "Juvecaserta",
        "ospite" => "Milano",
        "puntiCasa" => "20",
        "puntiOspite" => "90"
    ],
    [
        "casa" => "Trieste",
        "ospite" => "Petrarca",
        "puntiCasa" => "40",
        "puntiOspite" => "80"
    ],
    [
        "casa" => "Partenope",
        "ospite" => "Lazio",
        "puntiCasa" => "30",
        "puntiOspite" => "90"
    ]
];

for($i=0; $i < count($partite); $i++){
    echo $partite[$i]["casa"] . " - " . $partite[$i]["ospite"] . " | " .  $partite[$i]["puntiCasa"] . " - " . $partite[$i]["puntiOspite"];
}

?>
<?php

function valider_mot_de_passe($mot_de_passe) {
    
    if (strlen($mot_de_passe) < 6 || strlen($mot_de_passe) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

   
    $salt = "ABC1234@";

   
    $mot_de_passe_salt = $mot_de_passe . $salt;

    
    $mot_de_passe_chiffre = hash('sha256', $mot_de_passe_salt);

   
    echo "Mot de passe chiffré : $mot_de_passe_chiffre<br>";
    echo "Salt : $salt<br>";

    
    $mot_de_passe_test = "abcdef"; 

    if (hash('sha256', $mot_de_passe_test . $salt) == $mot_de_passe_chiffre) {
        return "Mot de passe correct !";
    } else {
        return "Mot de passe incorrect.";
    }
}
function mdplength_isvalid($mot_de_passe){
   
    $length=str($mdplength_isvalid);
    $responses=[
        'isvalid'=>true,
        'msg'=>'',
    ];
    if ($length<2) {
        $responses=[
            'isvalid'=>true,
            'msg'=>'trop court',
        ];
    }
    elseif ($length>10) {
        $responses=[
            'isvalid'=>true,
            'msg'=>'trop long',
        ];
 }
 return $responses;
}



?>

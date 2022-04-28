<?php


require_once '../Public/modeleville.php';

$uneVille = new ModeleVille();

if (filter_input(INPUT_SERVER, 'REQUEST_METHOD') == 'GET') {
    $action = filter_input(INPUT_GET, "action");
    switch ($action) {
        case 'remplirVilles':       
            $codePostal = filter_input(INPUT_GET, 'codePostal');
            if (isset($codePostal)) {
                 echo $uneVille->ObtenirVilles($codePostal);
            }
            break;
    }
}


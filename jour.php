<?php

$jour = $_POST['chiffre'];

switch ($jour) {
    case '1':
        echo "Lundi";
        break;
    case '2':
        echo "Mardi";
        break;
    case '3':
        echo "Mercredi";
        break;

    case '4':
        echo "Jeudi";
        break;

    case '5':
        echo "vendredi";
        break;

    case '6':
        echo "Samedi";
        break;

    case '7':
        echo "Dimance";
        break;
    default:
        echo $jour;
        break;
}
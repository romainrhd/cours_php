<?php
    $plateforme = 'PS4';
        
    switch($plateforme){
        case 'PC':
            echo 'Vous achetez un PC';
            break;
        case 'PS4':
            echo 'Vous achetez une PS4';
            break;
        case 'Xbox One':
            echo 'Vous achetez une Xbox One';
            break;
        case 'Switch':
            echo 'Vous achetez une Nintendo Switch';
            break;
        default:
            echo 'Vous n\'achetez aucune plateforme de jeu';
            break;
        }
?>
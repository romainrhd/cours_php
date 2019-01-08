<?php

$age = 18;
$ville = "Rouen";
if( ($age >= 18 && $ville == "Rouen") || ($age >= 17 && $ville == "Rouen") ){
    echo "Vous avez le droit de voter à Rouen";
} else {
    echo "Vous n'avez pas le droit de voter à Rouen";
}

?>
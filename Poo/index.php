<?php

require_once 'Personnage.php';
require_once 'Nain.php';

$gimli = new Nain('Gimli', '0', '4', '10');

$gimli->soigner(100);

var_dump($gimli);
<!--
File: calc.php
Author: Bognár Dávid
Copyright: 2022, Bognár Dávid
Group: Szoft I/N
Date: 2022-05-26
Github: https://github.com/BognarDavidMark/
Licenc: GNU GPL
-->

<?php

echo file_get_contents('templates/head.html');

$page = file_get_contents('templates/calc.html');

function calc($aSide, $bSide) {
    
    $terfogat = (4*M_PI)/3*(pow($aSide,2)*$bSide);

    return $terfogat;
}
    if(!empty($_GET['aSide']) and !empty($_GET['bSide'])) {
        $aSide = $_GET['aSide'];
        $bSide = $_GET['bSide'];
        $terfogat = calc($aSide, $bSide);
    }else{
        $terfogat = 'Hiba!';
    } 

    $terfogat = calc($aSide, $bSide);
    $page = str_replace('{{result}}', $terfogat, $page);

    echo $page;
    echo file_get_contents('templates/foot.html');
?>

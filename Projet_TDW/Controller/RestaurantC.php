<?php


require_once('/model/RestoM.php');

function pageRestaurant(){
    $rep=getRepas();
    require('/vue/Restaurant.php');
}
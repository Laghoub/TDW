<?php


require_once('/model/RestoM.php');

function pageResto(){
    $rep=getRepas();
    require('/vue/Resto.php');
}
function addRepas($jour, $principale, $secondaire, $dessert, $boisson)
{

    $affectedLines = postRepas($jour, $principale, $secondaire, $dessert, $boisson);


    if ($affectedLines === false) {
        header('Location: /resto?danger= Le repas de cette jouenée éxiste, supprimez le puis réintroduiser un repas !');
    }
    else {
        header('Location: /resto?success= Votre repas a été bien crée !');
    }
}

function deleteR($jour){
    $affectedLines = deleteRepas($jour); 
}


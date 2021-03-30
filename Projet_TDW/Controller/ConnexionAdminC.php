<?php

require_once('/model/AuthM.php');
function pageAuth(){

    require('/vue/ConnexionAdmin.php');
}

function pageAuthE(){

  require('/vue/ConnexionEtudiant.php');
}

function pageAuthP(){

  require('/vue/ConnexionParent.php');
}



function verifyAuth($user,$pwd)
{
    session_start();
    $affectedLines =auth($user,$pwd);
    if(count($affectedLines)>0){
      $_SESSION["user"] = $_POST["user"];
		  header("location:/admin");
      }
      else{
        header('Location: /auth?success=Informations incorrectes ! vérifier que vous avez taper le bon login ou mot de passe');
      }

    
}

function verifyAuthE($user,$pwd)
{
    session_start();
    $affectedLines =authE($user,$pwd);
    if(count($affectedLines)>0){
      $_SESSION["useretud"] = $_POST["useretud"];
		  header("location:/etudiantconnect?log={$user}");
      }
      else{
        header('Location: /authE?success=Informations incorrectes ! vérifier que vous avez taper le bon login ou mot de passe');
      }

    
}

function verifyAuthP($user,$pwd)
{
    session_start();
    $affectedLines =authP($user,$pwd);
    if(count($affectedLines)>0){
      $_SESSION["useretud"] = $_POST["useretud"];
		  header("location:/parentconnect?log={$user}");
      }
      else{
        header('Location: /authP?success=Informations incorrectes ! vérifier que vous avez taper le bon login ou mot de passe');
      }

    
}

?>
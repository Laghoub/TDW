<?
class Accueil{


    public function entete(){
?>        
    <head>
        <title>Restauration</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
        
        
    </head>

    <body style="margin: 5%">
    
    </body>
    <?
    }
    public function menu(){
        ?>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/presentation">présentation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/primaire">primaire</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/moyen">moyen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/secondaire">secondaire</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="/authE">Eleve</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/authP">Parent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/contactus">Contact</a>
      </li>
    </ul>
   
  </div>
</nav>
<br>
<br>
        
<?
    }

   
    private function menuRepas(){

        ?>
        
    <div class="container-fluid2">
        <div class="container">
    <div class="col-sm-12">
        <div class="card" >
        <div class="card-body">
        <div class="row">
        <div class="col-md-4" >
            <img  class="logo" src="/images/resto.png" WIDTH=250 HEIGHT=220 >
            </div>
            <div class="col-md-6" >
            <h1>Bienvenus au restaurant de l'école</h1>
            <p>Le service de restauration scolaire fonctionne pendant les périodes scolaires de 11h45 à 13h20.
Il débute le premier jour de la rentrée scolaire et se termine le dernier jour de classe. <br>
Le prix du ticket de cantine est fixé chaque année par délibération du Conseil Municipal de la
Commune</p>
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      </div>
          
          
        </div>
      </div>
      </div>
        <br>
        <div class="container-fluid2">
        <h1>Repas de la semaine </h1>
    </div>
    <br>
        <div class="container-fluid2">
        <div class="container">
        <div class="row">
            <?php
            
        
        foreach ($rep as $form):
        ?>
        <div class="col-sm-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body">
        <div class="badge bg-primary text-wrap" style="width: 6rem; ">
        <?= $form['jour'] ?>      
        </div>
        <br>
        <br>
          <h5 class="card-text">Plat principale: <span style="color: blue"><?= $form['plat_principale'] ?></span> </h5>
          <h5 class="card-text">Plat secondaire: <span style="color: blue"><?= $form['plat_secondaire'] ?></span> </h5>
          <h5 class="card-text">Déssert:<span style="color: blue"> <?= $form['dessert'] ?></span> </h5>
          <h5 class="card-text">Boisson: <span style="color: blue"><?= $form['boisson'] ?></span> </h5>
          
          
          
        </div>
      </div>
      </div>
            
        <?php endforeach; ?>
        </div>
        </div>
        </div>
        <?
    }

    ?>
    
<?
class Accueil{


    public function entete(){
?>        
    <head>
        <title>Enseignant-Primaire</title>
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

    public function menuensp(){
        ?>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
 

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/accueil">Accueil <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="#">Eleve</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Parent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
   
  </div>
</nav>
    <?
    }

    private function entetepage(){
    ?>
    <br>
    <br>
    <div class="container-fluid2">
        <div class="container">
    <div class="col-sm-12">
        <div class="card" >
        <div class="card-body">
        <div class="row">
        <div class="col-md-4" >
            <img  class="logo" src="/images/presentation.png" WIDTH=200 HEIGHT=200 >
            </div>
            <div class="col-md-6" >
            <h1>Consulter la liste de vos enseigants</h1>
            <p>Dans cette section vous pouvez voir la liste de vos enseignant répartiés par classe ainsi 
            que leurs heure de reception.
            <br>
            Vous pouvez également contacter votre enseigant en lui envoyant un mail qui indiqué au-prés de chaque enseigant.
            </p>
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

      <?
    }

    private function ensp(){
      ?>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Classe</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Matiere</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
  <br>
  <div class="alert alert-dark" role="alert">
           Liste des enseignants par <strong>classe </strong>
        </div>
  <?php
              foreach ($ensp as $ep):
                  ?>
            <tr>
      <th scope="row"><?= $ep['classe'] ?></th>
      <td><?= $ep['nom'] ?></td>
      <td><?= $ep['prenom'] ?></td>
      <td><?= $ep['matiere'] ?></td>
      <td><?= $ep['email'] ?></td>
      
    </tr>
    
            <?php endforeach; ?>
    
  </tbody>
</table>

<?
    }

    private function ensprcp(){
      ?>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Jour</th>
      <th scope="col">Heure de réception</th>

    </tr>
  </thead>
  <tbody>
  <br>
  <div class="alert alert-dark" role="alert">
           Heures de reception des enseignant <strong>[Notez qu'aucune reception n'est permise en dehors de ces heures définies] </strong>
        </div>
  <?php
              foreach ($ensprcp as $ep):
                  ?>
            <tr>
      <th scope="row"><?= $ep['nom'] ?></th>
      <td><?= $ep['prenom'] ?></td>
      <td><?= $ep['id_jour'] ?></td>
      <td><?=substr($ep['heure'],0,5) ?></td>
      
    </tr>
    
            <?php endforeach; ?>
    
  </tbody>
</table>
    
   
    <?
    }

    ?>
    
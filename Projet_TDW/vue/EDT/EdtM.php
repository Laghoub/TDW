<?
class EdtM{


    public function entete(){
?>        
    <head>
        <title>Edt -Moyen</title>
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
<br>
<br>
        
<?
    }

   
    private function menuedt(){

        ?>
        
    <div class="container-fluid2">
        <div class="container">
    <div class="col-sm-12">
        <div class="card" >
        <div class="card-body">
        <div class="row">
        <div class="col-md-4" >
            <img  class="logo" src="/images/timetable.png" WIDTH=250 HEIGHT=220 >
            </div>
            <div class="col-md-6" >
            <h1>Emploi du temps - Moyen - </h1>
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
        <h1>Table des emplois par jour </h1>
    </div>
    <br>
        <div class="container-fluid2">
        <div class="container">
        <div class="row">
            
        </div>
        </div>
        </div>
        <?
    }

    private function EDTD(){
      ?>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Classe</th>
      <th scope="col">8h-9h</th>
      <th scope="col">9h-10h</th>
      <th scope="col">10h-11h</th>
      <th scope="col">11h-12h</th>
      <th scope="col">13h-14h</th>
      <th scope="col">14h-15h</th>
      <th scope="col">15h-16h</th>
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Le jour de: <strong>Dimanche </strong>
        </div>
  <?php
              foreach ($edtp as $ep):
                if(($ep['id_jour'])=='1'):
                  ?>
            <tr>
      <th scope="row"><?= $ep['classe_id'] ?></th>
      <td><?= $ep['hor1'] ?></td>
      <td><?= $ep['hor2'] ?></td>
      <td><?= $ep['hor3'] ?></td>
      <td><?= $ep['hor4'] ?></td>
      <td><?= $ep['hor5'] ?></td>
      <td><?= $ep['hor6'] ?></td>
      <td><?= $ep['hor7'] ?></td>
    </tr>
    <?php endif; ?>
            <?php endforeach; ?>
    
  </tbody>
</table>
<br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Classe</th>
      <th scope="col">8h-9h</th>
      <th scope="col">9h-10h</th>
      <th scope="col">10h-11h</th>
      <th scope="col">11h-12h</th>
      <th scope="col">13h-14h</th>
      <th scope="col">14h-15h</th>
      <th scope="col">15h-16h</th>
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Le jour de: Lundi
        </div>
  <?php
              foreach ($edtp as $ep):
                if(($ep['id_jour'])=='2'):
                  ?>
            <tr>
      <th scope="row"><?= $ep['classe_id'] ?></th>
      <td><?= $ep['hor1'] ?></td>
      <td><?= $ep['hor2'] ?></td>
      <td><?= $ep['hor3'] ?></td>
      <td><?= $ep['hor4'] ?></td>
      <td><?= $ep['hor5'] ?></td>
      <td><?= $ep['hor6'] ?></td>
      <td><?= $ep['hor7'] ?></td>
    </tr>
    <?php endif; ?>
            <?php endforeach; ?>
    
  </tbody>
</table>
<br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Classe</th>
      <th scope="col">8h-9h</th>
      <th scope="col">9h-10h</th>
      <th scope="col">10h-11h</th>
      <th scope="col">11h-12h</th>
      <th scope="col">13h-14h</th>
      <th scope="col">14h-15h</th>
      <th scope="col">15h-16h</th>
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Le jour de: Mardi
        </div>
  <?php
              foreach ($edtp as $ep):
                if(($ep['id_jour'])=='3'):
                  ?>
            <tr>
      <th scope="row"><?= $ep['classe_id'] ?></th>
      <td><?= $ep['hor1'] ?></td>
      <td><?= $ep['hor2'] ?></td>
      <td><?= $ep['hor3'] ?></td>
      <td><?= $ep['hor4'] ?></td>
      <td><?= $ep['hor5'] ?></td>
      <td><?= $ep['hor6'] ?></td>
      <td><?= $ep['hor7'] ?></td>
    </tr>
    <?php endif; ?>
            <?php endforeach; ?>
    
  </tbody>
</table>
<br>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Classe</th>
      <th scope="col">8h-9h</th>
      <th scope="col">9h-10h</th>
      <th scope="col">10h-11h</th>
      <th scope="col">11h-12h</th>
      <th scope="col">13h-14h</th>
      <th scope="col">14h-15h</th>
      <th scope="col">15h-16h</th>
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Le jour de: Mercredi
        </div>
  <?php
              foreach ($edtp as $ep):
                if(($ep['id_jour'])=='4'):
                  ?>
            <tr>
      <th scope="row"><?= $ep['classe_id'] ?></th>
      <td><?= $ep['hor1'] ?></td>
      <td><?= $ep['hor2'] ?></td>
      <td><?= $ep['hor3'] ?></td>
      <td><?= $ep['hor4'] ?></td>
      <td><?= $ep['hor5'] ?></td>
      <td><?= $ep['hor6'] ?></td>
      <td><?= $ep['hor7'] ?></td>
    </tr>
    <?php endif; ?>
            <?php endforeach; ?>
    
  </tbody>
</table>
<br>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Classe</th>
      <th scope="col">8h-9h</th>
      <th scope="col">9h-10h</th>
      <th scope="col">10h-11h</th>
      <th scope="col">11h-12h</th>
      <th scope="col">13h-14h</th>
      <th scope="col">14h-15h</th>
      <th scope="col">15h-16h</th>
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Le jour de: Jeudi
        </div>
  <?php
              foreach ($edtp as $ep):
                if(($ep['id_jour'])=='5'):
                  ?>
            <tr>
      <th scope="row"><?= $ep['classe_id'] ?></th>
      <td><?= $ep['hor1'] ?></td>
      <td><?= $ep['hor2'] ?></td>
      <td><?= $ep['hor3'] ?></td>
      <td><?= $ep['hor4'] ?></td>
      <td><?= $ep['hor5'] ?></td>
      <td><?= $ep['hor6'] ?></td>
      <td><?= $ep['hor7'] ?></td>
    </tr>
    <?php endif; ?>
            <?php endforeach; ?>
    
  </tbody>
</table>


<?
    }

    ?>
    
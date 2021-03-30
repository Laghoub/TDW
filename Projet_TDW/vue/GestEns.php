<?
class GestEns{


    public function entete(){
?>        
    <head>
        <title>Gestion des enseignants</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        
        <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </head>

    <body style="margin: 5%">
    
    </body>
    <?
    }

    private function titre(){
    ?>
    
  

                <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Heures de travail</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Heures de reception</a>
  </li>
  <li class="nav-item">
    <a class="nav-link " id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Visualiser</a>
  </li>
  

  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<br>
<div>
  <div class="container-fluid2">
        <div class="container">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white" >
        <div class="card-body">
        <div class="row">

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;">
       <i class="fas fa-chalkboard-teacher"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Gérer les heures de travail d'un enseignant</h1>
            <p>Veuillez Séléctionner l'identifiant de l'enseignant et choisir la classe et l'horaire correspendants</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      </div>


      <?
            }

            private function form(){
                ?>
                <div class="container">
        <h1>Compléter les champs </h1>
        <br>
    </div>
    <?php if(isset($_GET['success'])): ?>
      <div class="container">
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['success']; ?>
    </div>
            </div>
<?php endif; ?>

<?php if(isset($_GET['danger'])): ?>
      <div class="container">
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['danger']; ?>
    </div>
            </div>
<?php endif; ?>
    <br>
    
    
    <div class="container">
                <form action="/addseance" method="post" >
                <div class="row">
                <div class="col-md-3">
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Id enseignant</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="login">
    <!--<option selected>Choisir...</option>-->
    <?php
              foreach ($ens as $item):
                  ?>
            <option value="<?= $item['login'] ?>">
            <?= $item['login'] ?>
            </option>
            <?php endforeach; ?>
    
  </select>
</div>
                </div>
                
                <div class="col-md-3">
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Classe</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="classe">
    <!--<option selected>Choisir...</option>-->
    <?php
              foreach ($cls as $clas):
                  ?>
            <option value="<?= ($clas['niveau'].(substr($clas['nom'],0,1)).$clas['id_classe']) ?>">
            <?= ($clas['niveau'].(substr($clas['nom'],0,1)).$clas['id_classe']) ?>
            </option>
            <?php endforeach; ?>
    
  </select>
</div>
                </div>

                <div class="col-md-3">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Jour</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="jour">
    <!--<option selected>Choisir...</option>-->
    <option value="Dimanche">Dimanche</option>
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
    <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
    
  </select>
</div>
</div>

<div class="col-md-3">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Horaire</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="horaire">
    <!--<option selected>Choisir...</option>-->
    <option value="8h-9h">8h-9h</option>
    <option value="9h-10h">9h-10h</option>
    <option value="10h-11h">10h-11h</option>
    <option value="11h-12h">11h-12h</option>
    <option value="13h-14h">13h-14h</option>
    <option value="14h-15h">14h-15h</option>
    <option value="15h-16h">15h-16h</option>
    
  </select>
</div>
</div>
</div>
<br>
        
<div class="container">
<div class="row">
        <div class="col-md-12"></div>
        <button type="submit" class="btn btn-outline-primary col-md-12 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
            </div>
            
</form>
            </div>
            </div>

            
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <br>
  
  
  <div class="container-fluid2">
        <div class="container">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white">
        <div class="card-body">
        <div class="row">

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;">
       <i class="fas fa-clock"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Gérer les heures de réception d'un enseignant</h1>
            <p>Veuillez Séléctionner l'identifiant de l'enseignant et choisir le jour et l'horaire correspendants</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      </div>
      <?
            }

            private function form2(){
                ?>
                <div class="container">
        <h1>Compléter les champs </h1>
        <br>
    </div>
    <?php if(isset($_GET['successhr'])): ?>
      <div class="container">
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['successhr']; ?>
    </div>
            </div>
<?php endif; ?>

<?php if(isset($_GET['dangerhr'])): ?>
      <div class="container">
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['dangerhr']; ?>
    </div>
            </div>
<?php endif; ?>
    <br>
    
    
    <div class="container">
                <form action="/addheure" method="post" >
                <div class="row">
                <div class="col-md-4">
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Id enseignant</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="loginens">
    <!--<option selected>Choisir...</option>-->
    <?php
              foreach ($ens as $item):
                  ?>
            <option value="<?= $item['login'] ?>">
            <?= $item['login'] ?>
            </option>
            <?php endforeach; ?>
    
  </select>
</div>
                </div>
                
                

                <div class="col-md-4">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Jour</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="jourens">
    <!--<option selected>Choisir...</option>-->
    <option value="Dimanche">Dimanche</option>
    <option value="Lundi">Lundi</option>
    <option value="Mardi">Mardi</option>
    <option value="Mercredi">Mercredi</option>
    <option value="Jeudi">Jeudi</option>
    
  </select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
    
    <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Horaire" name="heureens">
        </div> 
</div>
<br>
 <br>       
<div class="container">
<div class="row">
        <div class="col-md-12"></div>
        <button type="submit" class="btn btn-outline-primary col-md-12 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
            </div>
            
</form>
      
  
  </div>
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <br>

  <div class="container-fluid2-primary">
        <div class="container-primary">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white" >
        <div class="card-body">
        <div class="row">
        

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;">
       <i class="fas fa-search"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Visualisez TOUT!</h1>
            <p>Veuillez séléctionner l'identifiant de l'enseignant pour voir ses heures de travail et ses jours de reception</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      </div>

      <?
            }

            private function form3(){
                ?>
                <div>
                <div class="container">
        <h1>Compléter les champs </h1>
        <br>
    </div>
    <?php if(isset($_GET['successhr'])): ?>
      <div class="container">
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['successhr']; ?>
    </div>
            </div>
<?php endif; ?>

<?php if(isset($_GET['dangerhr'])): ?>
      <div class="container">
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['dangerhr']; ?>
    </div>
            </div>
<?php endif; ?>
    <br>
    
    
    <div class="container">
                <form action="/gestens" method="post" >
                <div class="row">
                <div class="col-md-5">
                <div class="input-group mb-6">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Id enseignant</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="loginhens">
    <!--<option selected>Choisir...</option>-->
    <?php
              foreach ($ens as $item):
                  ?>
            <option value="<?= $item['login'] ?>">
            <?= $item['login'] ?>
            </option>
            <?php endforeach; ?>
    
  </select>
</div>
</div>


<div class="col-md-3">
<div class="container">
<div class="row">
        <div class="col-md-12"></div>
        <button type="submit" class="btn btn-outline-primary col-md-12 ml-auto mr-auto">Visualiser !</button>
            </div>
            </div>
                </div>
            
                <div class="col-md-4">
                </div>
        

            </div>
            
</form>
 
  </div>
  </div>
  
  <?
    }

    private function affichage(){
      ?>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Jour</th>
      <th scope="col">Classe</th>
      <th scope="col">Horaire</th>
      <th scope="col">Matiere</th>
      <th scope="col">Edition</th>
      <th scope="col">Suppression</th>
      
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Les jours de travail
        </div>
  <?php
              foreach ($gtw as $ep):
                  ?>
            <tr>
      <th scope="row"><?= $ep['id_jour'] ?></th>
      <td><?= $ep['classe'] ?></td>
      <td><?= $ep['horaire'] ?></td>
      <td><?= $ep['matiere'] ?></td>
      <td><a href="/AjoutArticle?edit" class="btn btn-outline-success btn-sm">Editer</a></td>
      <td><a href="/deleteU?delete= <?php  echo $ep['id'] ?> " class="btn btn-outline-danger btn-sm ">Supprimer</a></td>

    </tr>
    
            <?php endforeach; ?>
    
  </tbody>
</table>

<?
    }

    private function affichageheure(){
      ?>
      <br>
      <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Jour</th>
      <th scope="col">Horaire</th>
      <th scope="col">Edition</th>
      <th scope="col">Suppression</th>
      
    </tr>
  </thead>
  <tbody>
  <div class="alert alert-dark" role="alert">
           Les jours de reception
        </div>
  <?php
              foreach ($gth as $ep):
                  ?>
            <tr>
      <th scope="row"><?= $ep['id_jour'] ?></th>
      <td><?=substr($ep['heure'],0,5) ?></td>
      <td><a href="/AjoutArticle?edit" class="btn btn-outline-success btn-sm">Editer</a></td>
      <td><a href="/deleteU?delete= <?php  echo $ep['id'] ?> " class="btn btn-outline-danger btn-sm ">Supprimer</a></td>

    </tr>
    
            <?php endforeach; ?>
    
  </tbody>
</table>

  
            </div>
            </div>


  
  </div>
  

     
            
    <?
    



   
    }

    ?>
    
<? 

class Emploi{
    public function entete(){
        ?>        
            <head>
                <title>Emploi du temps</title>
                <meta charset="utf-8">
                
                <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="/CSS/style.css">
                <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
                
                
            </head>
        
            <body style="margin: 5%">
            
            </body>
            <?
            }

            private function form(){
                ?>
                <div class="container-fluid2-primary">
        <div class="container-primary">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white" >
        <div class="card-body">
        <div class="row">
        

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;">
       <i class="fas fa-newspaper"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Créer un emploi du temps!</h1>
            <p>Veuillez remplir les informations qui concernent l'emploi, veuillez éviter les créneaux confondus</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      <br>
                <div class="container">
        <h1>Créer un emploi du temps  </h1>
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
                <form action="/addemploi" method="post" >
                <div class="row">
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
<br>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Jour</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="jour">
    <!--<option selected>Choisir...</option>-->
    <option value="1">Dimanche</option>
    <option value="2">Lundi</option>
    <option value="3">Mardi</option>
    <option value="4">Mercredi</option>
    <option value="5">Jeudi</option>
    
  </select>
</div>
</div>
<br>
        
        <div class="form-group">
    <label for="exampleInputPassword1">1er créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 8h-9h" name="hor1">
        </div>  
<br>
<div class="form-group">
    <label for="exampleInputPassword1">2eme créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 9h-10h" name="hor2">
        </div>  
<br>
<div class="form-group">
    <label for="exampleInputPassword1">3eme créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 10h-11h" name="hor3">
        </div>  
<br>
<div class="form-group">
    <label for="exampleInputPassword1">4eme créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 11h-12h" name="hor4">
        </div>  
<br>
<div class="form-group">
    <label for="exampleInputPassword1">5eme créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 13h-14h" name="hor5">
        </div>  
<br>
<div class="form-group">
    <label for="exampleInputPassword1">6eme créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 14h-15h" name="hor6">
        </div>  
<br>
<div class="form-group">
    <label for="exampleInputPassword1">7eme créneau horaire</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="La matiere qui ocuppera le créneau 15h-16h" name="hor7">
        </div>  
<br>

        
<div class="row">
        <div class="col-md-11"></div>
        <button type="submit" class="btn btn-primary col-md-1 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
</form>
            </div>
            </div>

            <br>


                <?
            
        }         
}
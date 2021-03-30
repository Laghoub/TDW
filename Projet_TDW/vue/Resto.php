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

    private function titre(){

    ?>
    <div class="container-fluid2-primary">
        <div class="container-primary">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white" >
        <div class="card-body">
        <div class="row">
        

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;">
       <i class="fas fa-hamburger"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Créer des repas!</h1>
            <p>Veuillez remplir les informations qui concernent le repas du jours, Les jours vont etre ordonnés automatiquement</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      <br>
    
   
    <br>
    
                <div class="container">
        <h1>Ajouter le repas du jour ! </h1>
    </div>
    <br>
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
                <form action="/addRepas" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Jour</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="jour">
    <option selected>Choisir le jour</option>
    <option value="1">Dimanche</option>
    <option value="2">Lundi</option>
    <option value="3">Mardi</option>
    <option value="4">Mercredi</option>
    <option value="5">Jeudi</option>
  </select>
</div>

        <div class="form-group">
    <label for="exampleInputEmail1">Plat principale</label>
    <input type="text" class="form-control"  aria-describedby="textHelp" placeholder="Entrer un nom du plat! " name="principale">
    
        </div>
        <div class="form-group">
    <label for="exampleInputPassword1">Plat secondaire</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un nom du plat!" name="secondaire">
        </div>

        <div class="form-group">
    <label for="exampleInputPassword1">Déssert</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un nom du dessert!" name="dessert">
        </div>

        <div class="form-group">
    <label for="exampleInputPassword1">Boisson</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un nom du Boisson" name="boisson">
        </div>
        
        

<br>
<div class="row">
        <div class="col-md-11"></div>
        <button type="submit" class="btn btn-primary col-md-1 ml-auto mr-auto">Ajouter !</button>
            </div>
</form>
            </div> 
    <?
    }

    private function menuRepas(){

        ?>
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
          
          <br>
          <a href="/resto?delete=<?php echo $form['id'] ?> " class="btn btn-danger">Supprimer</a>
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
    
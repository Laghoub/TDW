<? 

class Classe{
    public function entete(){
        ?>        
            <head>
                <title>Gestion des classes</title>
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
       <i class="fas fa-search"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <h1>Gerer les classe!</h1>
            <p>Créer vos classes en spécifiant le cycle d'enseignement et le niveau d'étude</p>
            
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      <br>
                <div class="container">
        <h1>Créer votre classe !  </h1>
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
                <form action="/addclasse" method="post" >
                
                <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Cycle</label>
  </div>
  <select class="custom-select" id="inputGroupSelect01" name="cycle">
    <option selected>Choisir...</option>
    <option value="1">Primaire</option>
    <option value="2">moyen</option>
    <option value="3">Secondaire</option>
  </select>
</div>
<br>
        
        
        <div class="form-group">
    <label for="exampleInputPassword1">Niveau</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Entrer le num du niveau" name="nv">
        </div>  
              

<br>

        <div class="form-group">
    <label for="exampleInputPassword1">Groupe</label>
    <input type="textarea" class="form-control" id="exampleInputPassword1" placeholder="Entrer le num du groupe" name="ng">
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

                <?
            
        }         
}
<?
class Accueil{


    public function entete(){
?>        
    <head>
        <title>Gestion des utilisateurs</title>
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
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrateur</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Enseignant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Etudiant</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="parent-tab" data-toggle="tab" href="#parent" role="tab" aria-controls="parent" aria-selected="false">Parent</a>
  </li>

  
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

  <br>
    
                <div class="container">
        <h1>Créer un Administrateur ! </h1>
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
                <form action="/addadmin" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div class="form-group">
                <div class="row">
                 
                <div class="col-md-6">
               
                <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un Login" name="login">
        </div>
        <br>
                
        <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer un mot de passe!" name="mdp">
        </div>
        <br>

                <div class="form-group">
    
    <input type="text" class="form-control"  aria-describedby="textHelp" placeholder="Entrer un nom  " name="nom">
    
        </div>
        <br>
        <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un prénom!" name="prenom">
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer une adresse!" name="adresse">
        </div>
                </div>
                
                <div class="col-md-6">
                <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 1" name="tel1">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 2" name="tel2">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 3" name="tel3">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
        
        </div>
        <br>
                
                </div>
                
                </div>
        

<br>
<div class="container">
<div class="row">
        <div class="col-md-4"></div>
        <button type="submit" class="btn btn-outline-primary col-md-4 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
</form>
            </div> 

            <br>
            <div class="container">
        <h1>Gérer les administrateurs ! </h1>
        <br>
    </div>
    </div>
<br>

            <table class="table table-hover">
  <thead>
    <tr>
      <!--<th scope="col">Type</th>-->
      <th scope="col">Login</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
              foreach ($us as $ep):
                  ?>
    <tr>
      <th scope="row"><?= $ep['login'] ?></th>
      <td><?= $ep['nom'] ?></td>
      <td><?= $ep['prenom'] ?></td>
      <td><?= $ep['email'] ?></td>
      <td><a href="/AjoutArticle?edit" class="btn btn-outline-success btn-sm">Editer</a></td>
      <td><a href="/deleteAd?delete= <?php  echo $ep['id'] ?> " class="btn btn-outline-danger btn-sm ">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
 
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <br>
    
  <div class="container">
        <h1>Créer un Enseignant ! </h1>
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
                <form action="/addens" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div class="form-group">
                <div class="row">
                 
                <div class="col-md-6">
               
                <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un Login" name="login">
        </div>
        <br>
                
        <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer un mot de passe!" name="mdp">
        </div>
        <br>

                <div class="form-group">
    
    <input type="text" class="form-control"  aria-describedby="textHelp" placeholder="Entrer un nom  " name="nom">
    
        </div>
        <br>
        <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un prénom!" name="prenom">
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer une adresse!" name="adresse">
        </div>
                </div>
                
                <div class="col-md-6">
                <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 1" name="tel1">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 2" name="tel2">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 3" name="tel3">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Matiere" name="matiere">
        
        </div>
        <br>
                
                </div>
                
                </div>
        

<br>
<div class="container">
<div class="row">
        <div class="col-md-4"></div>
        <button type="submit" class="btn btn-outline-primary col-md-4 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
</form>
            </div> 

            <br>
            <div class="container">
        <h1>Gérer les Enseignants ! </h1>
        <br>
    </div>
    </div>
<br>

            <table class="table table-hover">
  <thead>
    <tr>
      <!--<th scope="col">Type</th>-->
      <th scope="col">Login</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
              foreach ($ens as $ep):
                  ?>
    <tr>
      <th scope="row"><?= $ep['login'] ?></th>
      <td><?= $ep['nom'] ?></td>
      <td><?= $ep['prenom'] ?></td>
      <td><?= $ep['email'] ?></td>
      <td><a href="/AjoutArticle?edit" class="btn btn-outline-success btn-sm">Editer</a></td>
      <td><a href="/deleteU?delete= <?php  echo $ep['id'] ?> " class="btn btn-outline-danger btn-sm ">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
  <br>
    
  <div class="container">
        <h1>Créer un Etudiant ! </h1>
    </div>
    <br>
    <?php if(isset($_GET['success'])): ?>
      <div class="container">
    <div class="alert alert-success" role="alert">
  <?php echo $_GET['success']; ?>
    </div>
            </div>
<?php endif; ?>

<?php if(isset($_GET['etud'])): ?>
      <div class="container">
    <div class="alert alert-danger" role="alert">
  <?php echo $_GET['etud']; ?>
    </div>
            </div>
<?php endif; ?>
    
    <br>
    
    
    <div class="container">
                <form action="/addetud" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div class="form-group">
                <div class="row">
                 
                <div class="col-md-6">
               
                <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un Login" name="login">
        </div>
        <br>
                
        <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer un mot de passe!" name="mdp">
        </div>
        <br>

                <div class="form-group">
    
    <input type="text" class="form-control"  aria-describedby="textHelp" placeholder="Entrer un nom  " name="nom">
    
        </div>
        <br>
        <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un prénom!" name="prenom">
        </div>
        <br>
        <div class="form-group">
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Date de naissance" name="daten">
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer une adresse!" name="adresse">
        </div>
                </div>
                
                <div class="col-md-6">
                <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 1" name="tel1">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 2" name="tel2">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 3" name="tel3">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
        
        </div>
        <br>
        <select class="form-control" name="classe">
  <option>
  
  <?php
              foreach ($cls as $clas):
                  ?>
            <option value="<?= ($clas['niveau'].(substr($clas['nom'],0,1)).$clas['id_classe']) ?>">
            <?= ($clas['niveau'].(substr($clas['nom'],0,1)).$clas['id_classe']) ?>
            </option>
            <?php endforeach; ?>
  </option>
</select>
<br>
        <select class="form-control" name="prnt">
  <option>
  
  <?php
              foreach ($parent as $pr):
                  ?>
            <option value="<?= $pr['login'] ?>">
            <?= $pr['login'] ?>
            </option>
            <?php endforeach; ?>
  </option>
</select>
        <br>
                
                </div>
                
                </div>
        

<br>
<div class="container">
<div class="row">
        <div class="col-md-4"></div>
        <button type="submit" class="btn btn-outline-primary col-md-4 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
</form>
            </div> 

            <br>
            <div class="container">
        <h1>Gérer les étudiants ! </h1>
        <br>
    </div>
    </div>
<br>

            <table class="table table-hover">
  <thead>
    <tr>
      <!--<th scope="col">Type</th>-->
      <th scope="col">Login</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Classe</th>
      <th scope="col">Email</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
              foreach ($etud as $ep):
                  ?>
    <tr>
      <th scope="row"><?= $ep['login'] ?></th>
      <td><?= $ep['nom'] ?></td>
      <td><?= $ep['prenom'] ?></td>
      <td><?= $ep['classe'] ?></td>
      <td><?= $ep['email'] ?></td>
      <td><a href="/AjoutArticle?edit" class="btn btn-outline-success btn-sm">Editer</a></td>
      <td><a href="/deleteE?delete= <?php  echo $ep['id'] ?> " class="btn btn-outline-danger btn-sm ">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  
  
  </div>
  

  <div class="tab-pane fade" id="parent" role="tabpanel" aria-labelledby="parent-tab">
  <br>
    
  <div class="container">
        <h1>Créer un parent ! </h1>
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
                <form action="/addparent" method="post" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                <div class="form-group">
                <div class="row">
                 
                <div class="col-md-6">
               
                <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un Login" name="login">
        </div>
        <br>
                
        <div class="form-group">
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrer un mot de passe!" name="mdp">
        </div>
        <br>

                <div class="form-group">
    
    <input type="text" class="form-control"  aria-describedby="textHelp" placeholder="Entrer un nom  " name="nom">
    
        </div>
        <br>
        <div class="form-group">
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer un prénom!" name="prenom">
        </div>
        
        <br>
        <div class="form-group">
    
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Date de naissance!" name="daten">
        </div>
                </div>
                
                <div class="col-md-6">
              
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Entrer une adresse!" name="adresse">
        </div>
        <br>
                <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 1" name="tel1">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 2" name="tel2">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Num de tél 3" name="tel3">
        
        </div>
        <br>
        <div class="form-group">
    
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email">
        
        </div>
        <br>
                
                </div>
                
                </div>
        

<br>
<div class="container">
<div class="row">
        <div class="col-md-4"></div>
        <button type="submit" class="btn btn-outline-primary col-md-4 ml-auto mr-auto">Ajouter !</button>
            </div>
            </div>
</form>
            </div> 

            <br>
            <div class="container">
        <h1>Gérer les parents ! </h1>
        <br>
    </div>
    </div>
<br>

            <table class="table table-hover">
  <thead>
    <tr>
      <!--<th scope="col">Type</th>-->
      <th scope="col">Login</th>
      <th scope="col">Nom</th>
      <th scope="col">Prénom</th>
      <th scope="col">Email</th>
      <th scope="col">Editer</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>
  <tbody>
  <?php
              foreach ($parent as $ep):
                  ?>
    <tr>
      <th scope="row"><?= $ep['login'] ?></th>
      <td><?= $ep['nom'] ?></td>
      <td><?= $ep['prenomp'] ?></td>
      <td><?= $ep['email'] ?></td>
      <td><a href="/AjoutArticle?edit" class="btn btn-outline-success btn-sm">Editer</a></td>
      <td><a href="/deleteU?delete=  " class="btn btn-outline-danger btn-sm ">Supprimer</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  </div>
  
</div>     
            
    <?
    }



   
    }

    ?>
    
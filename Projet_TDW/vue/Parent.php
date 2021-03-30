
<? 

class Parents{
    public function entete(){
        ?>        
            <head>
                <title>Parent</title>
                <meta charset="utf-8">
                
                <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="/CSS/style.css">
                <link rel="stylesheet" type="text/css" href="/bootstrap/fontawesome/css/fontawesome.min.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
                
                
            </head>
        
            <body style="margin: 3%">
            
            
            </body>
            <?
    }

    private function entetepage(){
    ?>


    <div class="container-fluid3">
    <div class="container">
    

  <div class="container-fluid2-primary">
        <div class="container-primary">
    <div class="col-md-12">
        <div class="card" style="background-color:#455a64;color:white" >
        <div class="card-body">
        <div class="row">
        

        <div class="col-md-2">
        <span style="font-size: 3em; color: white;margin-left:50px;margin-top:40px">
       <i class="fas fa-graduation-cap"></i>
        </span>
        </div>
    
            <div class="col-md-10" >
            <?php
              foreach ($info as $ep):
                  ?>
            <h1>Bonjour <?= $ep['prenomp'] ?> ! </h1>
            <p>Vous trouverez dans cette section les notes,les remarques, ainsi que l'empoloi du temps de vos enfants</p>
            <?php endforeach; ?>
            </div>
        </div>
        
        
          </div>
      </div>
      </div>
      </div>
      </div>
      <br>
      
    <div class="row">
        <div class="col-md-3">
        <?php
        $moybuffer=0;
              foreach ($info as $ep):
                  ?>
        <div class="card" style="width: 18rem;">
  <img src="/images/family.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $ep['nom'] ?> <?= $ep['prenomp'] ?> </h5>
  </div>
  <ul class="list-group list-group-flush">
  <li class="list-group-item">Date de naissance:<strong> <?= $ep['date_naissance'] ?></strong></li>
    <li class="list-group-item">Email: <strong><?= $ep['email'] ?></strong></li>
    <li class="list-group-item">liste des enfants</li>
    <?php foreach ($child as $ch): ?>
    <li class="list-group-item"><?= $ch['prenom'] ?>: <strong><?= $ch['classe'] ?></strong></li>
    <?php endforeach; ?>
    
    <?php endforeach; ?>
    
    

    <!--<li class="list-group-item">Moyenne:<strong> <?=substr($moyenne,0,4) ?></strong></li>
    <li class="list-group-item">Décision:<strong> <?= $decesion?></strong></li>-->
  </ul>
  
</div>
        </div>
        
        <div class="col-md-8" style="margin-left:50px">
        <h1>Notes dans les modules</h1>
        

        <?
    }

    private function affichagenotes(){
      ?>
      <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">Prénom</th>
      <th scope="col">Matiere</th>
      <th scope="col">CC</th>
      <th scope="col">CI</th>
      <th scope="col">CF</th>
      <th scope="col">Moy</th>
      <th scope="col">Remarque</th>
      
      
    </tr>
  </thead>
  <tbody>
  <?php
  $moybuffer=0;
              foreach ($notes as $ep):
                  ?>
            <tr>
        <th scope="row"><?= $ep['prenom'] ?></th>
      <th scope="row"><?= $ep['matiere'] ?></th>
      <td><?= $ep['cc'] ?></td>
      <td><?= $ep['ci'] ?></td>
      <td><?= $ep['cf'] ?></td>
      <?php
      $moymodule=($ep['cf']+$ep['cc']+$ep['ci'])/3;
      $moybuffer=$moybuffer+$moymodule;
      $moyenne= $moybuffer/7;
      if($moyenne>=10){
          $decesion='Admis';
         
      }else{
          $decesion='Non admis';
         
      }
      ?>
      <td><?= substr($moymodule,0,4) ?></td>
      <td><?= $ep['remarque'] ?></td>
     

    </tr>
    
            <?php endforeach;?>
    
  </tbody>
</table>
<!--
<div class="row">
<div class="col-md-3">
<h3> Moyenne </h3>
</div>
<div class="col-md-3">
<button type="button" class="btn btn-primary col-md-6"> <?=substr($moyenne,0,4) ?></button>

</div>
<div class="col-md-3">
<h3> Décision </h3>
</div>
<div class="col-md-3">

<?php if ($decesion=='Admis'): ?>

<button type="button" class="btn btn-success col-md-6"> <?=$decesion ?></button>
<?php endif; ?>
<?php if ($decesion=='Non admis'): ?>

<button type="button" class="btn btn-danger col-md-8"> <?=$decesion ?></button>
<?php endif; ?>
</div>
</div>
-->


        <div>
    </div>
    <br>
    <h1>Emploi du temps</h1>
    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">Jour</th>
      <th scope="col">Jour</th>
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
  
  <?php
              foreach ($empst as $ep):
                
                  ?>
            <tr>
    <th scope="row"><?= $ep['classe'] ?></th>
    <td><?= $ep['jour'] ?></td>
      <td><?= $ep['hor1'] ?></td>
      <td><?= $ep['hor2'] ?></td>
      <td><?= $ep['hor3'] ?></td>
      <td><?= $ep['hor4'] ?></td>
      <td><?= $ep['hor5'] ?></td>
      <td><?= $ep['hor6'] ?></td>
      <td><?= $ep['hor7'] ?></td>
    </tr>
   
            <?php endforeach; ?>
    
  </tbody>
</table>
    </div>
    </div>
    
        
                <?
            
        }         
}
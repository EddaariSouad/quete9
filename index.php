<?php include './includes/db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php include './includes/header.php';

      if(isset($_GET['form'])){
        include './includes/form.php';
      }
      if(isset($_GET['form2'])){
        include './includes/form2.php';
      }
?>
<section class='container-fluid'>
    <div class='row justify-content-center'>



    <?php 
    if(isset($_GET['champions'])){
      $sql= 'SELECT * FROM champions';
    $prepare = $db->prepare($sql);
    $prepare -> execute();
    $liste = $prepare-> fetchALL();
    foreach($liste as $value){?>
        <div class="card" style="width: 25rem;  background: content-box radial-gradient(#9E90A2, #B6C2D9);" >
        <div class="card-body">
          <img src="<?php echo $value ['image'] ?>" alt="">
          <p class="card-text"><?php echo $value ['ville'] ?></p>
          <p class="card-text"><?php echo $value ['champion'] ?></p>
          <p class="card-text"><?php echo $value ['badge'] ?></p>
          <button class="btn btn-dark "><a class="text-white" href="index.php?championid=<?php echo $value['id'];?>">Fiche Champion</a></button>
        </div>
   
      </div>
   
    
      <?php
       }
    }   
    ?>
    </div>
</section>

<?php 
    if (isset($_GET['championid'])){

          $sql = "SELECT * FROM champions WHERE id = :id";

            $prepare=$db->prepare($sql);

            $prepare->execute(
                [
                    'id' => $_GET['championid']
                ]
            );
            $list = $prepare->fetch();
           ?>

           <div class="card container-fluid">
                <div class="card-body row" style="background:#B6C2D9;">
                    <div>
                    <img src="<?php echo $list['image'] ;?>" alt=""> 
                    </div>
                    <div>
                    <p class="card-title"><?php echo 'Ville : ' . $list['ville']; ?></p>
                    <p class="card-text"><?php echo 'Champion: ' . $list['champion']; ?></p>
                    <p class="card-text"><?php echo 'Type : ' . $list['type']; ?></p>
                    <p class="card-text"><?php echo 'Badge : ' . $list['badge']; ?></p>
                    <p class="card-text"><?php echo 'Id : ' . $list['id']; ?></p>
                    <a href="index.php?modifierc&champid=<?php echo $list['id'] ?>"><button class="btn btn-dark" name="modifierc">Modifier</button></a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                    </div>


                </div>
            </div> 
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez-vous supprimer ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <a href="index.php?confirmerc&cid=<?php echo $list['id']?>"><button type="button" class="btn btn-primary">Confirmer</button></a>
      </div>
    </div>
  </div>
</div>
           <?php
              }

    ?>

<section class='container-fluid'>
    <div class='row'>
    <?php 
    if(isset($_GET['pokemon'])){
      $pk= 'SELECT * FROM pokemon';
    $prepare = $db->prepare($pk);
    $prepare -> execute();
    $liste = $prepare-> fetchALL();
    foreach($liste as $value){?>
        <div class="card" style="background: content-box radial-gradient(#9E90A2, #B6C2D9);"">
        <div class="card-body">
          <img src="<?php echo $value ['image'] ?>" alt="" style='width:100px'>
          <p class="card-text"><?php echo $value ['numero'] ?></p>
          <p class="card-text"><?php echo $value ['first_name'] ?></p>
          <p class="card-text"><?php echo $value ['type1'] ?></p>
          <p class="card-text"><?php echo $value ['type2'] ?></p>
          <button class="btn btn-dark"><a class="text-white" href="index.php?id=<?php echo $value['id'];?>">Fiche Pokemon</a></button>
          
        </div>
   
      </div>
   
    
      <?php
       }
    }   
    ?>
    </div>
</section>

<?php 
    if (isset($_GET['id'])){

          $sql = "SELECT * FROM pokemon WHERE id = :id";

            $prepare=$db->prepare($sql);

            $prepare->execute(
                [
                    'id' => $_GET['id']
                ]
            );
            $list = $prepare->fetch();
           ?>

           <div class="card container-fluid">
                <div class="card-body row"  style="background:#B6C2D9;">
                    <div>
                    <img src="<?php echo $list['image'] ;?>" style="width:500px" alt=""> 
                    </div>
                    <div>
                    <p class="card-title"><?php echo 'Numero : ' . $list['numero']; ?></p>
                    <p class="card-text"><?php echo 'Pokemon : ' . $list['first_name']; ?></p>
                    <p class="card-text"><?php echo 'Type : ' . $list['type1']; ?></p>
                    <p class="card-text"><?php echo 'Type 2 : ' . $list['type2']; ?></p>
                    <p class="card-text"><?php echo 'Id : ' . $list['id']; ?></p>
                    <a href="index.php?modifierp&pokeid=<?php echo $_GET['id'] ; ?>"><button class="btn btn-dark" name="modifierp">Modifier</button></a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Supprimer</button>
                    </div>


                </div>
            </div> 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supprimer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Voulez-vous supprimer ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <a href="index.php?confirmerp&pid=<?php echo $list['id']?>"><button type="button" class="btn btn-primary">Confirmer</button></a>
      </div>
    </div>
  </div>
</div>
        
           <?php
              }

    ?>


<?php

?>


<?php 
 if(isset($_POST['submit'])){
  $image=$_FILES['image']['name'];

  $champion=" INSERT INTO `champions` (`ville`, `champion`, `type`,`badge`,`image`) VALUES (:ville1,:champion1,:type1,:badge1,:image)";
  $prepare = $db->prepare($champion);
  $test = $prepare->execute(
      [
          'ville1' => $_POST['ville'],
          'champion1' => $_POST['champion'],
          'type1' => $_POST['type'],
          'badge1' => $_POST['badge'],
          'image' => 'img/' . $_FILES['image']['name']
          
      ]
  );
}

if(isset($_GET['modifierc'])){
  include './includes/form3.php';
}

if(isset($_POST['submit2'])){

  $image=$_FILES['image1']['name'];

  $champion= "UPDATE `champions` SET `ville`= :ville1 , `champion`= :champion1  ,`type`= :type1, `badge` = :badge1, `image`= :image1 WHERE `id`=:id ";
  $prepare=$db->prepare($champion);
  $prepare->execute(
    [
      'ville1' => $_POST['ville1'],
      'champion1' => $_POST['champion1'],
      'type1' => $_POST['type1'],
      'badge1' => $_POST['badge1'],
      'image1' => 'img/' . $_FILES['image1']['name'],
      'id' => $_POST['id'] 
  ]
);
echo 'j\'ai réussi';

}

if(isset($_POST['submitp'])){
  $image=$_FILES['image']['name'];

  $pokemon=" INSERT INTO `pokemon` (`numero`, `first_name`, `type1`,`type2`,`image`) VALUES (:numero, :first_name, :type1, :type2, :image)";
  $prepare = $db->prepare($pokemon);
  $test = $prepare->execute(
      [
          'numero' => $_POST['numero'],
          'first_name' => $_POST['first_name'],
          'type1' => $_POST['type1'],
          'type2' => $_POST['type2'],
          'image' => 'img/' . $_FILES['image']['name']
      ]
  );
  var_dump($test);
}

if(isset($_GET['modifierp'])){
  include './includes/form4.php';
}

if(isset($_POST['submit4'])){
  $image=$_FILES['image1']['name'];

  $pokemon="UPDATE `pokemon` SET `numero`= :numero, `first_name`= :first_name, `type1`= :type1, `type2`= :type2, `image`= :image WHERE `id`= :id ";
  $prepare=$db->prepare($pokemon);
  $test=$prepare->execute(
    [
      'numero' => $_POST['numero1'],
      'first_name' => $_POST['first_name1'],
      'type1' => $_POST['type11'],
      'type2' => $_POST['type21'],
      'image' => 'img/' . $_FILES['image1']['name'],
      'id' => $_POST['id']
    ]
    );
    
}

if (isset($_GET['confirmerc'])){

  $id=$_GET['cid'];
  
  $sup= "DELETE FROM champions WHERE id=:id";
  
  $prepare=$db->prepare($sup);
  
  $prepare->execute(
      [
          'id'=>$id
      ]
  );
  
  }

  if (isset($_GET['confirmerp'])){

    $id=$_GET['pid'];
    
    $sup= "DELETE FROM pokemon WHERE id=:id";
    
    $prepare=$db->prepare($sup);
    
    $prepare->execute(
        [
            'id'=>$id
        ]
    );
    
    }
?>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>
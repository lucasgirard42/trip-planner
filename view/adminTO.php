
<?php include '../config/autoload.php';



 include '../partials/head.php'; 

 include '../partials/navbar.php'; 
 $request = $bdd->prepare("SELECT * from tour_operators WHERE id = ? ");
 $request->execute([$_GET['id']]);

 $operators = $request->fetchAll();
 
 ?>

 <br>



<h2 style="text-align: center;">Proposer une destination</h2>
<div style="border: 3px red solid; width: 800px; margin: 0 auto;">
<div class="container">
  
    <div class="form-group">
      <?php foreach($operators as $operator){ ?>
      <p>Nom tour opérator: <p>
      <?php echo($operator['name']) ?>
      <P>Nom du site: </p>
      <?php echo($operator['link']) ?>

      <?php } ?>
    </div>
  <form class="formulaire" action="../class/tourOperator.php" method="POST">
     <div class="form-group">
       <input name='id' type="hidden" value="<?= $_GET['id']?>">
      <label>destination</label>
      <select name="location" class="form-control" id="exampleFormControlSelect1" style="width: 150px;" required>
        <option value="JAPON">JAPON</option>
        <option value="AUSTRALIE">AUSTRALIE</option>
        <option value="INDE">INDE</option>
        <option value="MAROC">MAROC</option>
        <option value="MARTINIQUE">MARTINIQUE</option>
        <option value="CANADA">CANADA</option>
        <option value="PEROU">PEROU</option>
        <option value="EGYPTE">EGYPTE</option>
        <option value="ISLANDE">ISLANDE</option>
        <option value="FINLANDE">FINLANDE</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">prix (€)</label>
      <input type="number" name="price" style="width: 75px;">
    </div>
    <div class="form-group">
      <label for="img_profil">Choisir une photo de profil</label>
      <input type="file" class="form-control-file"  accept="image/*" name="img_profil" required>
        <?php
              if(isset($_GET['error']) && $_GET['error'] === 'image'){  ?>
                <p>Le format de votre image n'est pas bon!</p>
              <?php  }
              ?>     
              
    </div>
    

   
    
    <div class="form-group">
    <button class="btn btn-success col-md-12 w-50" type="submit"  style="margin-left: 190px;">valider</button>
    </div>
  </form>
</div>
</div>


<br>


<style>
 {
background-color: grey;
}
</style>
  
  
  <?php include '../partials/footer.php'?>

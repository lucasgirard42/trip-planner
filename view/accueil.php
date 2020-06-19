<?php 

include '../partials/head.php';
include '../partials/navbar.php';
include '../config/autoload.php';
include '../class/review.php';


$request = $bdd->query("SELECT * from tour_operators");
$TOs = $request->fetchAll();

$request = $bdd->query("SELECT * FROM destinations ");
$destinations = $request->fetchAll();



      ?>


<html>
<body>

</br> </br></br>

<!-- CAROUSEL -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner shadow-lg">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/images/india.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/malaisie.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/images/moscou.jpg" alt="Third slide">
    </div>
  </div>
</div>
<!-- FIN CAROUSEL -->



<!---BOITE QUI FILTRE LA RECHERCHE----->

<?php include '../partials/barSearch.php'; ?>
<!--FIN DE BOITE -->



<!-- BOUCLE PHP AVEC CARDS -->
    <div class="container">
        <div class="row">

            <?php  foreach($TOs as $TO) {?>
                <div class="firstcard card shadow-sm col-2 mr-2" style="width: 18rem;" data-card="cardTrip">
                    <img src="../assets/images/plages.jpg" class="card-img-top">
                        <div class="card-body" style="background-color: white;">
                            <h5 class="card-title">JAPON</h5>
                            <p class="card-text">1/5 NOTE
                                
                                <a href="fiche-produit.php" class="btn btn-primary">INFO</a>
                                <br>
                                
                       </div>
                </div>
            <?php }?> 
            
        </div>
    </div>
    </div>
            
<!-- FIN BOUCLE PHP -->
        
<?php include '../partials/form.php'?>

<?php include '../partials/footer.php'?>





<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
<!--<script type='text/javascript' src='/js/jquery.mousewheel.min.js'></script> -->





















</body>
</html>


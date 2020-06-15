<?php include '../partials/navbar.php';
     include '../partials/head.php'; ?>


<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>trip planner</title>
    <script src="../assets/js/myscript.js"></script>
</head>
<body>

<?php
include '../partials/navbar.php';
 
?>

=======
<body>

>>>>>>> 9d0a9c13a479790831b73db13b128cd9fc805427

</br> </br></br>

<!-- CAROUSEL -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
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
<div class="filtrer" style="background-color: royalblue;">
<div class="searchbody">
    <label for="bday" class="depart" style="font-family: 'Trebuchet MS', Helvetica, sans-serif; padding-left: 210px;">Date de départ &nbsp</label>
    <label for="bday" class="arrivee" style="font-family: 'Trebuchet MS', Helvetica, sans-serif;">Date d'arrivée</label> </br> </br>
    <input placeholder= "Saisir la ville de départ" style="width: 200px; height: 50px; border: 2px solid black; text-indent: 15px; "></input>
    <input style="height: 50px; border: 2px solid black;" type="date" id="start" name="trip-start"
       value="Date de départ"
       min="2020-06-10" max="2050-12-31">
       <input style="height: 50px; border: 2px solid black;" type="date" id="end" name="trip-end"
       value="Date d'arrivée"
       min="2020-06-10" max="2050-12-31">
       <input type="submit" value="Chercher une destination" style="background-color: crimson; height: 70px; border-radius: 15px; border: 2px black solid;">
</div>
</div>
<!--FIN DE BOITE -->



<!-- BOUCLE PHP AVEC CARDS -->
    <div class="container">
    <?php
include '../partials/sidebar.php';
?>
        <div class="row">
            <?php  for ($i=1; $i <11; $i++):?>
                <div class="firstcard shadow-sm " style="width: 18rem;" data-card="cardTrip">
                    <img src="../assets/images/plages.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">JAPON</h5>
                            <p class="card-text">1/5 NOTE
                                <br>PRIX: 200 euro</p>
                                <a href="#" class="btn btn-primary">INFO</a>
                       </div>
                </div>
                <?php endfor ?>
        </div>
    </div>
<!-- FIN BOUCLE PHP -->










<<<<<<< HEAD
=======

<?php include '../partials/footer.php'?>
>>>>>>> 9d0a9c13a479790831b73db13b128cd9fc805427
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>


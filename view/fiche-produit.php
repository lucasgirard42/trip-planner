<?php 
     session_start();
     include '../partials/head.php';
     include '../partials/navbar.php';
     include '../config/autoload.php';
 ?>

<?php


// // //      $bdd= new PDO("localhost","root","","comparoperator");

// // //       if (isset($_POST['save'])) {
// // //      // include '../config/autoload.php';
// // //       $uID = $bdd->real_escape_string($_POST['uID']);
// // //       $grade = $bdd->real_escape_string($_POST['grade']);
// // //       $grade++;

// // //       if (!$uID) {
// // //          $bdd->query("INSERT INTO tour_operators (grade) VALUES ('$grade')");
// // //          $sql = $bdd->query("SELECT gradeID FROM tour_operators ORDER BY gradeID DESC LIMIT 1");
// // //          $uData = $sql->fetch_assoc();
// // //          $uID = $uData['gradeID'];
// // //   }    else
// // //          $bdd->query("UPDATE tour_operators SET grade='$grade' WHERE gradeID ='$uID'");
      
// // //          exit(json_encode(array('gradeID' => $uID)));
// // //   }

 // $sql = $bdd->query("SELECT gradeID FROM tour_operators");
 // $numR = $sql->num_rows;

 // $sql = $bdd->query("SELECT SUM(grade) AS total FROM tour_operators");
 // $rData = $sql->fetch_array();
 // $total = $rData['total'];

  //$avg = $total / $numR;
?>

<body>



<script>
  var grade = -1, uID = 0;
  $(document).ready(function (){
      resetStarColors();

      if (localStorage.getItem('grade') != null) {
         setStars(parseInt(localStorage.getItem('grade')));
         uID = localStorage.getItem('uID');
          }
      
      $('.fa-star').on('click', function () {
          grade = parseInt($(this).data('index'));
          localStorage.setItem('grade', grade);
          saveToTheDB();
      });

      $('.fa-star').mouseover(function () {
         resetStarColors();
         var currentIndex = parseInt($(this).data('index'));
         setStars(currentIndex);

         for (var i=0; i <= currentIndex; i++)
            $('.fa-star:eq('+i+')').css('color', 'gold');
      });
      $('.fa-star').mouseleave(function () {
          resetStarColors();

          if (grade != -1)
             setStars(grade);

         
      });
  });

  function saveToTheDB() {
      $.ajax({
          url: "fiche-produit.php",
          method: "POST", 
          dataType: 'json',
          data: {
              save: 1,
              uID: uID,
              grade: grade
          }, success: function (r) {
              uID = r.uid;
              localStorage.setItem('uID', uID);
              saveToTheDB();
          }
      });
  }

  function setStars(max) {
    for (var i=0; i <= max; i++)
            $('.fa-star:eq('+i+')').css('color', 'gold');
  }

function resetStarColors() {
    $('.fa-star').css('color', 'white');
}
</script>





</br> </br></br>
<?php include '../partials/barSearch.php'; ?>
<br>
<br>
<br>
<!--- Fin BOITE QUI FILTRE -->


<?php
  $id = $_GET['id']; 
  $reponse = $bdd->prepare('SELECT `id`, `location`, `price`, `id_tour_operator`, `images` FROM `destinations` WHERE id = ?');
  $reponse->execute(array($_GET['id']));
  $reponse1 = $bdd->prepare('SELECT `id`, `name`, `link` FROM `tour_operators` WHERE id = ?');
  $reponse1->execute(array($_GET['id']));
  while ($donnees = $reponse->fetch()) {
    while ($donnees1 = $reponse1->fetch()) {
  

  
?>


<div class="container">
    <div class="secondCard bg-light shadow-sm mb-12 mt-5">
        <div class="row no-gutters">
            <div class="card-image  border-top col-md-6">
                <img src="../assets/images/plages.jpg" class="card-img" alt="...">
            </div>
            <div class=" card-text col-md-6">
                <div class="secondCard-body text-center">
                    <h5 class="card-title"><?=($donnees['location']);?></h5>
                    <p class="card-text ">DESCRIPTION DU VOYAGE.</p>
                    <p>Prix TTC : <?=($donnees['price']);?> € </p>
                    <p>Proposé par : <?=($donnees1['name']);?></p>
                    <p>Site Officiel : <?=($donnees1['link']);?></p>
                </div>
            </div>
            <div class="card-review col-md-12">
                <div class="secondCard-body">
                    <div style="background-color: black; width: 505px; height: 30px;">
<truc style="color: white; padding-left:"><strong>Note :</strong></truc>
<i class="fa fa-star fa-2x" data-index="0" style="margin-left: 110px;"></i>
<i class="fa fa-star fa-2x" data-index="1"></i>
<i class="fa fa-star fa-2x" data-index="2"></i>
<i class="fa fa-star fa-2x" data-index="3"></i>
<i class="fa fa-star fa-2x" data-index="4"></i>
<br><br>
</div>


<!----- PARTIE REVIEW --------------->
<div class="review" style="border: 2px solid black; width: 100%; height: 350px;">
<h3 style="text-align: center;">Commentaires et avis</h3>
</div>
                    </p>
<input type="text" placeholder="Ecrivez un avis sur cette offre" style="width: 800px; height: 45px; margin-left: 25px; margin-top: 20px;">
<input type="submit" placeholder="Envoyer" style="height: 45px; width: 150px;">
                </div><br><br>
            </div>
        </div>
    </div>
</div>

<?php
  } }
  ?>





<?php include '../partials/form.php'?>

<?php include '../partials/footer.php'?>



<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>

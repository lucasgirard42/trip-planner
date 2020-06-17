<?php include '../partials/navbar.php';
     include '../partials/head.php';
 ?>

<?php


     $bdd= new mysqli("localhost","root","","comparoperator");

      if (isset($_POST['save'])) {
     // include '../config/autoload.php';
      $uID = $bdd->real_escape_string($_POST['uID']);
      $grade = $bdd->real_escape_string($_POST['grade']);
      $grade++;

      if (!$uID) {
         $bdd->query("INSERT INTO tour_operators (grade) VALUES ('$grade')");
         $sql = $bdd->query("SELECT gradeID FROM tour_operators ORDER BY gradeID DESC LIMIT 1");
         $uData = $sql->fetch_assoc();
         $uID = $uData['gradeID'];
  }    else
         $bdd->query("UPDATE tour_operators SET grade='$grade' WHERE gradeID ='$uID");
      
         exit(json_encode(array('gradeID' => $uID)));
  }

  $sql = $bdd->query("SELECT gradeID FROM tour_operators");
  $numR = $sql->num_rows;

  $sql = $bdd->query("SELECT SUM(grade) AS total FROM tour_operators");
  $rData = $sql->fetch_array();
  $total = $rData['total'];

  $avg = $total / $numR;
?>

<body>

<div style="background-color: black;">
<i class="fa fa-star fa-2x" data-index="0"></i>
<i class="fa fa-star fa-2x" data-index="1"></i>
<i class="fa fa-star fa-2x" data-index="2"></i>
<i class="fa fa-star fa-2x" data-index="3"></i>
<i class="fa fa-star fa-2x" data-index="4"></i>
<br><br>
<!--Note :  <?php echo $avg ?> Sur 5 -->
</div>

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
<br>
<br>
<h1 class="pays text-center">JAPON</h1>
<br>
<div class="container">
<?php  for ($i=1; $i <11; $i++):?>
    <div class="secondCard  shadow-sm mb-12 mt-5">
        <div class="row no-gutters">
            <div class="card-image  border-top col-md-6">
                <img src="../assets/images/plages.jpg" class="card-img" alt="...">
            </div>
            <div class=" card-text col-md-6">
                <div class="secondCard-body text-center">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            <div class="card-review col-md-12">
                <div class="secondCard-body">
                    <p class="card-text ">commentaire:</p>
                    <p>review:</p>
                    <p>note:</p>
                </div><br><br>
            </div>
        </div>
    </div>
    <?php endfor ?>
</div>







<?php include '../partials/form.php'?>

<?php include '../partials/footer.php'?>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</body>
</html>

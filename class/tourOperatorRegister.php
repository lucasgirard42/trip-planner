<?php
session_start();

require '../config/autoload.php';

// class TourOperator {
//     private $id;
//     private $name;
//     private $grade;
//     private $link;
//     private $is_premium;

//     public function __construct(){

//     }

//     public function getName(){
//         if(!empty($_POST["name"])) {
//             $location = htmlspecialchars($_POST["name"]);
//         } 
//     }

//     public function getGrade(){
//         if(!empty($_POST["grade"])) {
//             $location = htmlspecialchars($_POST["grade"]);
//         } 
//     }

//     public function getLink(){
//         if(!empty($_POST["link"])) {
//             $location = htmlspecialchars($_POST["link"]);
//         } 
//     }

//     public function getIsPremium(){
//         if(!empty($_POST["ispremium"])) {
//             $location = htmlspecialchars($_POST["ispremium"]);
//         } 
//     }

// }

// récupération des valeurs du formulaire
//if (isset($_POST['name']) && isset($_POST['link']) && isset($_POST['location']) && isset($_POST['price']) && isset($_POST['img_profil'])) {
$name = $_POST['name'];
//  $grade =  $_POST['grade'];
$link = $_POST['link'];
$location = $_POST['location'];
$price = $_POST['price'];
$id_tour_operator = 1;
$img_profil = $_POST['img_profil']; 




$joinOperatorId = $bdd->query('SELECT * 
                                FROM destinations
                                INNER JOIN tour_operators
                                ON destinations.id_tour_operator = tour_operators.id');

$tourOperatorIds = $joinOperatorId->fetchAll();




 

//préparation d'une requête
 $inserTO = $bdd->prepare("  INSERT INTO tour_operators( name,link )
                               VALUES (?,?) ");
                            
 $inserTO->execute([
          $name,
          $link  ]);
 
  $inserLocation = $bdd->prepare("  INSERT INTO destinations(location, price, id_tour_operator, images)
  VALUES (?,?,?,?) ");

$inserLocation->execute([
    $location,
    $price,
    $id_tour_operator,
    $img_profil




    
   

]);





header( 'location: ../view/accueil.php');
 ?>      
<?php

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
$name = $_POST['name'];
// $grade =  $_POST['grade'];
$link = $_POST['link'];


$premium = $_POST['premium'];




// var_dump($lastname);
// var_dump($firstname);
// var_dump($birthdate);
// var_dump($phone);
// var_dump($mail);

// requête en code SQL 'brut'
// $bdd->exec("INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
//             VALUES ('".$lastname."', '".$firstname."','".$birthdate."','". $phone ."','". $mail ."') ");

//préparation d'une requête

$inserTO = $bdd->prepare("  INSERT INTO tour_operators(name, grade, link, is_premium)
                                VALUES (?,?,?,?) ");
                            
$inserTO->execute([
        $name,
       
        
        $link,
        $premium 
        
        
        
]);
?>
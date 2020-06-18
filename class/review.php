<?php


// class Review {
//     private $id;
//     private $message;
//     private $author;
//     private $id_tour_operator;

//     public function __construct() {

//     }

//     public function getMessage(){
//         if(!empty($_POST["message"])) {
//             $location = htmlspecialchars($_POST["message"]);
//         } 
//     }

//     public function getAuthor(){
//         if(!empty($_POST["author"])) {
//             $location = htmlspecialchars($_POST["author"]);
//         } 
//     }



// --------------------------------------------------- SECTION NOTE AVEC ETOILES ----------------------------------------


//     public function getIdTourOperator(){
//         if(!empty($_POST["idTourOperator"])) {
//             $location = htmlspecialchars($_POST["idTourOperator"]);
//         } 
//     }
// }



if(!empty($_POST["author"])) {
    $author = htmlspecialchars($_POST["author"]);
    $insertAuthor = $bdd->prepare('INSERT INTO reviews (author) VALUES (?)');
    $insertAuthor->execute([$author]);
    
    
    setcookie("user_cookie", $author);
    $currentAuthor = $author; 
    $currentAuthor = $_COOKIE["user_cookie"];


    // VERIFICATION SI LE USER EXISTE OU PAS
    
    

    $userStatement = $bdd->prepare('SELECT * FROM reviews WHERE author = ?');
    $userStatement->execute([$_POST["author"]]);

    $user = $userStatement->fetch(PDO::FETCH_ASSOC);
    
    if($user){
        $user_id = $user["id"];
    }

    else {
        echo 'Le nom choisi existe déja !';


    // INSERTION USERS
    



    //RECUPERATION DERNIER ID UTILISATEUR

    $user_id = $bdd->lastInsertId();
    }
}


?>
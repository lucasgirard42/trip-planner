<?php
require '../config/autoload.php';

class Review {
    private $id;
    private $message;
    private $author;
    private $id_tour_operator;

    public function __construct() {

    }

    public function getMessage(){
        if(!empty($_POST["message"])) {
            $location = htmlspecialchars($_POST["message"]);
        } 
    }

    public function getAuthor(){
        if(!empty($_POST["author"])) {
            $location = htmlspecialchars($_POST["author"]);
        } 
    }

    public function getIdTourOperator(){
        if(!empty($_POST["idTourOperator"])) {
            $location = htmlspecialchars($_POST["idTourOperator"]);
        } 
    }
}
?>
<?php
require '../config/autoload.php';

// class Manager {
//     private $bdd;

//     public function __construct($bdd)
//     {
//       $this->setDb($bdd);
//     }

//     public function add(tourOperator $TO)
//     {
//         $q = $this->bdd->prepare('INSERT INTO tour_operators(name, link, is_premium) VALUE5 (:name, :link, :is_premium)');
//         $q->bindValue (':name', $TO->name());
//         $q->bindValue (':link', $TO->link());
//         $q->bindValue (':is_premium',$TO->is_premium());
//         $q->execute();

//         $TO->hydrate([
//             'name' => $this->bdd->name(),
//             'link' => $this->bdd->link(),
//             'is_premium' =>$this->bdd->is_premium(),
            
//         ])
//     }
// }



?>
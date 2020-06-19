<?php include '../partials/head.php';
include '../config/autoload.php'; 
include '../partials/navbar.php';



$request = $bdd->query("SELECT * from tour_operators");
$TOs = $request->fetchAll();


?>

<br>

    <h3 class="title-Admin mr-2" style="text-align: center;">Admin</h3>
    <svg class="login " width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" style="margin-left: 600px;;">
            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
    </svg>


<div class="container">
    <table class="table table-striped admin">
    <thead class="text-white bg-dark ">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nom Tour operateur</th>
        <th scope="col">lien du site</th>
        <th scope="col">Destination</th>
        <th scope="col">Membre premium</th>
        <th scope="col">supprimer</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($TOs as $TO) {?>
        <tr>
        <th scope="row"><?= ($TO['id']) ?></th>

        <td><?= ($TO['name'])?></td>
        <td><?= ($TO['link'])?></td>
        <td>japon</td>
        <td>oui</td>
        <td><button type="submit" name="submit" class="btn btn-danger">Supprimer</button></td>

        </tr>
    <?php } ?>
    </tbody>
    </table>
</div>

  
 



<?php include '../partials/footer.php'?>


<style>
  .admin{
    margin-bottom: 200px;
    margin-top: 50px;

  }
</style>


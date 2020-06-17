<?php include '../partials/head.php'; ?>


<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm ">
  <img src="../assets/images/rsz_1logo.png" alt="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav ">
            
        <li class="nav-item active">
            <a class="nav-link" href="../view/accueil.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../view/fiche-produit.php">Voyage</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../view/adminTO.php">Section Tour-opérateur</a>
            <a class="dropdown-item" href="#">Section Utilisteur</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../view/admin.php">Section Admin</a>
            </div>
        </li>
        
    </div>
    <h3 class="title-Admin mr-2">Admin</h3>
    <svg class="login " width="3em" height="3em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
            <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
    </svg>
</nav>

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
        <tr>
        <th scope="row">1</th>
        <td>clubmed</td>
        <td>www.clubmed.com</td>
        <td>japon</td>
        <td>oui</td>
        <td><button type="button" class="btn btn-danger">Supprimer</button></td>
        </tr>
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
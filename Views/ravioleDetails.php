<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<div class="row justify-content-center m-5 ">
    <a href="index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-secondary">Retour à la page d'accueil</button>
    </a>
</div>
<div class="card m-5">
    <h3 class="card-header"><?php echo $ravioles->getTitre()?></h3>
    <div class="card-body">
        <h5 class="card-title"><?php echo $ravioles->getIngredientPrincipal()?></h5>

    </div>
    <img style="height: 200px; width: 100%; display: block;" src="<?php echo('Assets/img/'.$ravioles->getFile()); ?>" alt="Image de la recette"  >
    <div class="card-body">
        <p class="card-text"><?php echo $ravioles->getRecette()?>.</p>
    </div>
</div>

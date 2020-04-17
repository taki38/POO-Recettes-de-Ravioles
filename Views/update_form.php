<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container">
    <h1>Mise à jour de la recette <?php echo $raviole->getTitre();?></h1>

    <a href="index.php?controller=default&action=home">
        <button style="margin-bottom:10px;" class="btn btn-secondary">Retour à la page d'acceuil</button>
    </a>

    <form method="post" action="index.php?controller=raviole&action=updateRaviole&id=<?php echo $raviole->getId()?>" enctype="multipart/form-data">
        <label>Titre</label>
        <input name="titre" value="<?php echo $raviole->getTitre()?>" class="form-control">

        <label>Ingrédient Principale</label>
        <input name="ingredient_principal" value="<?php echo $raviole->getIngredientPrincipal()?>" class="form-control">

        <label for="exampleTextarea">Recette</label>
        <textarea class="form-control" id="exampleTextarea" name="recette" rows="3">
            <?php echo $raviole->getRecette()?>
        </textarea>

        <label>Image</label>
        <img style="max-width: 140px;" src="<?php echo('Assets/img/'.$raviole->getFile()); ?>"
             alt="Image de la recette "/>"
        <input name="file" type="file" class="form-control">
        <input class="btn btn-secondary m-3" type="submit" value="valider">
    </form>
</div>

</body>
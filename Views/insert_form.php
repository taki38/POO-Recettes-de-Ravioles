<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<div class="container-fluid">
    <h1 class="text-center">Ajout d'une nouvelle recette</h1>
    <div class="container">
        <div class="row justify-content-center ">
            <a href="index.php?controller=default&action=home">
                <button style="margin-bottom:10px;" class="btn btn-secondary">Retour à la page d'accueil</button>
            </a>
        </div>

        <form method="post" action="index.php?controller=raviole&action=addRaviole" enctype="multipart/form-data">
            <label>Titre</label>
            <input name="titre" class="form-control" required>

            <label>Ingredient Principale</label>
            <input name="ingredient_principal" class="form-control" required>

            <label for="exampleTextarea">Recette</label>
            <textarea class="form-control" id="exampleTextarea" name="recette" rows="3"></textarea>

            <label>Image</label>
            <input name="file" type="file" class="form-control">

            <div class="row justify-content-center p-2">
                <input class="btn btn-secondary" type="submit" value="valider">
            </div>
        </form>
    </div>

</div>

</body>
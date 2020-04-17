<html>

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Taki Raviole</a>
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



            <div class="jumbotron">
                <h1 class="display-3">Bonjour tout le monde</h1>
                <p class="lead">Cette application a été crée par SEHAILIA TakiEddine pour tous les fans de Raviole</p>
                <hr class="my-4">
                <p>ça permet de bien pratiquer les concepts objets et le pattern MVC. </p>

            </div>

            <div class="row justify-content-center">
                <a  href="index.php?controller=raviole&action=addForm">
                    <button style="margin-bottom:10px;" class="btn btn-dark">Ajouter une recette</button>
                </a>
            </div>
            <div class="container">
                <table class="table table-hover">
                    <thead class="table-active">
                    <td>@Id</td>
                    <td>Titre</td>
                    <td>Ingrédient principale</td>
                    <td>Recette</td>
                    <td>Image</td>
                    <td>Actions</td>
                    </thead>

                    <tbody>
                    <?php
                    foreach ($ravioles as $rvl) {
                        ?>
                        <tr>
                            <td><?php echo $rvl->getId()?></td>
                            <td><?php echo $rvl->getTitre()?></td>
                            <td><?php echo $rvl->getIngredientPrincipal()?></td>
                            <td><?php echo $rvl->getRecette()?></td>
                            <td> <img style="max-width: 140px;" src="<?php echo('Assets/img/'.$rvl->getFile()); ?>"
                                      alt="Image de la recette "/>" </td>
                            <td>
                                <a href="/exam_phpOO/index.php?controller=raviole&action=select&id=<?php echo $rvl->getId()?>"><button type="button" class="btn btn-outline-info">+ de details</button></a>
                                <a href="/exam_phpOO/index.php?controller=raviole&action=delete&id=<?php echo $rvl->getId()?>"><button type="button" class="btn btn-outline-danger">Supprimer</button></a>
                                <a href="/exam_phpOO/index.php?controller=raviole&action=updateForm&id=<?php echo $rvl->getId()?>"><button type="button" class="btn btn-outline-warning">Modifier</button></a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>



</html>
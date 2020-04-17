<?php
class RavioleController
{

    public function addForm()
    {
        require 'Views/insert_form.php';
    }
    public function detail($id)
    {
        $ravioleManager = new RavioleManager();

        $ravioles = $ravioleManager->select($id);

        require 'Views/ravioleDetails.php';
    }


    public function persistForm()
    {
        $fileUrl = null;
        $allowedExtension = ['image/png','image/jpeg','image/gif'];
        if(in_array($_FILES['file']['type'],$allowedExtension)){
            if($_FILES['file']['size'] < 80000000){
                $extension = explode('/', $_FILES['file']['type'])[1];
                $fileUrl = uniqid().'.'.$extension;
                move_uploaded_file($_FILES['file']['tmp_name'],'Assets/img/'.$fileUrl);
            }

        }
        var_dump($fileUrl);
        $raviole = new Raviole(null, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $fileUrl);
        $ravioleManager = new RavioleManager();
        $ravioleManager->insert($raviole);

        header('Location: index.php?controller=default&action=home');

    }

    public function delete($id)
    {
        $ravioleManager = new RavioleManager();
        $ravioleManager->delete($id);
        header('Location: index.php?controller=default&action=home');
    }

    public function updateForm($id)
    {
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);

        require 'Views/update_form.php';
    }

    public function updateRaviole($id)
    {
        $ravioleManager = new RavioleManager();
        $raviole = $ravioleManager->select($id);
        $fileUrl = $raviole->getFile();

        if(isset($_FILES['file'])){
            $allowedExtension = ['image/png','image/jpeg','image/gif'];
            if(in_array($_FILES['file']['type'],$allowedExtension)){
                if($_FILES['file']['size'] < 80000000){
                    $extension = explode('/', $_FILES['file']['type'])[1];
                    $imageUrl = uniqid().'.'.$extension;
                    move_uploaded_file($_FILES['file']['tmp_name'],'Assets/img/'.$fileUrl);
                }

            }
        }


        $raviole = new Raviole($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $fileUrl);
        $ravioleManager->update($raviole);

        header('Location: index.php?controller=default&action=home');
    }
}

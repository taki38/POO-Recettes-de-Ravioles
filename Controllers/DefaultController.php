<?php
class DefaultController{

    public function home()
    {
        $ravioleManager = new RavioleManager();

        $ravioles = $ravioleManager->selectAll();

        require 'Views/homepage.php';
    }
}
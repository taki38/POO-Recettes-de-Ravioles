<?php

class Raviole
{
    private $id;
    private $ingredient_principal;
    private $titre;
    private $recette;
    private $file;

    public function __construct($id = null, $ingredient_principal, $titre, $recette, $file)
    {
        $this->id = $id;
        $this->ingredient_principal = $ingredient_principal;
        $this->titre = $titre;
        $this->recette = $recette;
        $this->file = $file;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getIngredientPrincipal()
    {
        return $this->ingredient_principal;
    }

    /**
     * @param mixed $ingredient_principal
     */
    public function setIngredientPrincipal($ingredient_principal)
    {
        $this->ingredient_principal = $ingredient_principal;
    }

    /**
     * @return mixed
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param mixed $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return mixed
     */
    public function getRecette()
    {
        return $this->recette;
    }

    /**
     * @param mixed $recette
     */
    public function setRecette($recette)
    {
        $this->recette = $recette;
    }

    /**
     * @return mixed
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param mixed $file
     */
    public function setFile($file)
    {
        $this->file = $file;
    }
}

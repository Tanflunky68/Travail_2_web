<?php
    class Produit{
        private $id;
        private $nom;
        private $prix;
        private $categorie;

        function __construct($id, $nom, $prix, $categorie) {
            $this->id = $id;
            $this->nom = $nom;
            $this->prix = $prix;
            $this->categorie = $categorie;
          }

          
        function getId()
        {
            return $this->id;
        }

        function getNom()
        {
            return $this->nom;
        }

        function getPrix()
        {
            return $this->prix;
        }

        function getCategorie()
        {
            return $this->categorie;
        }



        function setId($id)
        {
            $this->$id = $id;
        }

        function setNom($nom)
        {
            $this->$nom = $nom;
        }

        function setPrix($prix)
        {
            $this->$prix = $prix;
        }

        function setCategorie($categorie)
        {
            $this->$categorie = $categorie;
        }
    }
?>

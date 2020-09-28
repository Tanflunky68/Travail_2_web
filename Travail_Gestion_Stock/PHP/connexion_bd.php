<?php
   include 'produit.php';

   function milliseconds() {
        $mt = explode(' ', microtime());
        return ((int)$mt[1]) * 1000 + ((int)round($mt[0] * 1000));
    }

   function insertion($id ,$nom, $prix, $categorie)
    {
        try 
        {   
            $connexion = new PDO("mysql:host=localhost;dbname=travail_2,charset=utf8", "root" ,"");
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $id = milliseconds();
            $nom = $_POST["nom"];
            $prix = $_POST["prix"];
            $categorie = $_POST["categorie"];
      

            $requete = "INSERT INTO produit VALUES('$id','$nom', '$prix','$categorie')"; 
            $connexion->exec($requete);
	        $connexion = null;
            echo "Ajout réussi";

            header('Location: ../HTML/Main.html');
            exit;
        } 
        catch(PDOException $e) {
              echo "Échec de connexion à la base de données: " . $e->getMessage();
        }
    }

    function liste()
    {
        try 
        {
            $connexion = new PDO("mysql:host=localhost;dbname=travail_2", "root", "");
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $requete = "SELECT * FROM produit";
            $resultat = $connexion->query($requete);
            $ligne = $resultat->fetchAll(); 

            foreach($ligne as $l)
            {
                echo $l[1] . "<br>";
            }
        } 

        catch(PDOException $e) {
        echo "Échec de connexion à la base de données: " . $e->getMessage();
        }
    }

    

    function update()
    {
        try 
        {
            $connexion = new PDO("mysql:host=localhost;dbname=test;port=3308", "root", "", );
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $requete = "UPDATE locaux set numero='1515' WHERE id='SC-02'";
            $connexion->query($requete); 
	       
	        $connexion = null;
            echo "Modification effectuée avec succès";
        } 
        catch(PDOException $e) {
            echo "Échec lors de la connexion à la base de données: " . $e->getMessage();
        }
    }



    function supprimer()
    {
        try 
        {
            $connexion = new PDO("mysql:host=localhost;dbname=test;port=3308", "root", "", );
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $requete = "DELETE FROM locaux WHERE id='SC-01'";
            $connexion->exec($requete); 
            echo "Suppression effectuée avec succès";

	        $connexion = null;
        } 
        catch(PDOException $e) {
            echo "Échec lors de la connexion à la base de données: " . $e->getMessage();
        }
    }





?>

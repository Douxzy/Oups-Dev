<?php
                $servername = "localhost";
                $username = "root";
                $password = "";
try{
        $bdd = new PDO("mysql:host=$servername;dbname=evos", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
        echo "Connection Réussie";
}

catch(Exception $e)
{
   //You are here means that the exception occurred now do something else here.
}
if(isset($_POST['ok'])){
        $nom = $_POST ['Nom'];
        $prenom = $_POST ['prenom'];
        $email = $_POST ['email'];
        $tel = $_POST ['Téléphone'];
        $Question = $_POST ['Question'];
        
        $requete = $bdd->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :email, :tel, :question) " );
}       $requete->execute(
        array(
                "nom" => $nom,
                "prenom" => $prenom,
                "email" => $email,
                "tel" => $tel,
                "question" => $Question,
        )
        );  

        $reponse = $requete->fetchAll(PDO::FETCH_ASSOC);
        var_dump($reponse);

?>
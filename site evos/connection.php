<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection - Oups Dev</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<header>
    <nav class="nav">   
        <a class="a1" href="index.html">Oups Dev - By Evos</a>
    <div class="div1">
    <ul class="list">   
        <li><a class="a1" href="index.html">Accueil </a></li>
        <li><a class="a1" href="services.html">Services</a></li>
        <li><a class="a1" href="info.html">Info</a></li>
        <li><a class="a1" href="blog.html">Blog</a></li>
        <li><a class="a1" href="#">Formulaire</a></li>
    </ul>
    </div>  
    </nav>
</header> 
<body>
    <h1>Oups-Dev by Evos</h1>
    <section>
        <form action="trai.php" method="POST">
            <section>
            <input type="radio" name="civilite" value="Madame" id="Madame" />
            <label class="nn" for="Madame" class="radio-inline">Madame</label>
            <input type="radio" name="civilite" value="Monsieur" id="Monsieur" />
            <label class="nn" for="Monsieur" class="radio-inline">Monsieur</label>
        </section>
            <p> </p>
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prenom" required>
            <label for="nom">Nom</label>
            <input aria-required="true" type="text" name="Nom" id="nom" placeholder="Nom" required>
            <label for="email">E-mail</label>
            <input type="text" name="email" id="email" placeholder="E-mail" required="@">
            <label for="tel">Numero de Téléphone</label>
            <input type="tel" name="Téléphone" id="tel" placeholder="Numero de Téléphon" required>  
            <label for="Question">Votre Demande</label>
            <input class="question" type="text" name="Question" id="Question" placeholder="Question" required> 
            <p> </p>
            <input type="submit" value="Envoyer" name="ok">
        </form>
    </section>

</body>
<footer>

    <h1>Nos services</h1>
    <div class="services">
        
        <div class="service">
            <h3>Livraison 24H</h3>
            <p>tous nos sites sont livrés en 24 heures</p>
        </div>

        <div class="service">
            <h3>Paiement en ligne</h3>
            <p>Paiement en ligne, plus sûr et simple.</p>
        </div>

        <div class="service">
            <h3>Satisfait ou remboursé</h3>
            <p>Si le site ne vous plaît pas, nous vous le refaisons deux fois sinon, nous vous le remboursons.</p>
        </div>

    </div>

    <p id="contact">Contact : 07 55 89 58 54 | Oups Dev &copy; 2024, By Evos.</p>
</html>
    
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>nickel</title>
    <link rel="stylesheet" href="nickel.css" />
</head>

<body>

    <header>
        <?php
        require('header.php');
        ?>
    </header>

    <h1><br>Bienvenue dans votre compte sans banque</br>

        <font color="orange">Vous comptez pour nous... nous comptons pour vous</font>
    </h1>

    <div class="identifiant">

        <form methode="get" action="traitement.php">
            <label for="identifiant">Votre Identifiant :</label>
            <input id="identifiant" name="identifiant" type="text" />
            <input type="submit" value="Enregistrer mon identifiant" />
        </form>
    </div>

    <aside>
        <?php
        require('aside.php');
        ?>
    </aside>

    <section>
        <div id="aide">
            <div class="contenuAide">
                <div class="table">
                    <div class="table-row">
                        <img id="imgCarte" class="code-carte" src="https://mon.compte-nickel.fr/Styles/Img/card-code-2.png">
                    </div>
                    <div class="table-cell">
                        <h4>
                            <font color="orange">Où retrouver votre identifiant web ?</font>
                        </h4>
                        <p3><b> Vous êtes client Compte-Nickel ou Compte-Nickel 12/18 ans: </b> votre identifiant se trouve au dos de votre MasterCard® Nickel.Vous êtes le parent ou tuteur légal d'un enfant ayant un Compte-Nickel 12/18 ans : utilisez l'identifiant
                            de votre Compte-Nickel pour accéder à votre espace parent. Si vous n'avez pas de Compte-Nickel à votre nom, vous avez reçu votre identifiant sur l'email après l'ouverture du Compte-Nickel 12/18 ans.</p3>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <h5><b><font color="orange">Où retrouver votre code d'accès ?</b></font>
            </h5>
            <p4>Un code de sécurité vous est envoyé par SMS après avoir saisi et validé votre identifiant pour la première fois.Saisissez ce code et créez votre code d'accès à 6 chiffres pour pouvoir profiter à 100% de votre Compte-Nickel.</p4>
        </div>
    </section>


    <div class="important">
        <h5><b><font color="orange">Important. Soyez vigilant aux sites malveillants et au phishing</font></b></h5>
        <p4><b>Le phishing est une pratique malveillante destinée à collecter vos codes d'accès afin d'accéder à votre compte.</b> Les fraudeurs se font passer pour Compte-Nickel ou l'une de vos connaissances et vous invitent par exemple à saisir votre code
            d'accès par mail ou sur un faux site internet.</p4>
        </br>
        <p5><b>Important:</b> Nous ne vous enverrons jamais de mail vous demandant de confirmer votre code d'accès web ni votre numéro de carte MasterCard® Nickel</p5>
        <a href="https://faq.compte-nickel.fr/hc/fr/articles/203297266-Sites-malveillants-et-PHISHING">Ensavoir+ ></a>
        </br>
        <img src="https://mon.compte-nickel.fr/Styles/Img/EXCLAMATION.png">
    </div>

</body>

</html>
<?php


?>

<!doctype html>

<html lang="fr">

<head>
    <meta charset="utf-8">

    <title><?php echo $title; ?></title>
    <meta name="description" content="CaCo, la cafetière connectée.">
    <meta name="author" content="CaCo">

    <link rel="stylesheet" href="css/css.css">

</head>

<body>


    <div id="conteneur">



        <aside id="side" class="bg-trans">

            <a href="index.php">
                <div id="logo"><img src="img/logotop.png" /></div>
            </a>

            <nav class="menu" role="navigation">
                <ul class="liste">
                    <a href="index.php">
                        <li><span class="nav-icon"><img src="img/dashboard.png" alt="Accueil" /></span><span class="nav-text"> Dashboard</span></li>
                    </a> </br>
                    Gestion :
                    <li><a href="index.php?cible=admin&fonction=gestion-user"><span class="nav-icon"><img src="img/admin.png" alt="Mon compte" /></span> <span class="nav-text">Utilisateurs</span></a></li>
                    <li><a href="index.php?cible=admin&fonction=gestion-foyer"><span class="nav-icon"><img src="img/home.png" alt="Stock" /> </span><span class="nav-text">Foyers</span></a></li>

                </ul>
            </nav>

        </aside>

        <header class="bg-trans">
            <div class="droite">
                <p><?php echo $_SESSION['prenom']?></p>
                <img src="img/icon.png" />
                <img src="img/notif.png" />
                <a href="index.php?cible=connexion&fonction=deconnexion&token=<?php echo $_SESSION['token']; ?>">
                    <div class="droite"><img src="img/deco.png" /></div>
                </a>
            </div>

        </header>

        <div class="wrap">
            <main>
                <div id="page-wrap" class="bg-trans">

                    <div id="page-header">
                        <img src="img/home.png" alt="intitulé img" class="icon-page" />
                        <h1><?php echo $title; ?></h1>
                    </div>

                    <div class="page-content">
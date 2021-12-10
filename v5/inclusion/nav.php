<!DOCTYPE html>
<html lang="fr-ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métiers Québec - Informations sur l'éducation, le travail et plus dans la région du Québec</title>
    <link rel="icon" type="image/x-icon" href="images/logo.svg">
    <link rel="stylesheet" href="../v5/css/normalize.css">
    <link rel="stylesheet" href="../v5/css/nav.css">
    <link rel="stylesheet" href="../v5/css/apparence.css">
    <?php if($site == "accueil") {?>
    <link rel="stylesheet" href="../v5/css/index.css">
    <link rel="stylesheet" href="../v5/css/caroussel.css">
    <?php }
    else if($site == "introuvable"){?>
    <link rel="stylesheet" href="../v5/css/introuvable.css">
    <?php }
    if($site == "education"){?>
    <link rel="stylesheet" href="../v5/css/education.css">        
    <?php }?>
</head>
<body>
    <header>
        <div class="header-div">
        <a href="index.php"><img src="images/logo.svg" alt="" class="logo"></a>
        <h1>| Métiers Québec</h1>
        <nav>
            <div id="nav-education" class="menu-sections">
                <a href="education.php">Éducation</a><span id="burger-educ" class="burger" onclick="bougerMenu(0)"> <img src="images/menu-burger.svg" alt=""></span>
            </div>
            <div id="nav-travail" class="menu-sections">
                <a href="page-introuvable.php">Travail</a><span id="burger-travail" class="burger"  onclick="bougerMenu(1)"><img src="images/menu-burger.svg" alt=""></span>
            </div>
            <div id="nav-etranger" class="menu-sections">
                <a href="page-introuvable.php">Étranger</a><span id="burger-etranger" class="burger" onclick="bougerMenu(2)"><img src="images/menu-burger.svg" alt=""></span>
            </div>
        </nav>
        </div>
    </header>
    <div id="liens-burger">
        <div id="liens-burger-educ" class="liens-burger-section">
            <a href="page-introuvable.php">Comprendre l'éducation au Québec</a>
            <div class="ligne-droite"></div>
            <a href="page-introuvable.php">Listes des écoles post-secondaires</a>
        </div>
        <div id="liens-burger-travail" class="liens-burger-section">
            <a href="page-introuvable.php">Chercher un emploi</a>
            <div class="ligne-droite"></div>
            <a href="page-introuvable.php">Liste des métiers</a>
            <div class="ligne-droite"></div>
            <a href="page-introuvable.php">Choix de carrière</a>
        </div>
        <div id="liens-burger-etranger" class="liens-burger-section">
            <a href="page-introuvable.php">Étudier au Québec</a>
            <div class="ligne-droite"></div>
            <a href="page-introuvable.php">Étudier ailleurs au Canada</a>
            <div class="ligne-droite"></div>
            <a href="page-introuvable.php">Étudier ailleurs dans le monde</a>
        </div>
    </div>
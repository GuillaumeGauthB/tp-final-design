<?php 
$site = 'accueil';
include("inclusion/nav.php");
?>
<div class="caroussel" id="caroussel">
        <div class="boites">
            <div class="caroussel-img">
                <a class="derniere" onclick="plusSlides(-1)">&#10094;</a>
                <img src="images/pharmacien.jpg" alt="">
            </div>
            <div class="caroussel-reste">
                <a class="prochaine" onclick="plusSlides(1)">&#10095;</a>
                <h2 class="caroussel-titre">Ajout d'un nouveau métier au site!</h2>
                <div class="caroussel-texte">Vous pouvez maintenant trouver toutes les informations pertinentes sur le métier de <span class="souligner gras">technicien(ne) en pharmacie</span> ici, à portée de votre souris! Vous pouvez y trouver le salaire, le niveau d'éducation nécessaire et beaucoup plus en cliquant sur le lien si dessous!</div>
                <div class="caroussel-footer">
                    <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                    <div class="caroussel-date">Février 2021</div>
                </div>
            </div>
        </div>
        <div class="boites">
            <div class="caroussel-img">
                <a class="derniere" onclick="plusSlides(0)">&#10094;</a>
                <img src="images/bartender.jpg" alt="">
            </div>
            <div class="caroussel-reste">
                <a class="prochaine" onclick="plusSlides(2)">&#10095;</a>
                <h2 class="caroussel-titre">Ajout de nouveaux métiers au site!</h2>
                <div class="caroussel-texte">Vous pouvez maintenant trouver toutes les informations pertinentes sur les métiers de <span class="souligner gras">bartender</span>, d'<span class="souligner gras">opérateur(trice) de machinerie légère</span> et de <span class="souligner gras">préposé au service automobile</span> ici, à portée de votre souris! Vous pouvez y trouver le salaire, le niveau d'éducation nécessaire et beaucoup plus en cliquant sur le lien si dessous!</div>
                <div class="caroussel-footer">
                    <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                    <div class="caroussel-date">Décembre 2020</div>
                </div>
            </div>
        </div>
        <div class="boites">
            <div class="caroussel-img">
                <a class="derniere" onclick="plusSlides(1)">&#10094;</a>
                <img src="images/nouvel-an.jpg" alt="">
            </div>
            <div class="caroussel-reste">
                <a class="prochaine" onclick="plusSlides(3)">&#10095;</a>
                <h2 class="caroussel-titre">Bonne année 2020!</h2>
                <div class="caroussel-texte">Joyeux Nouvel An à tous! Souhaitons que l'année 2020 soit aussi plaisante que 2019!</div>
                <div class="caroussel-footer">
                    <a href="page-introuvable.php" class="caroussel-lien">Pour en savoir plus >></a>
                    <div class="caroussel-date">Janvier 2020</div>
                </div>
            </div>
        </div>
    </div>
    <div class="contour-medium">
        <div class="contour-petit">
            <h2 class="titre-body">Bienvenue sur Métiers Québec!</h2>
            <p>Sur ce site, vous découvrirez une panoplie de programmes d'études presents au Quebec ainsi que diverses informations sur ceux-ci, ainsi qu'une multitude de métiers et de professions, suivit d'informations sur ceux-ci. </p>
            <span class="division"></span>
            <p class="barre-noire"></p>
            <div class="nouvelles">
                <h2 class="titre-body">Nouvelles</h2>
                <div>
                    <h3 class="titre-body">Septembre 2021</h3>
                    <p>- Connais-tu les nouveaux programmes à l'automne prochain ?, consulte la section <a href="page-introuvable.php">"quoi de neuf"</a></p>
                </div>
                <div>
                    <h3 class="titre-body">Février 2021</h3>
                    <p>- Ajout d'un nouveau métier : <a href="page-introuvable.php">technicien(ne) en pharmacie</a></p>
                </div>
                <div>
                    <h3 class="titre-body">Décembre 2020</h3>
                    <p>- Ajout de 3 nouvelles pages de métier : <a href="page-introuvable.php">opérateur(trice) de machinerie légère</a>, <a href="page-introuvable.php">préposé(e) au service automobile</a> et <a href="page-introuvable.php">mixologue ou barman(barmaid)</a></p>
                    <!-- <br> -->
                    <p>- Mise à jour des statistiques d'admission à l'automne 2020 pour les programmes d'études universitaires contingentés</p>
                </div>
                <div>
                    <h3 class="titre-body">Octobre 2020</h3>
                    <p>- Mise à jour complète des statistiques de placement les plus récentes disponibles pour l'ensemble des métiers de la formation professionnelle.</p>
                </div>
                <div>
                    <h3 class="titre-body">Septembre 2020</h3>
                    <p>- Mise à jour des statistiques d'admission à l'automne 2020 pour les programmes d'études collégiales contingentés</p>
                    <!-- <br> -->
                    <p>- Mise à jour complète des statistiques de placement les plus récentes disponibles pour l'ensemble des professions de niveau collégial</p>
                </div>
                <div>
                    <h3 class="titre-body">Janvier 2020</h3>
                    <p>- Ne manque les portes ouvertes de l'hiver dans les établissements de formation professionnelle, technique et universitaire. Tous les détails sur Facebook</p>
                </div>
                <p class="gras">- BONNE ANNÉE 2020 !</p>
            </div>
            <p class="barre-noire"></p>
            <p class="gras">Dernière mise à jour le 13 octobre 2021</p>
        </div>
    </div>
    <footer class="contacts">
        <a href="page-introuvable.php">Nous contacter</a>
    </footer>
    <script src="js/caroussel.js"></script>
    <script src="js/nav.js"></script>
</body>
</html>
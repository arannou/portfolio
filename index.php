<?php session_start(); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Alicia Rannou</title>
	<meta name="description" content="portfolio alicia rannou MMI" />
	<meta name="keywords" content="alicia rannou multimédia MMI internet ingénieur ingénieur developpement web PHP linkedin recruter job enssat html angular front-end" />
	<meta name="Resource-type" content="Document" />

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/faviconV1.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<link href='https://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>

	<script src="script.js"></script>


</head>

<body>
<?php

	if(isset($_SESSION["status"])){
		if($_SESSION["status"]==1) {
			echo "<div id='msg'><p>Votre email a bien été envoyé.</p></div>";
			$_SESSION["status"]=null;
		}
		else echo "<div id='msg'><p>Une erreur s'est produite lors de l'envoi de l'email.</p></div>";
	}
	?>

	<header>
		<nav>
			<ul>
				<li class="active">
					<a href="#Présentation">Présentation</a>
				</li>
				<li ><a href="#Parcours">Parcours</a>
			</li>
			<li><a href="#Créations">Créations</a>
		</li>
		<li><a href="#Contact">Contact</a>
		</li>
		</ul>
		</nav>
		<h1>Alicia Rannou</h1>
	</header>

	<main>

		<section class="presentation">
			<div>
				<img alt="Alicia Rannou" src="images/moi.png" />
			</div>
			<aside>
				<h1>Présentation</h1>
				<p>Bonjour ! Je m'appele Alicia et je vous souhaite la bienvenue sur mon site !</p>
				<p>Passionnée par le dessin depuis toute petite, j'ai rapidement su affirmer ma <strong>créativité</strong> et mon désir de réaliser des choses originales, qui sortent du commun. Toujours envieuse d'<strong>apprendre</strong>, j'ai vite été atirée par les possibilités quasi infinies que donnent l'informatique.</p>
				<p>Aujourd'hui en <strong>formation d'ingénieur Informatique Multimédia et Réseaux en alternance</strong> à Lannion, j'ai la joie de pouvoir enrichir et exercer mes cométences dans les deux domaines que j'apprécie le plus, le <strong>graphisme</strong> et le <strong>developpement web</strong>. C'est ce plaisir de travailler dans ce qui me plaît qui me motive chaque jour pour donner le meilleur de moi-même.</p>
				<p>Grâce à mon alternance, j'ai depuis 3 ans un pied dans le <strong>monde du travail</strong> où j'exerce la fonction de lead developer sur les technologies web et android. Les <strong>nouvelles technologies</strong> me passionnent et la conception d'applications mobiles est devenue mon hobby du moment. Venez en découvrir plus sur mon GitHub ;)</p>

				<div class="bouton">
					<a href="CV%20v8.0.pdf" target="_blank">Télecharger mon CV</a>
				</div>
				<a href=""><img class='icon' alt="Mon Linkedin" src="images/linkedin.png" /></a>
				<a href=""><img class='icon' alt="Mon GitHub" src="images/github.png" /></a>
			</aside>
		</section>


		<section id="section2">
			<div class="parcours">
				<h1>Parcours</h1>
				<div>
					<li>Depuis Septembre 2016</li>
					<li><p>Alternance en conception et développement web entre Orange Business Services à Cesson-Sévigné (35) et l'ENSSAT (École Nationale Supérieure des Sciences Appliquées et de Technologie) à Lannion (22) en formation ingénieur Informatique Multimédia et Réseau.</p>
					<p>En entreprise, j'interviens au sein de l’équipe de supervision des équipements et services du cloud. J'ai eu pour mission la refonte d’un portail web et l'ajout de fonctionnalités. Puis on m'a confié un projet de 7 mois porté sur la conception d’une application mobile en Kotlin.</p>
					<p>A l'école, j'approfondi ce que j'ai vu en DUT avec une approche ingénieur. Les cours de machine learning, synthèse d'images, conception de services et ergonomie, object connectés ou encore interfaces riches complètent ma culture de développeuse.</p>
					</li>
				</div>
				<div>
					<li>Septembre 2014 - Juin 2016</li>
					<li>DUT MMI (Métiers du Multimédia et de l'Internet) à Laval (53). Cette formation en deux ans inclu du développement web, de la création multimédia, du graphisme et de la programmation.</li>
				</div>
				<div>
					<li>Avril - Mai 2016</li>
					<li>Stage en développement web et webdesign chez Assura à Changé (53). Durant ce stage j'ai ajouté des fonctionnalités au site extranet de l'agence, pour la gestion des contrats de clients.</li>
				</div>
				<div>
					<li>Juillet - Août 2015</li>
					<li>Développeuse web et base de données en interim chez Boccard à Montauban-de-Bretagne (35). J'ai été amenée à créer un site intranet permettant de consulter mettre à jour la base de données des projets réalisés par l'entreprise.</li>
				</div>
				<div>
					<li>Juin 2014</li>
					<li>Obtention du baccalauréat Scientifique spécialité Informatique et Sciences du Numérique, mention bien</li>
				</div>
				<!-- <div>
					<li>2011 - 2014</li>
					<li>Lycée général Renée Cassin de Montfort-sur-Meu (35)</li>
				</div> -->
			</div>
		</section>

		<section id="section3">
			<div class="slide" id="slide1" data-anchor="slide1">
				<img src="images/Logos.jpg" alt="image01">
				<div>
					<p>Pictogrammes</p>
					<span>Création d'icônes pour un logiciel de dessin fictif. Chaque icône représente une fonction. Imagination d'un univers graphique marqué par la monochromie. Vue isométrique stylisée.</span>
				</div>
			</div>

			<div class="slide" id="slide2" data-anchor="slide1">
				<img src="images/L'univers-des-chaussures.jpg" alt="image02">
				<div>
					<p>Storyboard photo</p>
					<span>Montage réalisé avec Photoshop. Scénario en trois temps à visée humoristique.</span>
				</div>
			</div>

			<div class="slide" id="slide3" data-anchor="slide1">
				<img src="images/pbste.jpg" alt="image03">
				<div>
					<p>Affiche sur un problème de société</p>
					<span>Affiche contre la pollution et pour le tri. Photos prises en studio, montage avec Photoshop.</span>
				</div>
			</div>

			<div class="slide" id="slide4" data-anchor="slide1">
				<img src="images/baleine_airlines-2.0.jpg" alt="image04">
				<div>
					<p>Montage à la Magritte</p>
					<span>Hybridation de deux images issues de contextes très différents pour créer une situation fantastique. Utilisation de Photoshop.</span>
				</div>
			</div>

			<div class="slide" id="slide5" data-anchor="slide1">
				<img src="images/couverture_v2_01.jpg" alt="image05">
				<div>
					<p>Couverture de livre</p>
					<span>Proposition de couverture pour l'ouvrage de P. Cottier et F. Burban sur le numérique d'aujourd'hui.</span>
				</div>
			</div>

			<div class="slide" id="slide6" data-anchor="slide1">
				<img src="images/fiche-recette-V1.0.png" alt="image05">
				<div>
					<p>Feed Me</p>
					<span>Réalisation d'une charte graphique pour un site conceptuel de recettes de cuisine pour étudiant. Couleurs vives et ambiance jeune.</span>
				</div>
			</div>

			<div class="slide" id="slide7" data-anchor="slide1">
				<img src="images/Affiche-mmi.jpg" alt="image05">
				<div>
					<p>Affiche pour la formation DUT MMI</p>
					<span>Proposition de visuel présentant la formation DUT MMI</span>
				</div>
			</div>
			<div class="slide" id="slide8" data-anchor="slide1">
				<img src="images/mascotte-3D-finale.jpg" alt="image05">
				<div>
					<p>Webimmi</p>
					<span>Réalisation de l'une mascotte symbolisant la formation Métiers du Multimédia et de l'Internet. Production en 3D avec Blender</span>
				</div>
			</div>

			<div class="slide" id="slide9" data-anchor="slide1">
				<img src="images/Sides.jpg" alt="image05">
				<div>
					<p>Sides</p>
					<span>Création d'une police de caractères, inspirée de motifs tribaux et de labyrinthes. Disponible sur <a href="http://www.dafont.com/fr/sides.font">Dafont.com</a></span>
				</div>
			</div>

			<div class="slide" id="slide10" data-anchor="slide1">
				<img src="images/labyzor.jpg" alt="image01">
				<div>
					<p>Labyzor</p>
					<span>Projet tutoré 2015. Réalisation en groupe d'un site web intégrant une gestion de comptes utilisateurs, un jeu en javascript, un chat en Php et des flux musicaus issus de Deezer.</span>
				</div>
			</div>

			<div class="slide" id="slide11" data-anchor="slide1">
				<img src="images/boccard.jpg" alt="image02">
				<div>
					<p>Boccard benchmarcking</p>
					<span>Site intranet pour la gestion des données relatives aux projets de l'entreprise. Utilisation de HTML / CSS, jQuery et PHP. Fonction de recherche, tri, import et export excel, administration.</span>
				</div>
			</div>

			<div class="slide" id="slide12" data-anchor="slide1">
				<img src="images/accueil_2.jpg" alt="image02">
				<div>
					<p>Site web pour artisan</p>
					<span>Proposition de site web pour un artisan local. Codé en HTML et CSS.</span>
				</div>
			</div>

			<div class="slide" id="slide13" data-anchor="slide1">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8Q8GK6YEg_8" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Publicité contre un problème de société</p>
					<span>Court clip publicitaire luttant contre le gaspillage du papier, dénonçant la déforestation. Montage avec Premiere Pro.</span>
				</div>
			</div>

			<div class="slide" id="slide14" data-anchor="slide1">
				<img src="images/Scan%20storyboard_01.jpg" alt="" />
				<div>
					<p>Storyboard<p>
					<span>Storyboard de la publicité contre le gaspillage.</span>
				</div>
			</div>

			<div class="slide" id="slide15" data-anchor="slide1">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/L3R3iV24RRs" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Touttim - "J'oublie"</p>
					<span>Clip musical tourné pour le groupe Touttim. Un homme évolue dans un appartement couvert de post-it. On suit sa pensée au fil des post-it. Au final, les post-it forment un visage, celui de la femme qu’il aime toujours.</span>
				</div>
			</div>

			<div class="slide" id="slide16" data-anchor="slide1">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/y57aMMfH_8M" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Les circuits courts de consommation</p>
					<span>Micro-trottoir sur le marché de Laval. Les commerçants et clients savent-ils vraiment ce que sont les circuits courts ?</span>
				</div>
			</div>

<!--
			<div class="slide" id="slide17" data-anchor="slide1">
				<img src="images/othello.jpg" alt="image02">
				<div>
					<p>Jeu d'othello en Java</p>
				</div>
			</div>
-->

			<div class="slide" id="slide18" data-anchor="slide1">
				<img src="images/mastermind.jpg" alt="image02">
				<div>
					<p>Jeu de mastermind</p>
					<span>Jeu réalisé en Python. Choix de la difficulté au lancement de la partie. Projet de fin d’année en Terminale Scientifique option Informatique et Sciences du Numérique.</span>
				</div>
			</div>

			<div class="slide" id="slide19" data-anchor="slide1">
				<img src="images/statisommeil.jpg" alt="image02">
				<div>
					<p>Statisommeil</p>
					<span>Site web présentant de façon ludique des statistiques sur le sommeil, dans le monde et notre quotidien. Réalisé en jQuery. A découvrir <a href="http://perso.univ-lemans.fr/~i140994/">ici</a>.</span>
				</div>
			</div>

			<div class="slide" id="slide20" data-anchor="slide1">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/VThFZLVns1I" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Catch me if you Can - Animatique</p>
					<span>Animatique d'un clip humoristique avec des cubes personnifiés représentant les quatres DUT de l'IUT de Laval</span>
				</div>
			</div>

			<div class="slide" id="slide21" data-anchor="slide1">
				<img src="images/rendu%202.png" alt="image02">
				<div>
					<p>Catch me if you Can - Modelisation</p>
					<span>Modélisation 3D sous Blender.</span>
				</div>
			</div>

			<div class="slide" id="slide22" data-anchor="slide1">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Th_kFzZ7AYw" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Catch me if you Can - Version Finale</p>
					<span>Animation finale sous Blender</span>
				</div>
			</div>

			<div class="slide" id="slide23" data-anchor="slide1">
				<img src="images/assura.jpg" alt="image02">
				<div>
					<p>Site extranet pour Assura</p>
					<span>Ajout de fonctionnalités en PHP pour la gestion des contrats pour les assurances de transport de marchandises, correction de bugs</span>
				</div>
			</div>

<!--
			<div class="slide" id="slide24" data-anchor="slide1">
				<video src="images/johnDifoul.mp4" width="480px" controls>Oups</video>
				<div>
					<p>Montage sonore sur la bande dessinée John difoul</p>
				</div>
			</div>
-->

			<div class="slide" id="slide25" data-anchor="slide1">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/Bj-sgFxA5tU" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Cuisinaute</p>
					<span>Animation After Effects présentant une application fictive de recettes de cuisine pour tablette, à destination des enfants.</span>
				</div>
			</div>

			<div class="slide" id="slide26" data-anchor="slide1">
				<img src="images/gg.jpg" alt="image02">
				<div>
					<p>Greed's Gale</p>
					<span>Projet tutoré 2016. Jeu vidéo en 2D mélant un shoot’em up et des phases d’infiltration dans un univers médiéval et fantastique. Vous incarnez Robb, un voleur qui parcours le pays à dos de dragon pour subtiliser les joyaux du Roi. Sur son chemin se dresseront de nombreux ennemis. Réalisé en groupe avec Unity.</span>
				</div>
			</div>

			<div class="slide" id="slide27" data-anchor="slide1">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/1k-B0s3KspM" frameborder="0" allowfullscreen></iframe>
				<div>
					<p>Mad Jack</p>
					<span>Utilisation de Max pour appilquer des effets vidéo et des incrustations sur un tournage en temps réel, en synchronie avec une musique.</span>
				</div>
			</div>
			
			<div class="slide" id="slide28" data-anchor="slide1">
				<img src="images/logo-ic2-v3.0.png" alt="image02">
				<div>
					<p>Institut d'Informatique Claude Chappe</p>
					<span>Proposition de logo. Dessin vectoriel avec Illustrator.</span>
				</div>
			</div>
			<div class="slide" id="slide29" data-anchor="slide1">
				<article id="gifs">
					<img src="images/main%20version%203.gif" alt="image02">
					<img src="images/nuage.gif" alt="image02">
					<img src="images/Sans-titre-1.gif" alt="image02">
				</article>
				<div>
					<p>Dessins</p>
					<span>Réalisés à la main ou à la tablette graphique</span>
				</div>
			</div>
		</section>


		<section id="section4">
			<div class="intro">
				<h1>Contact</h1>
				<form action="envoiMail.php" method="POST">
					<fieldset>
						<div>
							<label for="nom">Nom :</label>
							<input type="text" id="nom" name="nom" value="" />
						</div>
						<div>
							<label for="prenom">Prénom :</label>
							<input type="text" id="prenom" name="prenom" />
						</div>
						<div>
							<label for="sujet">Sujet :</label>
							<input type="text" id="sujet" name="sujet" />
						</div>
						<div>
							<label for="email">E-mail :</label>
							<input type="email" id="email" name="email" required />
						</div>
						<div>
							<p>Votre message :</p>
							<textarea cols="70" rows="5" name="message" required></textarea>
						</div>
					</fieldset>
					<div>
						<input type="submit" value="Envoyer" />
					</div>
				</form>
			</div>
		</section>
	</main>

	<footer style="background-color:gray">
		<p>© 2019 Alicia Rannou</p>
		<span>|</span>
		<p>Tous droits réservés</p>
		<span>|</span>
		<a href="CV%20v8.0.pdf" target="_blank">Télecharger mon CV</a>
	</footer>
</body>
</html>
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
					<a href="#presentation">Présentation</a>
				</li>
				<li ><a href="#parcours">Parcours</a>
			</li>
			<li><a href="#creations">Réalisations</a>
		</li>
		<li><a href="#contact">Contact</a>
		</li>
		</ul>
		</nav>
		<h1>Alicia Rannou</h1>
	</header>

	<main>

		<section id="presentation">
			
			<div>
				<h1>Présentation</h1>
				<p>Bonjour ! Je m'appelle Alicia et je vous souhaite la bienvenue sur mon site !</p>
				<p>Passionnée par le dessin depuis toute petite, j'ai rapidement su affirmer ma <strong>créativité</strong> et mon désir de réaliser des choses originales, qui sortent du commun. Toujours envieuse d'<strong>apprendre</strong>, j'ai vite été attirée par les possibilités quasi infinies que donnent l'informatique.</p>
				<p>Aujourd'hui en <strong>formation d'ingénieur Informatique Multimédia et Réseaux en alternance</strong> à Lannion, j'ai la joie de pouvoir enrichir et exercer mes compétences dans les deux domaines que j'apprécie le plus, le <strong>graphisme</strong> et le <strong>développement web</strong>. C'est ce plaisir de travailler dans ce qui me plaît qui me motive chaque jour pour donner le meilleur de moi-même.</p>
				<p>Grâce à mon alternance, j'ai depuis 3 ans un pied dans le <strong>monde du travail</strong> où j'exerce la fonction de lead developer sur les technologies web et android. Les <strong>nouvelles technologies</strong> me passionnent et la conception d'applications mobiles est devenue mon hobby du moment. Venez en découvrir plus sur mon GitHub ;)</p>
			
				<div class="links">
					<div class="bouton">
						<a href="CV%20v8.0.pdf" target="_blank">Télecharger mon CV</a>
					</div>
				</div>
				<div class="links">
					<a href="https://www.linkedin.com/in/alicia-rannou-983810109"><img class='icon' alt="Mon Linkedin" src="images/linkedin.png" /></a>
					<a href="https://github.com/arannou"><img class='icon' alt="Mon GitHub" src="images/github.png" /></a>
				</div>
			</div>
			<div class="img-container">
				<img class="face" alt="Alicia Rannou" src="images/moi.png" />
			</div>
		</section>


		<section id="parcours">
			<div class="parcours-container">
				<h1>Parcours</h1>
				<div>
					<h2>Depuis Septembre 2016</h2>
					<div class="parcours-text">
						<p>Alternance en conception et développement web entre Orange Business Services à Cesson-Sévigné (35) et l'ENSSAT (École Nationale Supérieure des Sciences Appliquées et de Technologie) à Lannion (22) en formation ingénieur Informatique Multimédia et Réseau.</p>
						<p>En entreprise, j'interviens au sein de l’équipe de supervision des équipements et services du cloud. J'ai eu pour mission la refonte d’un portail web et l'ajout de fonctionnalités. Puis on m'a confié un projet de 7 mois porté sur la conception d’une application mobile en Kotlin.</p>
						<p>A l'école, j'approfondi ce que j'ai vu en DUT avec une approche ingénieur. Les cours de machine learning, synthèse d'images, conception de services et ergonomie, object connectés ou encore interfaces riches complètent ma culture de développeuse.</p>
					</div>
				</div>
				<div>
					<h2>Septembre 2014 - Juin 2016</h2>
					<p class="parcours-text"><p>DUT MMI (Métiers du Multimédia et de l'Internet) à Laval (53). Cette formation en deux ans inclu du développement web, de la création multimédia, du graphisme et de la programmation.</p>
				</div>
				<div>
					<h2>Avril - Mai 2016</h2>
					<p class="parcours-text"></p>Stage en développement web et webdesign chez Assura à Changé (53). Durant ce stage j'ai ajouté des fonctionnalités au site extranet de l'agence, pour la gestion des contrats de clients.</p>
				</div>
				<div>
					<h2>Juillet - Août 2015</h2>
					<p class="parcours-text">Développeuse web et base de données en interim chez Boccard à Montauban-de-Bretagne (35). J'ai été amenée à créer un site intranet permettant de consulter mettre à jour la base de données des projets réalisés par l'entreprise.</p>
				</div>
				<div>
					<h2>Juin 2014</h2>
					<p class="parcours-text">Obtention du baccalauréat Scientifique spécialité Informatique et Sciences du Numérique, mention bien</p>
				</div>
				<!-- <div>
					<li>2011 - 2014</li>
					<li>Lycée général Renée Cassin de Montfort-sur-Meu (35)</li>
				</div> -->
			</div>
		</section>

		<section id="creations">
			<div>

				<h1>Réalisations</h1>
			</div>
			<div class="creations-container">

			<?php

			$creations = array(
				[
					"titre"=>"Pictogrammes",
					"texte"=>"Création d'icônes pour un logiciel de dessin fictif. Chaque icône représente une fonction. Imagination d'un univers graphique marqué par la monochromie. Vue isométrique stylisée.",
					"source"=> "images/Logos.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Site web Raidy",
					"texte"=>"Outil de gestion de raid sportif. Du tracé du parcours au classement des participants, Raidy facilite l'organisation de raids. Réalisé avec Synfony en 6 mois dans le cadre d'un projet de groupe.",
					"source"=> "images/raidy-editor.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Applications android Raidy",
					"texte"=>"En complément du site web, une application destinée aux organisateurs leur permet de tracer les parcours selon leur géolocalisation. Une seconde application permet aux bénévoles de baliser le raid et bagder les participants.",
					"source"=> "images/PhoneMockup-helper.png",
					"portrait" => true,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Portail de supervision chez Orange",
					"texte"=>"Site intranet permettant la consultation, vérification et production de supervision pour les équipes d'Orange Business Services.",
					"source"=> "images/pbste.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Storyboard photo",
					"texte"=>"Montage réalisé avec Photoshop. Scénario en trois temps à visée humoristique.",
					"source"=> "images/L'univers-des-chaussures.jpg",
					"portrait" => true,
					"type" => "image",
					"visible" => false
				],[
					"titre"=>"Affiche sur un problème de société",
					"texte"=>"Affiche contre la pollution et pour le tri. Photos prises en studio, montage avec Photoshop.",
					"source"=> "images/pbste.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Montage à la Magritte",
					"texte"=>"Hybridation de deux images issues de contextes très différents pour créer une situation fantastique. Utilisation de Photoshop.",
					"source"=> "images/baleine_airlines-2.0.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => false
				],[
					"titre"=>"Touttim - J'oublie",
					"texte"=>"Clip musical tourné pour le groupe Touttim. Un homme évolue dans un appartement couvert de post-it. On suit sa pensée au fil des post-it. Au final, les post-it forment un visage, celui de la femme qu’il aime toujours.",
					"source"=> "https://www.youtube.com/embed/L3R3iV24RRs",
					"portrait" => false,
					"type" => "video",
					"visible" => true
				],[
					"titre"=>"Couverture de livre",
					"texte"=>"Proposition de couverture pour l'ouvrage de P. Cottier et F. Burban sur le numérique d'aujourd'hui.",
					"source"=> "images/couverture_v2_01.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => false
				],[
					"titre"=>"Feed Me",
					"texte"=>"Réalisation d'une charte graphique pour un site conceptuel de recettes de cuisine pour étudiant. Couleurs vives et ambiance jeune.",
					"source"=> "images/fiche-recette-V1.0.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => false
				],[
					"titre"=>"Affiche pour la formation DUT MMI",
					"texte"=>"Proposition de visuel présentant la formation DUT MMI. Exemplaire affiché sur les forums étudiants.",
					"source"=> "images/Affiche-mmi.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Webimmi",
					"texte"=>"Réalisation de l'une mascotte symbolisant la formation Métiers du Multimédia et de l'Internet. Production en 3D avec Blender",
					"source"=> "images/mascotte-3D-finale.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => false
				],[
					"titre"=>"Sides",
					"texte"=>"Création d'une police de caractères, inspirée de motifs tribaux et de labyrinthes. Disponible sur <a href='http://www.dafont.com/fr/sides.font'>Dafont.com</a>",
					"source"=> "images/Sides.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Site extranet pour Assura",
					"texte"=>"Ajout de fonctionnalités en PHP pour la gestion des contrats pour les assurances de transport de marchandises, correction de bugs.",
					"source"=> "images/assura.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Challenge de l'innovation 2018",
					"texte"=>"Présentation d'un pitch en équipe sur une solution de véhicules prioritaires connectés en 5G à la signalisation en ville.",
					"source"=> "images/road-vipriority.png",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Robot arduino",
					"texte"=>"Programmation d'un robot téléguidé via bluetooth avec une carte arduino. Détection d'obstacle via infrarouge.",
					"source"=> "images/plan_controller.png",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Labyzor",
					"texte"=>"Projet tutoré de DUT en 2015. Réalisation en groupe d'un site web intégrant une gestion de comptes utilisateurs, un jeu en javascript, un chat en PHP et des flux musicaux issus de l'API Deezer.",
					"source"=> "images/labyzor.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Boccard benchmarking",
					"texte"=>"Site intranet pour la gestion des données relatives aux projets de l'entreprise. Utilisation de HTML / CSS, jQuery et PHP. Fonction de recherche, tri, import et export excel, administration.",
					"source"=> "images/boccard.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Site web pour artisan",
					"texte"=>"Proposition de site web pour un artisan local. Codé en HTML et CSS.",
					"source"=> "images/accueil_2.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Publicité contre un problème de société",
					"texte"=>"Court clip publicitaire luttant contre le gaspillage du papier, dénonçant la déforestation. Montage avec Premiere Pro.",
					"source"=> "https://www.youtube.com/embed/8Q8GK6YEg_8",
					"portrait" => false,
					"type" => "video",
					"visible" => true
				],[
					"titre"=>"Storyboard",
					"texte"=>"Storyboard de la publicité contre le gaspillage.",
					"source"=> "images/Scan%20storyboard_01.jpg",
					"portrait" => true,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Les circuits courts de consommation",
					"texte"=>"Micro-trottoir sur le marché de Laval. Les commerçants et clients savent-ils vraiment ce que sont les circuits courts ?",
					"source"=> "https://www.youtube.com/embed/y57aMMfH_8M",
					"portrait" => false,
					"type" => "video",
					"visible" => true
				],[
					"titre"=>"Jeu d'othello en Java",
					"texte"=>"",
					"source"=> "images/othello.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => false
				],[
					"titre"=>"Jeu de mastermind",
					"texte"=>"Jeu réalisé en Python. Choix de la difficulté au lancement de la partie. Projet de fin d’année en Terminale Scientifique option Informatique et Sciences du Numérique.",
					"source"=> "images/mastermind.jpg",
					"portrait" => true,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Statisommeil",
					"texte"=>"Site web présentant de façon ludique des statistiques sur le sommeil, dans le monde et notre quotidien. Réalisé en jQuery. A découvrir <a href='http://perso.univ-lemans.fr/~i140994/'>ici</a>.",
					"source"=> "images/statisommeil.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Catch me if you Can - Animatique",
					"texte"=>"Animatique d'un clip humoristique avec des cubes personnifiés représentant les quatres DUT de l'IUT de Laval",
					"source"=> "https://www.youtube.com/embed/VThFZLVns1I",
					"portrait" => false,
					"type" => "video",
					"visible" => true
				],[
					"titre"=>"Catch me if you Can - Modélisation",
					"texte"=>"Modélisation 3D sous Blender.",
					"source"=> "images/rendu%202.png",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Catch me if you Can - Version Finale",
					"texte"=>"Animation finale sous Blender",
					"source"=> "https://www.youtube.com/embed/Th_kFzZ7AYw",
					"portrait" => false,
					"type" => "video",
					"visible" => true
				],[
					"titre"=>"Montage sonore",
					"texte"=>"Mise en son d'une page de la bande dessinée John Difoul",
					"source"=> "images/johnDifoul.mp4",
					"portrait" => false,
					"type" => "video",
					"visible" => false
				],[
					"titre"=>"Cuisinaute",
					"texte"=>"Animation After Effects présentant une application fictive de recettes de cuisine pour tablette, à destination des enfants.",
					"source"=> "https://www.youtube.com/embed/Bj-sgFxA5tU",
					"portrait" => false,
					"type" => "video",
					"visible" => false
				],[
					"titre"=>"Greed's Gale",
					"texte"=>"Projet tutoré DUT 2016. Jeu vidéo en 2D mélant un shoot’em up et des phases d’infiltration dans un univers médiéval et fantastique. Vous incarnez Robb, un voleur qui parcourt le pays à dos de dragon pour subtiliser les joyaux du Roi. Sur son chemin se dresseront de nombreux ennemis. Réalisé en groupe avec Unity.",
					"source"=> "images/gg.jpg",
					"portrait" => false,
					"type" => "image",
					"visible" => true
				],[
					"titre"=>"Mad Jack",
					"texte"=>"Utilisation du logiciel Max pour appilquer des effets vidéo et des incrustations sur un tournage en temps réel, en synchronie avec une musique.",
					"source"=> "https://www.youtube.com/embed/1k-B0s3KspM",
					"portrait" => false,
					"type" => "video",
					"visible" => false
				],[
					"titre"=>"Institut d'Informatique Claude Chappe",
					"texte"=>"Proposition de logo. Dessin vectoriel avec Illustrator.",
					"source"=> "images/logo-ic2-v3.0.png",
					"portrait" => false,
					"type" => "image",
					"visible" => false
				]
				);

foreach($creations as $crea) {
	if ($crea["visible"]==true) {
		$class = $crea["portrait"]==true ? "slide portrait": "slide"; 
		echo '<div class="'.$class.'">';

		if ($crea["type"]=="image") {
			echo '<img src="'.$crea["source"].'" alt="'.$crea["titre"].'">';
		} else if ($crea["type"]=="video") {
			echo '<iframe width="560" height="315" src="'.$crea["source"].'" frameborder="0" allowfullscreen></iframe>';
		}
	?>
				<div>
					<p><?php echo($crea["titre"]); ?></p>
					<span><?php echo($crea["texte"]); ?></span>
				</div>
			</div>

	<?php 
	}
}
	?>


			<div class="slide">
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
			</div>
		</section>


		<section id="contact">
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
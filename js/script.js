document.addEventListener('DOMContentLoaded', fn, false);

const mediasJson = [
    {
        "titre":"Pictogrammes",
        "texte":"Création d'icônes pour un logiciel de dessin fictif. Chaque icône représente une fonction. Imagination d'un univers graphique marqué par la monochromie. Vue isométrique stylisée.",
        "source": "images/Logos.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Site web Raidy",
        "texte":"Outil de gestion de raid sportif. Du tracé du parcours au classement des participants, Raidy facilite l'organisation de raids. Réalisé avec Synfony en 6 mois dans le cadre d'un projet de groupe.",
        "source": "images/raidy-editor.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Applications android Raidy",
        "texte":"En complément du site web, une application destinée aux organisateurs leur permet de tracer les parcours selon leur géolocalisation. Une seconde application permet aux bénévoles de baliser le raid et badger les participants.",
        "source": "images/PhoneMockup-helper.png",
        "portrait" : true,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Portail de supervision chez Orange",
        "texte":"Site intranet permettant la consultation, vérification et production de supervision pour les équipes d'Orange Business Services.",
        "source": "images/mit.png",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Storyboard photo",
        "texte":"Montage réalisé avec Photoshop. Scénario en trois temps à visée humoristique.",
        "source": "images/L'univers-des-chaussures.jpg",
        "portrait" : true,
        "type" : "image",
        "visible" : false
    },{
        "titre":"Affiche sur un problème de société",
        "texte":"Affiche contre la pollution et pour le tri. Photos prises en studio, montage avec Photoshop.",
        "source": "images/pbste.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Montage à la Magritte",
        "texte":"Hybridation de deux images issues de contextes très différents pour créer une situation fantastique. Utilisation de Photoshop.",
        "source": "images/baleine_airlines-2.0.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : false
    },{
        "titre":"Touttim - J'oublie",
        "texte":"Clip musical tourné pour le groupe Touttim. Un homme évolue dans un appartement couvert de post-it. On suit sa pensée au fil des post-it. Au final, les post-it forment un visage, celui de la femme qu’il aime toujours.",
        "source": "https://www.youtube.com/embed/L3R3iV24RRs",
        "portrait" : false,
        "type" : "video",
        "visible" : true
    },{
        "titre":"Couverture de livre",
        "texte":"Proposition de couverture pour l'ouvrage de P. Cottier et F. Burban sur le numérique d'aujourd'hui.",
        "source": "images/couverture_v2_01.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : false
    },{
        "titre":"Feed Me",
        "texte":"Réalisation d'une charte graphique pour un site conceptuel de recettes de cuisine pour étudiant. Couleurs vives et ambiance jeune.",
        "source": "images/fiche-recette-V1.0.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : false
    },{
        "titre":"Affiche pour la formation DUT MMI",
        "texte":"Proposition de visuel présentant la formation DUT MMI. Exemplaire affiché sur les forums étudiants.",
        "source": "images/Affiche-mmi.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Webimmi",
        "texte":"Réalisation de l'une mascotte symbolisant la formation Métiers du Multimédia et de l'Internet. Production en 3D avec Blender",
        "source": "images/mascotte-3D-finale.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : false
    },{
        "titre":"Sides",
        "texte":"Création d'une police de caractères, inspirée de motifs tribaux et de labyrinthes. Disponible sur <a href='http://www.dafont.com/fr/sides.font'>Dafont.com</a>",
        "source": "images/Sides.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Site extranet pour Assura",
        "texte":"Ajout de fonctionnalités en PHP pour la gestion des contrats pour les assurances de transport de marchandises, correction de bugs.",
        "source": "images/assura.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Challenge de l'innovation 2018",
        "texte":"Présentation d'un pitch en équipe sur une solution de véhicules prioritaires connectés en 5G à la signalisation en ville.",
        "source": "images/road-vipriority.png",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Robot arduino",
        "texte":"Programmation d'un robot téléguidé via bluetooth avec une carte arduino. Détection d'obstacle via infrarouge.",
        "source": "images/plan_controller.png",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Labyzor",
        "texte":"Projet tutoré de DUT en 2015. Réalisation en groupe d'un site web intégrant une gestion de comptes utilisateurs, un jeu en javascript, un chat en PHP et des flux musicaux issus de l'API Deezer.",
        "source": "images/labyzor.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Boccard benchmarking",
        "texte":"Site intranet pour la gestion des données relatives aux projets de l'entreprise. Utilisation de HTML / CSS, jQuery et PHP. Fonction de recherche, tri, import et export excel, administration.",
        "source": "images/boccard.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Site web pour artisan",
        "texte":"Proposition de site web pour un artisan local. Codé en HTML et CSS.",
        "source": "images/accueil_2.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Publicité contre un problème de société",
        "texte":"Court clip publicitaire luttant contre le gaspillage du papier, dénonçant la déforestation. Montage avec Premiere Pro.",
        "source": "https://www.youtube.com/embed/8Q8GK6YEg_8",
        "portrait" : false,
        "type" : "video",
        "visible" : true
    },{
        "titre":"Storyboard",
        "texte":"Storyboard de la publicité contre le gaspillage.",
        "source": "images/Scan%20storyboard_01.jpg",
        "portrait" : true,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Les circuits courts de consommation",
        "texte":"Micro-trottoir sur le marché de Laval. Les commerçants et clients savent-ils vraiment ce que sont les circuits courts ?",
        "source": "https://www.youtube.com/embed/y57aMMfH_8M",
        "portrait" : false,
        "type" : "video",
        "visible" : true
    },{
        "titre":"Jeu d'othello en Java",
        "texte":"",
        "source": "images/othello.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : false
    },{
        "titre":"Jeu de mastermind",
        "texte":"Jeu réalisé en Python. Choix de la difficulté au lancement de la partie. Projet de fin d’année en Terminale Scientifique option Informatique et Sciences du Numérique.",
        "source": "images/mastermind.jpg",
        "portrait" : true,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Statisommeil",
        "texte":"Site web présentant de façon ludique des statistiques sur le sommeil, dans le monde et notre quotidien. Réalisé en jQuery. A découvrir <a href='./statisommeil/index.html'>ici</a>.",
        "source": "images/statisommeil.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Catch me if you Can - Animatique",
        "texte":"Animatique d'un clip humoristique avec des cubes personnifiés représentant les quatres DUT de l'IUT de Laval",
        "source": "https://www.youtube.com/embed/VThFZLVns1I",
        "portrait" : false,
        "type" : "video",
        "visible" : true
    },{
        "titre":"Catch me if you Can - Modélisation",
        "texte":"Modélisation 3D sous Blender.",
        "source": "images/rendu%202.png",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Catch me if you Can - Version Finale",
        "texte":"Animation finale sous Blender",
        "source": "https://www.youtube.com/embed/Th_kFzZ7AYw",
        "portrait" : false,
        "type" : "video",
        "visible" : true
    },{
        "titre":"Montage sonore",
        "texte":"Mise en son d'une page de la bande dessinée John Difoul",
        "source": "images/johnDifoul.mp4",
        "portrait" : false,
        "type" : "video",
        "visible" : false
    },{
        "titre":"Cuisinaute",
        "texte":"Animation After Effects présentant une application fictive de recettes de cuisine pour tablette, à destination des enfants.",
        "source": "https://www.youtube.com/embed/Bj-sgFxA5tU",
        "portrait" : false,
        "type" : "video",
        "visible" : false
    },{
        "titre":"Greed's Gale",
        "texte":"Projet tutoré DUT 2016. Jeu vidéo en 2D mélant un shoot’em up et des phases d’infiltration dans un univers médiéval et fantastique. Vous incarnez Robb, un voleur qui parcourt le pays à dos de dragon pour subtiliser les joyaux du Roi. Sur son chemin se dresseront de nombreux ennemis. Réalisé en groupe avec Unity.",
        "source": "images/gg.jpg",
        "portrait" : false,
        "type" : "image",
        "visible" : true
    },{
        "titre":"Mad Jack",
        "texte":"Utilisation du logiciel Max pour appilquer des effets vidéo et des incrustations sur un tournage en temps réel, en synchronie avec une musique.",
        "source": "https://www.youtube.com/embed/1k-B0s3KspM",
        "portrait" : false,
        "type" : "video",
        "visible" : false
    },{
        "titre":"Institut d'Informatique Claude Chappe",
        "texte":"Proposition de logo. Dessin vectoriel avec Illustrator.",
        "source": "images/logo-ic2-v3.0.png",
        "portrait" : false,
        "type" : "image",
        "visible" : false
    }
]


function fn() {
    displayCredits();
    offsetGetter();
    displayCreations();
    window.onresize = offsetGetter;

    document.querySelector("body").onscroll = function() {
        
        var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        var d = window.scrollY;

        if (d<=window.a) {
            activateHeader(0);
        } else if (d>window.a && d<=window.b) {
            activateHeader(1);
        } else {
            activateHeader(2);
        }
    }
}

function activateHeader(li_number) {
    let el = document.getElementsByClassName("active")
    if (typeof el[0] !== "undefined") {
        el[0].classList.remove("active");
    }

    document.querySelectorAll("nav li")[li_number].classList.add("active");
}

function offsetGetter() {
    var sections = document.getElementsByTagName("section");
    var anchor_height = 56;
    window.a = sections[0].offsetHeight + anchor_height; // height of presentation
    window.b = window.a + sections[1].offsetHeight + anchor_height; // height of presentation + parcours
}

function displayCreations() {
    let container = document.getElementsByClassName("creations-container")[0];
    
    console.log(mediasJson);
    
    mediasJson.forEach(media => {
        if (media.visible) {
            let div = document.createElement("div");
            div.classList.add("slide");
            if (media.portrait) {
                div.classList.add("portrait");
            }

            let child;
            if (media.type == "image") {
                child = document.createElement("img");
                child.setAttribute("src", media.source);
                child.setAttribute("alt", media.titre);
            }
            if (media.type == "video") {
                child = document.createElement("iframe");
                child.src = media.source;
                child.setAttribute("frameborder", 0);
                child.setAttribute("allowfullscreen", true);
                child.width = "560";
                child.height = "315";
            }

            if (media.type == "videoLocal") {
                child = document.createElement("video");
                child.setAttribute("controls", true);
                child.style.width = "560";
                child.style.height = "315";
                let source = document.createElement("source");
                source.src = media.source;
                source.setAttribute("type", "video/mp4");
                source.innerText = "Your browser does not support the video tag."
                child.append(source)
            }

            let description = document.createElement("div");
            let title = document.createElement("p");
            title.innerText = media.titre;
            let text = document.createElement("span");
            text.innerHTML = media.texte;
            description.append(title);
            description.append(text);

            div.appendChild(child);
            div.appendChild(description);
            container.appendChild(div);
        }
    });

    
}

function displayCredits() {
    const year = new Date().getFullYear();
    document.getElementById("credits").innerText = "© " + year + " Alicia Rannou";
}
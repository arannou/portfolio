<?php
//
$prenom = isset($_POST["prenom"]) && $_POST["prenom"]!="" ? ($_POST["prenom"]) : "";
$nom = isset($_POST["nom"]) && $_POST["nom"]!="" ? ($_POST["nom"]) : "expediteur";
$email = ($_POST["email"]);

//		echo $sujet."<br/>";
//		echo $message."<br/>";
//		echo $destinataire."<br/>";
//		echo $headers."<br/>";
//
//		echo "<pre>";
//		print_r($_POST);
//		echo "</pre>";
//	}



$mail = 'alicia.rannou23@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = $_POST["message"];
//$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = 'Portfolio : '.$_POST["sujet"];
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"$prenom $nom\"<alicia.rannou23@gmail.com>".$passage_ligne;
$header.= "Reply-to: \"$prenom $nom\" <$email>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
//=====Envoi de l'e-mail.
if(mail($mail,$sujet,$message,$header)) {
	$_SESSION["status"]=1;
}
else {
	$_SESSION["status"]=0;
}
header("Location: index.php") ;
//==========

?>
<?php

if (isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"]) && $_POST["prenom"] != "" && $_POST["nom"] != "" && $_POST["message"] != "" && $_POST["email"] != "") {

	$nom = ($_POST["nom"]);
	$prenom = ($_POST["prenom"]);
	$email = ($_POST["email"]);

	$mail = 'alicia.rannou23@gmail.com'; 
	if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) {
		$passage_ligne = "\r\n";
	} else {
		$passage_ligne = "\n";
	}

	$message_txt = $_POST["message"];
	$boundary = "-----=".md5(rand());
	$sujet = 'Portfolio : '.$_POST["sujet"];

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
	} else {
		$_SESSION["status"]=0;
	}
} else {
	$_SESSION["status"]=0;
}
header("Location: index.php") ;

?>
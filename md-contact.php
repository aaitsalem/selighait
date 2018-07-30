    <?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
     
    // Récupération des variables et sécurisation des données
    $nom = htmlentities($_POST['Nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $prenom = htmlentities($_POST['Prenom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
    $email = htmlentities($_POST['Email']);
    $tel =   htmlentities($_POST['Telephone']);
    $message = htmlentities($_POST['Message']);
     
    // Variables concernant l'email
     
    $destinataire = 'contact@selighait.com'; // Adresse email du webmaster (à personnaliser)
    $sujet = 'Demande de contact seligha it '; // Titre de l'email
    $contenu = '<html><head><title>Demande d\'informations ou de candidature</title></head><body>';
    $contenu .= '<p>Bonjour, vous avez reçu un message à partir de SELIGHA IT.</p>';
    $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
    $contenu .= '<p><strong>Prenom</strong>: '.$prenom.'</p>';
    $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
	$contenu .= '<p><strong>Telephone</strong>: '.$tel.'</p>';

    $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
    $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
    // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
    $headers = 'MIME-Version: 1.0'."\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     
    // Envoyer l'email
    mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
    echo '<center><h2 style="color"> Message envoy&eacute;! <a href="http://www.selighait.com">Revenir sur le site</a></h2></center>'; // Afficher un message pour indiquer que le message a été envoyé
    	// (2) Fin du code pour traiter l'envoi de l'email
    }
    ?>
<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="icon" href="/favicon.ico" sizes="any">
 <!-- <link rel="icon" href="/icon.svg" type="image/svg+xml"> -->
  <link rel="apple-touch-icon" href="icon.png">

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/style.css">

  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <?php include "navbar.html";?>
   
  <!-- Add your site or application content here -->
  <h2>Comment récupérer ses données perso geovelo ?</h2>
  <div>
    <ul>
      <li>Lancer l’appli geovelo</li>
      <li>Profil -> Paramètre (<img src="./img/geovelo_icone_parametre.png" alt="Icone en forme de roue cranté pour les paramètres Géovélo"/>) -> Préférences</li>
      <li>Cliquez sur “Télécharger mes données”</li>
	  <img src="./img/geovelo_capture_Telecharger_mes_donnees.png" alt="Capture d'écran de l'application Géovélo sur la page paramètre. Le bouton Télécharger mes données est entouré"/>
      <li>Validez, un mail sera envoyé à l’adresse mail associée à votre compte geovelo.</li>
	  <li>Au bout de quelques minutes, vous recevrez un mail, il vous suffit de cliquer sur le bouton “Télécharger mes données”</li>
	  <img src="./img/geovelo_capture_mail_Telecharger_mes_donnees.png" alt="Capture d'écran du mail Géovélo permetant de télécharger ses données"/>
	  <li>Vous serez redirigé vers le site web geovelo, après vous être identifié vous aurez accès au bouton de téléchargement</li>
      <img src="./img/geovelo_capture_page_web_Telecharger_mes_donnees.png" alt="Capture d'écran de la page web Géovélo permetant de télécharger ses données"/>
	  <li>Une fois téléchargé, vous devez dézippé le fichier, vos traces sont contenus dans le fichier sent_traces.json</li>
	  <img src="./img/geovelo_capture_archive_zip.png" alt="Capture d'écran du contenu de l'archive zip, le fichier contenant les traces est entouré"/>
	  <li>Si vous ne savaez pas dézipper un fichier zip, vous pouvez déposer directement l'archive zip sur le site, il s'occupera lui même de récupérer le bon fichier.</li>
	</ul>
	  
  <script src="js/vendor/modernizr-3.12.0.min.js"></script>
  <script src="js/app.js"></script>

  <script src="js/bootstrap.js"></script>

</body>

</html>

<!DOCTYPE html>
<html lang="FR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Aidons l'Assemblée à écouter les Citoyens</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/jquery.fs.zoomer.css" rel="stylesheet">
<link href="css/datepicker.css" rel="stylesheet">
<link href="data:text/css;charset=utf-8," data-href="css/bootstrap-theme.min.css" rel="stylesheet" id="bs-theme-stylesheet">
<link href="css/crowdsource.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.png">

<?php
$cururl = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
$baseurl = preg_replace("#/[^/]*$#", "/", $cururl);
?>
<!-- Twitter metas -->
<meta name="twitter:site" content="@RegardsCitoyens">
<meta name="twitter:url" content="<?php echo $cururl;?>">
<meta name="twitter:title" content="Aidons l'Assemblée à écouter les Citoyens - Regards Citoyens" />
<meta name="twitter:description" content="Pour les consultations ne restent pas lettres mortes" />

<!-- Facebook metas -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Aidons l'Assemblée à écouter les Citoyens - Regards Citoyens" />
<meta property="og:site_name" content="Aidons l'Assemblée à écouter les Citoyens - Regards Citoyens" />
<meta property="og:description" content="Pour les consultations ne restent pas lettres mortes" />
<meta property="og:url" content="<?php echo $cururl;?>" />
<meta property="og:locale" content="fr_FR">

</head>
<body>
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="logo"><a target="_blank" href="http://RegardsCitoyens.org" title="Une initiative de Regards Citoyens"><img alt="Regards Citoyens" src="img/logo_regardscitoyens.png" height="50" /></a></div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">Assemblée & Citoyens</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li<?php if(isset($menu_home) && $menu_home) echo ' class="active" '; ?>><a href="./#crowdsource">Participer</a></li>
            <li<?php if(!isset($menu_home) && !isset($menu_declaration)) echo ' class="active" '; ?>><a href="./contributeurs.php">Les contributeurs</a></li>
            <li><a href="http://www2.assemblee-nationale.fr/consultations-citoyennes/evaluation-de-la-loi-du-4-aout-2014-sur-l-egalite-reelle-entre-les-femmes-et-les-hommes">La consultation</a></li>
            <li><a href="./#faq">FAQ</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
   <li><a href="#signin" data-toggle="modal" data-target="#signin"><span class="glyphicon glyphicon-user"></span> <?php if (isset($_SESSION['nickname']) && $_SESSION['nickname']) {echo $_SESSION['nickname']; } else {echo "S'enregistrer"; }?></a></li>
          </ul>
        </div>
      </div>
    </div>

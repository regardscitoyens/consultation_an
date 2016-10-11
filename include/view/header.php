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
<meta name="twitter:title" content="Aidons l'Assemblée à écouter les Citoyen-ne-s - Regards Citoyens" />
<meta name="twitter:description" content="Pour que les consultations ne restent pas lettres mortes" />
<meta name="twitter:image:src" content="http://www.regardscitoyens.org/wp-content/uploads/2016/10/aidonslan.jpg">

<!-- Facebook metas -->
<meta property="og:type" content="website" />
<meta property="og:title" content="Aidons l'Assemblée à écouter les Citoyen-ne-s - Regards Citoyens" />
<meta property="og:site_name" content="Aidons l'Assemblée à écouter les Citoyen-ne-s - Regards Citoyens" />
<meta property="og:description" content="Pour que les consultations ne restent pas lettres mortes" />
<meta property="og:url" content="<?php echo $cururl;?>" />
<meta property="og:locale" content="fr_FR">
<meta property="og:image" content="http://www.regardscitoyens.org/wp-content/uploads/2016/10/aidonslan.jpg" />
<meta property="og:image:type" content="image/jpeg">


</head>
<body data-spy="scroll" data-target="#navbar">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="logo hidden-xs">
        <a target="_blank" href="http://faistaloi.org" title="Une initiative de Fais ta loi"><img alt="Fais ta loi" src="img/logo/fais-ta-loi-logo.png" height="35" /></a>
        <a target="_blank" href="http://democracyos.eu/" title="Une initiative de Democracy OS"><img alt="Democracy OS" src="img/logo/democracy-os-logo.png" height="35" /></a>
        <a target="_blank" href="https://RegardsCitoyens.org" title="Une initiative de Regards Citoyens"><img alt="Regards Citoyens" src="img/logo/regardscitoyens-logo.png" height="35" /></a>
      </div>
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./#">Rapporteurs Citoyens</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li<?php if(isset($menu_home) && $menu_home) echo ' class="active" '; ?>><a href="./#crowdsource">Participer</a><a href="#crowdsource" class="hidden">hack for scrollspy</a></li>
            <li class="hidden-sm"><a href="#faq">FAQ</a></li>
            <li class="hidden-sm"><a href="#a-propos">À propos</a></li>
            <li<?php if(!isset($menu_home) && !isset($menu_declaration)) echo ' class="active" '; ?>><a href="./contributeurs.php">Les contributeurs</a><a href="#contributeurs" class="hidden">hack for scrollspy</a></li>
            <li class="hidden-sm"><a target="_blank" href="http://www2.assemblee-nationale.fr/consultations-citoyennes/evaluation-de-la-loi-du-4-aout-2014-sur-l-egalite-reelle-entre-les-femmes-et-les-hommes">La consultation</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
   <li><a href="#signin" data-toggle="modal" data-target="#signin"><span class="glyphicon glyphicon-user"></span> <?php if (isset($_SESSION['nickname']) && $_SESSION['nickname']) {echo $_SESSION['nickname']; } else {echo "S'enregistrer"; }?></a></li>
          </ul>
        </div>
      </div>
    </div>

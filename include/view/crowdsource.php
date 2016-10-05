      <div id="crowdsource">
      <?php if ($sent_ok) : ?>
        <div class="alert alert-info text-center" role="alert">
<?php
	 if (0 && !isset($_SESSION['nickname'])) {
	 echo "N'hésitez pas à <a href=\"#signin\" data-toggle=\"modal\" data-target=\"#signin\">vous enregistrer</a> pour apparaitre parmi les contributeurs de ce projet. ";
	 }
     echo "Si vous souhaitez partager la section que vous venez de saisir, elle est <a href=\"".$_SESSION['lastpage']."\">consultable ici</a>.";
     $_SESSION['lastpage'] = null;
?>
</div>
       <?php endif; ?>
       <div class="row">
         <div class="col-md-6">
	   <?php
	   if (!$nodoc) {
	     include(__DIR__.'/consultation_frame.php');
	   }
?>         </div>
         <div class="numerise col-md-6">
           <div class="well">
              <h3 class="page-header text-center">
              Participer à évaluer ce propos
              </h3>
	   <?php if (!$nodoc) : ?>
       <form role="form" action="save.php" method="POST">
         <input type="hidden" name="token" value="<?php echo $token; ?>"/>
         <?php include("../include/view/forms/form_consultation.php"); ?>
         <div class="row">
             <div class="col-xs-4">
             <div class="btn-group control">
               <button type="button" class="form-control btn btn-danger dropdown-toggle" data-toggle="dropdown">Signaler un problème <span class="caret"></span></button>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=1">Je ne comprends pas les propos</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=2">Le propos manque d'argument</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=3">Le propos est trop technique</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=4">Le propos me semble illégal</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=5">J'aurai aimé ne pas avoir à lire ce propos (trop violent, trop personnel, ...)</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=6">Autre</a></li>
               </ul>
           </div>
           </div>
           <div class="col-xs-8"><div class="pull-right"><button id="validate" type="submit" class="btn btn-success"><span class="libelle">Valider</span>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button></div></div>
           <p><a  class="pull-right btn-link" href="./next.php" style="margin: 10px 25px 0">Changer de déclaration</a></p>
         </div>
           <p class="text-muted" style="margin-top: 20px;">Si vous avez le sentiment que la contribution ne devrait pas être étudiée par d'autres internautes, merci de nous l'indiquer en cliquant sur « Signaler un problème », nous vous proposerons un autre extrait de déclaration à saisir.</p>
           <p class="text-muted"><a href="#faq">Un doute ou une question ? cliquez ici pour lire les Questions Fréquentes.</a></p>
       </form>
   <?php else : ?>
     <p class="text-center">Nous n'avons plus de document à vous faire numériser !! </p>
   <?php endif; ?>
 </div>
</div>
</div>

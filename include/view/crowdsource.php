      <div id="crowdsource">
      <?php if ($sent_ok) : ?>
        <div class="alert alert-info text-center" role="alert">
<?php
	 if (0 && !isset($_SESSION['nickname'])) {
	 echo "N'hésitez pas à <a href=\"#signin\" data-toggle=\"modal\" data-target=\"#signin\">vous enregistrer</a> pour apparaitre parmi les contributeurs de ce projet. ";
	 }
     echo "Si vous souhaitez partager la section que vous venez de saisir, elle est <a href=\"".$_SESSION['lastpage']."\">consultable ici</a>.";
     if (isset($_SESSION['synthese'])) {
       echo "<br/><a href=\"https://twitter.com/intent/tweet?text=".urlencode("« ".$_SESSION['synthese']." » ".$_SESSION['lastpage']." #ConsultEgalite")."\" target='_blank'>Tweeter votre synthèse</a>";
     }
     $_SESSION['lastpage'] = null;
     $_SESSION['synthese'] = null;
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
              Participez à évaluer cette contribution
              </h3>
	   <?php if (!$nodoc) : ?>
       <form role="form" action="save.php" method="POST">
         <input type="hidden" name="token" value="<?php echo $token; ?>"/>
         <?php if ($is_synthese):
                include("../include/view/forms/form_synthese.php");
              else:
                include("../include/view/forms/form_consultation.php");
              endif;
         ?>
         <div class="row">
           <?php if (!$is_synthese): ?>
           <div class="col-xs-12">
             <p class="text-muted" style="margin-top: 20px;">Si vous avez le sentiment que la contribution ne devrait pas être étudiée par d'autres internautes, merci de nous l'indiquer en cliquant sur « Signaler un problème », nous vous proposerons un autre extrait de déclaration à saisir.</p>
           </div>
             <div class="col-sm-4 col-xs-6">
             <div class="btn-group control">
               <button type="button" class="form-control btn btn-danger dropdown-toggle" data-toggle="dropdown">Signaler un problème <span class="caret"></span></button>
               <ul class="dropdown-menu" role="menu">
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=1">Je ne comprends pas les propos</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=2">Le propos me semble illégal</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=3">J'aurais aimé ne pas avoir à lire ce propos (trop violent, trop personnel, ...)</a></li>
                 <li><a href="./save.php?token=<?php echo $token; ?>&pb=4">Autre</a></li>
               </ul>
             </div>
           <?php endif; ?>
           </div>
           <div class="col-sm-8 col-xs-6"><div class="pull-right"><button id="validate" type="submit" class="btn btn-success"><span class="libelle">Valider</span>&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button></div></div>
           <p><a  class="pull-right btn-link" href="./next.php" style="margin: 10px 25px 0">Changer de déclaration</a></p>
           <div class="col-xs-12">
             <p class="text-muted"><a href="#faq">Un doute ou une question ? cliquez ici pour lire les Questions Fréquentes.</a></p>
           </div>
         </div>
       </form>
   <?php else : ?>
     <p class="text-center">Nous n'avons plus de document à vous faire numériser !! </p>
   <?php endif; ?>
 </div>
</div>
</div>

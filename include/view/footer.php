      <div id="faq" class="row">
        <h2 class="text-center page-header">Questions fréquentes</h2>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h3 style="color:red">!!! TODO !!!</h3>
        </div>
        <div class="col-md-3"></div>
      </div>
      <div id="a-propos" class="row">
        <h2 class="text-center page-header">À propos</h2>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <h3 style="color:red">!!! TODO !!!</h3>
          <p>Ce site est une création de <a href="http://regardscitoyens.org" target="_blank">Regards Citoyens</a>. Il vise à ...</p>
          <p>Les contributions textuelles des citoyens à la consultation de l'Assemblée portent sur 5 questions.</p>
          <p>Pour éviter d'intégrer toute erreur de saisie ou tentative de vandalisme, chaque extrait de formulaire est présenté au hasard aux utilisateurs et n'est considéré comme valablement numérisé que lorsque <span class="color:red">3 A CONFIRMER!!</span> utilisateurs différents auront saisi les mêmes informations.</p>
          <p>Le logiciel permettant de réaliser et publier cette interface est un logiciel libre diffusé sous <a href="http://www.gnu.org/licenses/agpl-3.0.html">licence Affero GPL v3</a> et dont le code source est disponible en ligne sur <a href="https://github.com/regardscitoyens/consultation_an/" target="_blank">GitHub</a>.</p>
          <p>Toutes les données collaborativement reconstruites grâce à cette interface seront publiées en Open Data sous <a href="http://wiki.data.gouv.fr/wiki/Licence_Ouverte_/_Open_Licence">Licence Ouverte</a> sur <a href="http://nosdonnees.fr">NosDonnées.fr</a> et <a href="http://data.gouv.fr">data.gouv.fr</a>.</p>
          <p>Les <a href="http://regardscitoyens.org/mentions-legales/">mentions légales</a> usuelles des sites de Regards Citoyens s'appliquent.</p>
        </div>
        <div class="col-md-3"></div>
      </div>
      <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="signinLabel" aria-hidden="true">
       <div class="modal-dialog">
         <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fermer</span></button>
            <h4 class="modal-title" id="signinLabel">S'enregistrer</h4>
          </div>
          <form class="form-horizontal" role="form" action="login.php" method="POST">
          <div class="modal-body">
            <div class="form-group">
              <label for="nickname" class="col-sm-5 control-label">Nom/Pseudo</label>
              <div class="col-sm-7">
                <input class="form-control" name="nickname" required='true' value="<?php if (isset($nickname))echo $nickname; ?>" placeholder="Mon pseudo">
              </div>
            </div>
            <div class="form-group">
              <label for="twitter" class="col-sm-5 control-label">Utilisateur Twitter/Identica</label>
              <div class="col-sm-7">
                 <input type="text" class="form-control" name="twitter" value="<?php if (isset($twitter)) echo $twitter; ?>" placeholder="@utilisateur">
              </div>
            </div>
            <div class="form-group">
              <label for="website" class="col-sm-5 control-label">Site web</label>
              <div class="col-sm-7">
                 <input type="text" class="form-control" name="website" value="<?php if (isset($website)) echo $website; ?>" placeholder="http://....">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-12">
                <div class="checkbox">
  	          <small>En fournissant ces informations, vous acceptez qu'elles soient publiées dans la liste des contributeurs</small>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Abandonner</button>
           <input type="submit" class="btn btn-primary" value="Valider"/>
          </form>
         </div>
        </div>
      </div>
    </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.elevatezoom.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/bootstrap-datepicker.fr.js"></script>
    <script type="text/javascript" src="js/jquery.flot.min.js"></script>
    <script type="text/javascript" src="js/jquery.flot.pie.min.js"></script>
    <script>
<?php
/****************
/* STATISTIQUES
/***************/

$fait = get_pc_done();
?>
$('#myAffix').affix({
  offset: {
    top: 100,
    bottom: function () {
      return (this.bottom = $('.footer').outerHeight(true))
    }
  }
})
$("#autresthemes").click(function() {
  autre = prompt('Thème que vous souhaitez ajouter :');
  if(autre) {
      $('<div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" autocomplete="off" name="themes|'+autre+'" checked="checked">'+autre+'</label></div>').appendTo('#themes');
  }
  return false;
  //$('#autresthemes').addClass('active');
});
data = [ { label: "Fait",  data: <?php echo $fait; ?>, color: '#5CB85C'}, { label: "A faire",  data: <?php echo 100 - $fait; ?>, color: '#FFF'} ];
$.plot("#statpie", data , {series: { pie: { show: true,  label: { radius: 0.33, threshold: 0.1, show: true, formatter: function(data, serie){ return serie.label+'<br/>'+Math.round(10*serie.percent)/10+'%';}}}},legend:{show: false}, grid:{hoverable: true}});
    </script>
      <p></p>
  </body>
</html>

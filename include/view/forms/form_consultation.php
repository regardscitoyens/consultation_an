<div class="form-group">
  <label>Parmi les thèmes suivants, quels sont ceux qui sont abordés dans la contribution&nbsp;:</label>
  <p class="text-muted">Pour mieux traiter les constributions, nous avons besoin de les classer par thèmes.</p>
  <div id="themes" class="row">
    <?php foreach (get_document_categories() as $c ) : ?>
        <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" autocomplete="off" name="themes|<?php echo $c; ?>"><?php echo $c; ?></label></div>
    <?php endforeach; ?>
    </div>
    <a id=autresthemes href="">Ajouter un theme</a>
</div>
<div class="form-group">
  <label>La contribution contient&nbsp;:</label>
  <p class="text-muted">Les contributions peuvent contenir des éléments très différents. Adiez nous à les identifier.</p>
  <div class="row">
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|l'évocation d'expérience(s) personnelle(s)" value="l'évocation d'expérience(s) personnelle(s)">L'évocation d'expérience(s) personnelle(s)</label></div>
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une information ou donnée sur le problème" value="des informations ou données sur le problème">Des informations ou données sur le problème</label></div>
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une analyse des causes du problème" value="une analyse des causes du problème">Une analyse des causes du problème</label></div>
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une prise de position contre une mesure existante" value="des prises de position contre une mesure existante">Des prises de position contre une mesure existante</label></div>
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une proposition de nouvelles mesures" value="des propositions de nouvelles mesures">Des propositions de nouvelles mesures</label></div>
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une question ou demande d'information" value="des questions ou demandes d'information">Des questions ou demandes d'information</label></div>
    <div style="margin-top: 2px; margin-bottom: 2px;" class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une prise de position en faveur d'une mesure existante" value="des prises de position en faveur d'une mesure existante">Des prises de position en faveur d'une mesure existante</label></div>
  </div>
</div>
<div class="form-group">
  <p class="text-muted">Aidez nous à faire émerger les propos les plus intéressants. D'un usage statistiques à l'organisation d'une audition à l'Assemblée Nationale, toutes les contributions peuvent être utiles. Si vous pensez que la contribtion n'a pas d'intérêt, indiquez le nous via le bouton « Signaler un problème »</p>
  <label>Quel usage trouveriez vous pertinant de réaliser avec cette contribution&nbsp;?</label>
  <div class="text-center"><div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default"><input type="radio" name="realisation|en faire un usage statistique" id="option2" autocomplete="off">En faire un usage statistique</label>
    <label class="btn btn-default"><input type="radio" name="realisation|la synthétiser" id="option3" autocomplete="off">La synthétiser</label>
    <label class="btn btn-default"><input type="radio" name="realisation|la publier" id="option4" autocomplete="off">La publier</label>
    <label class="btn btn-default"><input type="radio" name="realisation|mérite une audition" id="option5" autocomplete="off">Mérite une audition</label>
  </div></div>
</div>

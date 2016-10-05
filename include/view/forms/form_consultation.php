<div class="form-group">
  <label>Parmi les thèmes suivants, quels sont ceux qui sont abordés dans la contribution&nbsp;:</label>
  <div class="btn-group" data-toggle="buttons">
    <?php foreach (get_document_categories() as $c ) : ?>
      <label class="btn btn-default"><input type="checkbox" autocomplete="off" name="themes|<?php echo $c; ?>"><?php echo $c; ?></label>
    <?php endforeach; ?>
    <label class="btn btn-default" id="autresthemes">Autre</label>
  </div>
</div>
<div class="form-group">
  <label>La contribution contient&nbsp;:</label>
  <div class="row">
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|l'évocation d'expérience(s) personnelle(s)">l'évocation d'expérience(s) personnelle(s)</label></div>
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une information ou donnée sur le problème">des informations ou données sur le problème</label></div>
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une analyse des causes du problème">une analyse des causes du problème</label></div>
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une prise de position contre une mesure existante">des prises de position contre une mesure existante</label></div>
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une proposition de nouvelles mesures">des propositions de nouvelles mesures</label></div>
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une question ou demande d'information">des questions ou demandes d'information</label></div>
    <div class="checkbox col-md-6"><label><input type="checkbox" name="affirmations|une prise de position en faveur d'une mesure existante">des prises de position en faveur d'une mesure existante</label></div>
  </div>
</div>
<div class="form-group">
  <label>Quel usage trouveriez vous pertinant de réaliser avec cette contribution&nbsp;?</label>
  <div class="text-center"><div class="btn-group" data-toggle="buttons">
    <label class="btn btn-default"><input type="radio" name="realisation|en faire un usage statistique" id="option2" autocomplete="off">en faire un usage statistique</label>
    <label class="btn btn-default"><input type="radio" name="realisation|la synthétiser" id="option3" autocomplete="off">la synthétiser</label>
    <label class="btn btn-default"><input type="radio" name="realisation|la publier" id="option4" autocomplete="off">la publier</label>
    <label class="btn btn-default"><input type="radio" name="realisation|mérite une audition" id="option5" autocomplete="off">mérite une audition</label>
  </div></div>
</div>

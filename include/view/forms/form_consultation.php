<div class="form-group">
  <label>La personne dont vous étudiez la participation à la consultation a voulu aider les députés car elle semble :</label>
  <ul>
    <div class="checkbox"><label><input type="checkbox" name="motivations|subir ou avoir subi ce problème">subir ou avoir subi ce problème</label></div>
    <div class="checkbox"><label><input type="checkbox" name="motivations|être en contact avec des personnes qui subissent ou ont subi ce problème">être en contact avec des personnes qui subissent ou ont subi ce problème</label></div>
    <div class="checkbox"><label><input type="checkbox" name="motivations|pouvoir, par votre action, résoudre ou améliorer ce problème">pouvoir, par votre action, résoudre ou améliorer ce problème</label></div>
    <div class="checkbox"><label><input type="checkbox" name="motivations|avoir fait des recherches approfondies sur ce problème">avoir fait des recherches approfondies sur ce problème</label></div>
    <div class="checkbox"><label><input type="checkbox" name="motivations|avoir une opinion à exprimer sur ce problème">avoir une opinion à exprimer sur ce problème</label></div>
  </ul>
</div>
<div class="form-group">
  <label>Parmi les thèmes suivants, quels sont ceux qui sont abordés dans la contribution&nbsp;:</label>
  <div class="text-center">
    <div class="pagination">
      <div class="btn-group" data-toggle="buttons">
    <?php foreach (get_document_categories() as $c ) : ?>
      <label class="btn btn-default"><input type="checkbox" autocomplete="off" name="themes|<?php echo $c; ?>"><?php echo $c; ?></label>
    <?php endforeach; ?>
    </div></div>
  </div></div>
  <div class="form-group">
    <label>Sélectionner parmi les affirmations suivantes celles qui s'appliquent à cette contribution&nbsp;:</label>
    <ul>
      <div class="checkbox"><label><input type="checkbox" name="affirmations|Le propos relate une expérience">Le propos relate une expérience</label></div>
      <div class="checkbox"><label><input type="checkbox" name="affirmations|Le propos est argumenté">Le propos est argumenté</label></div>
      <div class="checkbox"><label><input type="checkbox" name="affirmations|Le propos soulève un problème juridique">Le propos soulève un problème juridique</label></div>
      <div class="checkbox"><label><input type="checkbox" name="affirmations|Le propos fait état d'un problème personnel">Le propos fait état d'un problème personnel</label></div>
    </ul>
  </div>
  <div class="form-group">
    <label>Quel usage trouveriez vous pertinant de réaliser avec cette contribution&nbsp;?</label>
    <div class="text-center"><div class="btn-group" data-toggle="buttons">
      <label class="btn btn-default"><input type="radio" name="realisation|l'ignorer" id="option1" autocomplete="off">l'ignorer</label>
      <label class="btn btn-default"><input type="radio" name="realisation|en faire un usage statistique" id="option2" autocomplete="off">en faire un usage statistique</label>
      <label class="btn btn-default"><input type="radio" name="realisation|la synthétiser" id="option3" autocomplete="off">la synthétiser</label>
      <label class="btn btn-default"><input type="radio" name="realisation|la publier" id="option4" autocomplete="off">la publier</label>
      <label class="btn btn-default"><input type="radio" name="realisation|mérite une audition" id="option5" autocomplete="off">mérite une audition</label>
    </div></div>
  </div>

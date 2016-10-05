<div class="form-group">
  <label>Parmi les thèmes suivants, quels sont ceux qui sont abordés dans la contribution&nbsp;:</label>
  <div class="btn-group" data-toggle="buttons">
    <?php foreach (get_document_categories() as $c ) : ?>
      <label class="btn btn-default"><input type="checkbox" autocomplete="off" name="themes|<?php echo $c; ?>"><?php echo $c; ?></label>
    <?php endforeach; ?>
    <label class="btn btn-default" id="autresthemes">Autre</label>
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

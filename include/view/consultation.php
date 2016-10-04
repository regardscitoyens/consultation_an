<div class='row' style="margin-top: 60px;">
<div class="col-md-6 col-md-offset-3">
<?php include(__DIR__.'/consultation_frame.php');  ?>
  <?php if ($numerisations) :
  $exceptions = array(
    '"CORRECTED"' => "Problème remonté, corrigé",
    '"NEANT"' => "NÉANT",
    '"PB #1"' => "ILLISIBLE",
    '"PB #2"' => "MAUVAIS SCAN",
    '"PB #3"' => "INCOMPLET",
  );?>
  <div id="numerisations"></div>
  <div class="well numerisations">
    <div class="media text-center">
      <h3 class="page-header text-muted">Évaluation<?php echo ($numdone ? " réalisée !" : " en cours"); ?></h3>
    </div>
  </div>
  <?php endif ?>
</div>
</div>

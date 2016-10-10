    <div class="container-fluid" role="main">
      <div class="jumbotron"><div class="row">
        <div class="col-md-12"><h1 class="text-center">Aidons l'Assemblée à écouter les Citoyens</h1> </div>
        <div class="col-md-8 ">
          <h3 style="color:red">!!! INTRO TODO !!!</h3>
        <p id="start-num" class="text-right" style="margin-right: 50px"><a href="#crowdsource" class="btn btn-primary btn-lg" role="button">Participer à la numérisation &raquo;</a></p>
        </div>
        <div id="stats" class="col-md-4 well well-lg">
          <h3 class="text-center page-header">Statistiques</h3>
          <div class="row">
            <div class="col-sm-6 col-xs-12 text-center">
               <div id="statpie" style="height: 200px;"></div>
            </div>
            <div class="col-sm-6 col-xs-12">
	<?php require_once(__DIR__.'/../model/user.php');?>
               <h4>Top des contributeurs</h4>
               <ol>
		<?php foreach (users_top() as $user ) {
                    echo '<li title="'.$user['nickname'].' - '.$user['nb'].' contributions">';
                    $link = 0;
                    if ($user['twitter']) { $link = 1 ;echo '<a target="_blank" href="http://twitter.com/'.$user['twitter'].'">';}
                    else if ($user['website']) { $link = 1 ;echo '<a target="_blank" href="'.$user['website'].'">';}
                    echo str_replace('anonyme ', '', $user['nickname']);
                    if ($link) echo '</a>';
                    echo '<small class="text-muted"> ('.$user['nb'].')</small>';
                    echo'</li>';
                } ?>
               </ol>
               <span><a href="contributeurs.php">Consulter le top 50</a></span>
              </div>
	        <div class="col-xs-12 text-center">
              <span class="text-muted text-center">Un total de <?php echo preg_replace('/([0-9][0-9][0-9])$/', '&nbsp;\1', get_nb_documents()); ?> constributions sont à évaluer et il reste <?php echo get_nb_jours_restant(); ?> jours de consultation.
              <?php echo get_nb_users(); ?> citoyens ont déjà contribué au total <?php echo preg_replace('/([0-9][0-9][0-9])$/', '&nbsp;\1', get_nb_contribs()); ?> fois</span>
            </div>
          </div>
         </div>
        </div>
      </div>

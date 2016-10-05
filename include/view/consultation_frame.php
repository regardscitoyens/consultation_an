          <div class="well">
            <div class="media text-center">
              <div class="media-body">
               <h3 class="page-header text-muted">Contribution à la consultation Égalité Femme / Homme</h3>
               <h4 class="text-muted"><?php echo $theme_titre; ?></h4>
              </div>
             </div>
             <p>À la question «&nbsp;<?php echo $question; ?>&nbsp;», une personne a répondu&nbsp;: </p>
             <p><b class="lead">«&nbsp;</b><samp>
               <?php echo preg_replace('/\n/', '</samp></p><p><samp>', $text); ?>
             </samp><b class="lead">&nbsp;»</b></p>
             <div>
               <p class="text-right"><a href="<?php echo $theme_url; ?>">Voir cette partie du questionnaire de la consultation</a></p>
             </div>
          </div>

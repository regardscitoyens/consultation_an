          <div class="well">
            <div class="media text-center">
              <div class="media-body">
               <h3 class="page-header text-muted">Voici une réponse au questionnaire Égalité Femmes / Hommes</h3>
               <h4 style="margin-top: 18px; margin-bottom: 2px; font-size: 20px;">Partie «&nbsp;<?php echo $theme_titre; ?>&nbsp;»</h4>
              </div>
             </div>
             <p></p>
                  <footer>À la question :</footer>
                  <span class="text-muted"><?php echo $question; ?><br /></span>
                  <br />
                  <footer>Une personne a répondu&nbsp;:</footer><br/>
                  <blockquote style="font-size: 17px"><?php echo nl2br($text); ?>
                  </blockquote>
             <div>
               <p class="text-right"><a href="<?php echo $theme_url; ?>">Voir cette partie du questionnaire de la consultation</a></p>
             </div>
          </div>

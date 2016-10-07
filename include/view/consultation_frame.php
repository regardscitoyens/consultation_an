          <div class="well">
            <div class="media text-center">
              <div class="media-body">
               <h3 class="page-header text-muted">Contribution à la consultation Égalité Femme / Homme</h3>
               <h4 style="margin-top: 18px; margin-bottom: 2px; font-size: 20px;"><?php echo $theme_titre; ?></h4>
              </div>
             </div>
             <p></p>
             <blockquote style="font-size: 17px">
                  <footer>À la question :</footer>
                  <span class="text-muted"><?php echo $question; ?><br /></span>
                  <br />
                  <footer>Une personne a répondu&nbsp;:</footer>
                    <?php echo nl2br($text); ?>
             </blockquote>
             <div>
               <p class="text-right"><a href="<?php echo $theme_url; ?>">Voir cette partie du questionnaire de la consultation</a></p>
             </div>
          </div>

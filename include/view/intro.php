<div class="jumbotron">
  <div class="row">
  <div class="col-md-12"><h1 class="text-center">Aidons l'Assemblée à écouter les expressions citoyennes</h1> </div>
  <div class="col-md-8 ">
    <div class="text-center row" id="introcitation">
    <blockquote class="col-xs-12"> «&nbsp;Merci de m'avoir lue, même si je doute que mon commentaire ne soit lu jusqu'au bout, voire lu tout court&nbsp;!&nbsp;» </blockquote>
    <p class="text-right col-xs-11"><small>extrait d'une contribution à la consultation Égalité Femmes / Hommes</small></p>
    </div>

    <p>L'Assemblée nationale a <a href="http://www2.assemblee-nationale.fr/consultations-citoyennes/evaluation-de-la-loi-du-4-aout-2014-sur-l-egalite-reelle-entre-les-femmes-et-les-hommes">mis en ligne une consultation afin d'évaluer l'efficacité de la loi sur l'égalité homme/femme</a>. Dans ce questionnaire essentiellement à choix multiples, 5 questions qualitatives proposent aux citoyens de présenter par écrit des remarques, analyses, exemples ou ressentis personnels.</p>

    <p>Les précédentes expériences de consultations citoyennes  (<a href="http://www2.assemblee-nationale.fr/consultations-citoyennes/droits-des-malades-et-fin-de-vie">«&nbsp;Droits des malades et fin de vie&nbsp;»</a> organisée par l'Assemblée, <a href="https://www.republique-numerique.fr/project/projet-de-loi-numerique/consultation/consultation">«&nbsp;Republique numérique&nbsp;»</a>, organisée par le Gouvernement...) ont montré qu'il était encore difficile pour les parlementaires, le gouvernement et leurs services respectifs de lire et d'analyser un grand nombre de contributions textuelles dans un temps très court. Cela représente de très longues heures de travail.</p>

    <p>En partenariat avec <a href="http://democracyos.eu/">Democracy OS France</a> et <a href="http://pbsolving.fr">PbSolving Lab</a>, <a href="http://regardscitoyens.org/">Regards Citoyens</a> propose à tout citoyen de participer au processus d'analyse et d'exploitation de ces contributions qualitatives afin de s'assurer que tous les propos seront lus et évalués. En incluant les citoyens aux coeur du processus consultatif, cette première expérimentation de crowdsourcing au service du Parlement vise à venir en aide aux députés et aux administrateurs de l'Assemblée en leur facilitant la tâche de catégorisation et d'identification des différents types de contenus.</p>

    <p>Le résultat de ce travail collectif sera remis aux <a href="http://www2.assemblee-nationale.fr/14/les-delegations-comite-et-office-parlementaire/comite-d-evaluation-et-de-controle-des-politiques-publiques/secretariat/evaluations-en-cours/mission-d-evaluation-de-la-politique-publique-en-faveur-de-l-egalite-entre-les-femmes-et-les-hommes">députés de la mission d'évaluation en charge de la consultation</a>, ses rapporteurs (Sébastien Denaja et Guy Geoffroy) et au président de la commission des lois (Dominique Raimbourg), le 25 octobre, lors d'une audition organisée à l'Assemblée.</p>

    <div class="text-right row">
      <p id="start-num" class="text-right" style="margin-right: 50px"><a href="http://www2.assemblee-nationale.fr/consultations-citoyennes/evaluation-de-la-loi-du-4-aout-2014-sur-l-egalite-reelle-entre-les-femmes-et-les-hommes" target="_blank" class="btn btn-default btn-lg" role="button">Accéder à la consultation &raquo;</a> &nbsp; <a href="#crowdsource" class="btn btn-primary btn-lg" role="button">Participer à la numérisation &raquo;</a></p>
    </div>
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

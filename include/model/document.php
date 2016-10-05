<?php

require_once(__DIR__.'/../db.php');

function get_nb_jours_total() {
  return 14;
}
function get_nb_jours_restant() {
  return 13;
}

function get_document_categories() {
  $mots = array( "Violences faites aux femmes", "Prostitution", "Préjugés sexistes", "Maîtrise de la sexualité",
  "Précarité des femmes", "Egalité professionnelle et salariale", "Articulation des temps de vie", "Accès aux responsabilités", "Construction sociale des rôles sexués",
  "Pension alimentaire", "RSA", "Représentations médiatiques", "Aides sociales", "Internet", "Expérimentation départementale");
  sort($mots);
  return $mots;
}

function get_pc_done() {
  $total = get_nb_documents();
  $contribs = get_nb_contribs();
  $done = get_nb_done();
  return ($contribs / $total * 4) * (get_nb_jours_total() - get_nb_jours_restant()) / get_nb_jours_total();
}

function get_rand_document() {
  global $bdd;
  if (!$bdd) {
    $id = rand(0, 22);
    return get_document_from_id($id);
  }
  if (isset($_GET['goto'])) {
    $req = $bdd->prepare("SELECT text, theme, source, question, id, ips, tries, source FROM documents WHERE id = :id ");
    $req->execute(array('id' => $_GET['goto']));
  }else{
    $req = $bdd->prepare("SELECT text, theme, source, question, id, ips, tries, source FROM documents WHERE enabled = 1 AND done = 0 AND ips NOT LIKE :ip ORDER BY rand() LIMIT 1 ");
    $req->execute(array('ip' => '%,'.$_SERVER['REMOTE_ADDR'].',%'));
    if (!$req->rowCount()) {
      $req = $bdd->prepare("SELECT text, theme, source, question, id, ips, tries, source FROM documents WHERE enabled = 1 AND ips NOT LIKE :ip ORDER BY rand() LIMIT 1 ");
      $req->execute(array('ip' => '%,'.$_SERVER['REMOTE_ADDR'].',%'));
    }
  }
  return get_document_from_req($req);
}

function get_document_from_id($id) {
  global $bdd;
  if (!$bdd) {
    return array();
  }
  $req = $bdd->prepare("SELECT text, theme, source, question, id, ips, tries, source FROM documents WHERE id = :id");
  $req->execute(array('id' => $id));
  return get_document_from_req($req);
}

function get_document_from_req($req) {
  global $sections;
  $theme2url = array("", "", "http://www2.assemblee-nationale.fr/questionnaire/form/EGALITE2",
                   "http://www2.assemblee-nationale.fr/questionnaire/form/EGALITE3",
                   "http://www2.assemblee-nationale.fr/questionnaire/form/EGALITE4",
                   "http://www2.assemblee-nationale.fr/questionnaire/form/EGALITE5",
                   "http://www2.assemblee-nationale.fr/questionnaire/form/EGALITE6");

  $theme2titre = array("", "", "La place et l’image des femmes dans les médias audiovisuels et sur Internet",
                        "Le partage des responsabilités parentales",
                        "La lutte contre les impayés de pensions alimentaires",
                        "La protection contre les violences conjugales",
                        "A propos de la consultation");

  $data = $req->fetch();
  if (!$data) {
    return 0;
  }
  $doc['text'] = preg_replace('/[ \n]*$/', '', $data['text']);
  $doc['theme'] = $data['theme'];
  $doc['theme_url'] = $theme2url[$data['theme']];
  $doc['theme_titre'] = $theme2titre[$data['theme']];
  $doc['question'] = $data['question'];
  $doc['id'] = $data['id'];
  $doc['ips'] = $data['ips'];
  $doc['tries'] = $data['tries'];
  if (isset($data['done'])) {
    $doc['done'] = $data['done'];
    $doc['task'] = $data['selected_task'];
  }
  $doc['source'] = $data['source'];
  return $doc;
}

function get_document_from_staticid($id) {
  global $noms, $sections, $images, $forms;
  $doc = array();
  $doc['text'] = "Les plateformes de consultation s'inscrivant dans une démocratie renouvelée à l'heure du numérique doivent respecter les principes de transparence attendus en démocratie. C'est pour cette raison qu'ils doivent reposer sur des logiciels libres dont le code source est diffusé et réutilisable librement, et que ces plateformes doivent permettre la production de données ouvertes non nominatives.\nEnfin, si un acteur privé est chargé de la mise en place de ces plateformes, il ne peut en aucun cas faire usage des données à caractère personnel collectées dans un autre cadre que celui de la consultation pour laquelle elles ont été enregistrées. Ces données doivent de plus être détruites à l'issue du processus de consultation.";
  $doc['theme'] = "améliorer la place et l’image des femmes dans les médias audiovisuels et sur Internet";
  $doc['id'] = $id;
  $doc['source'] = "FAKE";
  return $doc;
}

function get_document_tasks($id) {
  $tasks = array();
  global $bdd;
  if (!$bdd) {
    return $tasks;
  }
  $req = $bdd->prepare('SELECT t.id, t.created_at, t.data, t.userid, u.nickname FROM tasks t JOIN users u ON t.userid = u.id OR t.userid = "" WHERE t.document_id = :id GROUP BY t.id ORDER BY t.id');
  $req->execute(array('id' => $id));
  while($data = $req->fetch()){
    if (!$data['nickname']) {
      if ($data['userid'])
        $data['nickname'] = 'Citoyen anonyme n°'.$data['userid'];
      else $data['nickname'] = 'Citoyen virtuel';
    }
    array_push($tasks, $data);
  }
  return $tasks;
}

function get_nb_contribs() {
  global $bdd;
  if (!$bdd) {
    return 0;
  }
  $req = $bdd->prepare("SELECT count(*) as ok FROM tasks");
  $req->execute();
  $data = $req->fetch();
  return $data['ok'];
}


function get_nb_done() {
  global $bdd;
  if (!$bdd) {
    return 0;
  }

  $req = $bdd->prepare("SELECT count(*) as done FROM documents WHERE done = 1");
  $req->execute();
  $data = $req->fetch();
  return $data['done'];
}

function get_nb_documents() {
  global $bdd;
  if (!$bdd) {
    return 0;
  }
  $req = $bdd->prepare("SELECT count(*) as total FROM documents");
  $req->execute();
  $data = $req->fetch();
  return $data['total'];
}

<?php
require_once(__DIR__.'/../model/document.php');
require_once(__DIR__.'/../model/user.php');

$current_url = 'http';
if ($_SERVER["HTTPS"] == "on") {$current_url .= "s";}
$current_url .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
  $current_url .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"];
} else {
  $current_url .= $_SERVER["SERVER_NAME"];
}
$current_url .= str_replace('save.php', '', $_SERVER["REQUEST_URI"]);

if (isset($_GET['pb'])) {
  $token = $_GET['token'];
}else{
  $token = $_POST['token'];
}

if ($token != $_SESSION['token'] || !$bdd) {
  $_SESSION['sent_ok'] = true;
  $_SESSION['token'] = null;
  header("Location: ./#crowdsource\n");
  exit;
}

//Gestion du 2d écran (synthèse)
if (isset($_POST['synthese']) && isset($_SESSION['task_id'])) {
  if ($_POST["synthese"]) {
    $req = $bdd->prepare("UPDATE tasks SET synthese = :synthese WHERE id = :task_id");
    $req->execute(array('synthese' => $_POST['synthese'], 'task_id' => $_SESSION['task_id']));
    $_SESSION['synthese'] = $_POST['synthese'];
  }
  $_SESSION['task_id'] = null;
  $_SESSION['affirmation'] = null;
  $_SESSION['lastpage'] = $current_url."consultation.php?id=".$_SESSION['document_id'];
  $_SESSION['sent_ok'] = true;
  $_SESSION['token'] = null;
  $_SESSION['document_id'] = null;

  header("Location: ./#crowdsource\n");
  exit;
}


if (isset($_GET['pb'])) {
  $data = "PB #".$_GET['pb'];
}else if (isset($_POST['neant'])) {
  $data = 'NEANT';
}else {
  $vars = $_POST;
  $data = array();
  $affirmations = array();
  var_dump($vars);
  foreach($vars as $name => $value) {
    $keyval = explode('|', str_replace('_', ' ', $name));
    if (!isset($data[$keyval[0]])) {
      $data[$keyval[0]] = array();
    }
    array_push($data[$keyval[0]], $value);
    if ($keyval[0] == "affirmations") {
      $affirmations[] = $value;
    }
  }
  if (!count($data)) $data = 'NEANT';
}
$json = json_encode($data);

retrieve_user_or_create_it();
$req = $bdd->prepare('INSERT INTO tasks (ip, userid, document_id, data, created_at) VALUES (:ip, :user_id, :document_id, :json, NOW());');
$req->execute(array('ip' => $_SERVER['REMOTE_ADDR'], 'user_id' => $_SESSION['user_id'], 'document_id' => $_SESSION['document_id'], 'json' => $json));

$doc = get_document_from_id($_SESSION['document_id']);
$req = $bdd->prepare('UPDATE documents SET ips = :ips, tries = :tries WHERE id = :document_id');
$req->execute(array('ips' => $doc['ips'].','.$_SERVER['REMOTE_ADDR'].',', 'tries' => $doc['tries'] + 1, 'document_id' => $_SESSION['document_id']));

$req = $bdd->prepare('SELECT id FROM tasks WHERE userid = :user_id AND document_id = :document_id');
$req->execute(array('user_id' => $_SESSION['user_id'], 'document_id' => $_SESSION['document_id']));
if ($req->rowCount() && count($affirmations)) {
  $data = $req->fetch();
  $_SESSION['task_id'] = $data['id'];
  $_SESSION['affirmation'] = $affirmations[array_rand($affirmations)];
  header("Location: ./#crowdsource\n");
  exit;
}

$_SESSION['lastpage'] = $current_url."consultation.php?id=".$_SESSION['document_id'];
$_SESSION['sent_ok'] = true;
$_SESSION['token'] = null;
$_SESSION['document_id'] = null;

header("Location: ./#crowdsource\n");
exit;

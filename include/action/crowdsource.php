<?php
include(__DIR__."/../model/document.php");
require_once(__DIR__."/../model/user.php");

retrieve_user_or_create_it();
if (isset($_SESSION['task_id']) && isset($_SESSION['document_id']) && isset($_SESSION['affirmation'])) {
  $is_synthese = true;
  $affirmation = $_SESSION['affirmation'];
  $_SESSION['affirmation_save'] = $_SESSION['affirmation'];
  $_SESSION['affirmation'] = null;
  $doc = get_document_from_id($_SESSION['document_id']);
}else{
  $is_synthese = false;
  $doc = get_rand_document();
}
$nodoc = 0;
if (!$doc) {
  $nodoc = 1;
}else{
  $text = $doc['text'];
  $theme = $doc['theme'];
  $theme_titre = $doc['theme_titre'];
  $theme_url = $doc['theme_url'];
  $question = $doc["question"];
  $_SESSION['document_id'] = $doc['id'];
}

if (isset($_SESSION['nickname'])) {
  $nickname = $_SESSION['nickname'];
  $twitter = $_SESSION['twitter'];
  $website = $_SESSION['website'];
}

$_SESSION['token'] = md5(rand());
$token = $_SESSION['token'];
$sent_ok = '';
if (isset($_SESSION['sent_ok'])) {
  $sent_ok = $_SESSION['sent_ok'];
}
$_SESSION['sent_ok'] = null;

$menu_home = 1;

<?php
include(__DIR__."/../model/document.php");
require_once(__DIR__."/../model/user.php");

retrieve_user_or_create_it();
$doc = get_rand_document();

$nodoc = 0;
if (!$doc) {
  $nodoc = 1;
}else{
  $text = $doc['text'];
  $theme = $doc['theme'];
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

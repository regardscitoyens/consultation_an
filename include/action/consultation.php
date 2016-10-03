<?php

include(__DIR__.'/../model/document.php');

$doc = get_document_from_id($_GET['id']);
if (!$doc) {
  $cururl = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
  $baseurl = preg_replace("#/[^/]*$#", "/", $cururl);
  header('Location: '.$baseurl, true, 301);
  die();
}
$text = $doc['text'];
$theme = $doc['theme'];
$source = $doc['source'];
$numdone = $doc['done'];

$menu_declaration = 1;

if ($numdone || $_GET['showcontribs']) {
  $numerisations = get_document_tasks($doc['id']);
  $task = $doc['task'];
}

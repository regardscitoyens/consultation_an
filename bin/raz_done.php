<?php

include(__DIR__.'/../include/model/document.php');

$sql = "UPDATE documents SET done = 0";
$req = $bdd->prepare($sql);
$req->execute();


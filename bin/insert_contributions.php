<?php

include(__DIR__.'/../include/db.php');

echo $argv[1]."\n";
$fh = fopen($argv[1], 'r');
fgets($fh);
while ($json = json_decode(fgets($fh))) {
  foreach($json->questions as $q) {
    if (isset($q->Reponse)) foreach($q->Reponse as $r) {
      if (isset($r->critere->precision) && $r->critere->texte != "Autre") {
        $req = $bdd->prepare("INSERT INTO documents (source, theme, question, text) VALUES (:source, :theme, :question, :texte)");
        $data = array("source" => $json->id."/".$q->id, "theme" => $argv[2], "question" => $q->texte, "texte" => $r->critere->precision);
        $req->execute($data);
      }
    }
  }
}
exit;

$data = array('img' => $argv[1], 'type' => $argv[2], 'parlementaire' => $argv[3], 'parlementaire_avatarurl' => $argv[4], 'source' => $argv[5]);
if (!$req->execute($data)) {
  print "unable to insert this tupple : \n";
  print_r($data);print_r($req->errorInfo());
  print "\n";
  exit(2);
}

<?php

include(__DIR__.'/../include/model/document.php');

$sql = "SELECT id FROM documents WHERE done = 0 AND tries > 2";
if (isset($argv[1])) {
  $sql .= " AND id = ".$argv[1];
}
$req = $bdd->prepare($sql);
$req->execute();
while($doc = $req->fetch()) {
  $req2 = $bdd->prepare("SELECT id, data, synthese FROM tasks WHERE document_id = :id");
  $req2->execute(array('id' => $doc['id']));
  $uniq = array();
  $done = 0;
  while($task = $req2->fetch()) {
    $data = json_decode($task['data']);
    if (count($data)) {
      $md5 = md5(implode(',', $data->affirmations).implode(',',$data->original));
    }else{
      $md5 = md5($task['data']);
    }
    if (!isset($uniq[$md5])) {
      $uniq[$md5] = array('nb' => 1, 'id_selected' => $task['id'], 'synthese' => ($task['synthese']));
    }else{
      $uniq[$md5]['nb']++;
      if ($task['synthese'] && !$uniq[$md5]['synthese']) {
        $uniq[$md5]['id_selected'] = $task['id'];
        $uniq[$md5]['synthese'] = 1;
      }
    }
    var_dump($uniq);
    if ($uniq[$md5]['nb'] >= 3) {
        $selected = $uniq[$md5]['id_selected'];
        $done = 1;
    }
  }
  if ($done) {
    if (isset($argv[1])) echo "Done !\n";
    $req3 = $bdd->prepare("UPDATE documents SET done = 1, selected_task = :task_id WHERE id = :id");
    $req3->execute(array('id' => $doc['id'], 'task_id' => $selected));
  }
}

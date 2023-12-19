<?php

$actors = array(
  1 => "Daniel Craig",
  2 => "Edward Norton",
  3 => "Dave Bautista",
  4 => "Kate Hudson"
);

if (isset($_GET['actorId'])) {
  $actorId = $_GET['actorId'];
  
  
  if (isset($actors[$actorId])) {
    $actorName = $actors[$actorId];
    echo "<h1>$actorName</h1>";
  } else {
    echo "<h1>Invalid actor ID</h1>";
  }
}
?>

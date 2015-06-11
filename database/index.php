<?php

function getProj() {
  global $conn;
  $stmt = $conn->prepare("SELECT name, description FROM project where public=TRUE Order by creation_date limit 3");
  $stmt->execute();
  return $stmt->fetchAll();
}


?>

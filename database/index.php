<?php

function getProj() {
  global $conn;
  $stmt = $conn->prepare("SELECT name, description FROM project where public=TRUE Order by creation_date limit 9");
  $stmt->execute();
}


  ?>

<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

if(isset($_POST['searchVal'])){
  $searchq = $_POST['searchVal'];
  $searchq = preg_replace("#[0-9a-z]#i", "", $searchq);
  $query = $conn->prepare("SELECT * FROM project WHERE name LIKE '%$searchq'") or die("could not search");
  $query->execute();
  $projects = $query->fetchAll();

  if(count($projects)!=0){
    foreach ($projects as &$proj) {
      unset($photo);
      if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.png'))
        $photo = 'images/users/'.$project['username'].'.png';
      if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.jpg'))
        $photo = 'images/users/'.$project['name'].'.jpg';
      if (!$photo) $photo = 'images/assets/default_user.png';
      $proj['photo'] = $photo;
    }
  }
}

echo ($output);

?>
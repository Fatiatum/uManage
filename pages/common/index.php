<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/index.php');

$projects = getProj();

foreach ($projects as $key => $project) {
	unset($photo);
	if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.png'))
		$photo = 'images/users/'.$project['username'].'.png';
	if (file_exists($BASE_DIR.'images/users/'.$project['name'].'.jpg'))
		$photo = 'images/users/'.$project['name'].'.jpg';
	if (!$photo) $photo = 'images/assets/default_user.png';
	$projects[$key]['photo'] = $photo;
}

$smarty->assign('projects',$projects);
$smarty->display('common/index.tpl');

?>

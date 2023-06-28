<?php
include 'config.php';
error_reporting(E_ALL ^ E_WARNING);

//User
$name = $_POST['name'];
$last_name = $_POST['last_name'];
$post = $_POST['post'];
$date_birth = $_POST['date_birth'];
$current_project = $_POST['current_project'];


if (isset($_POST['user-add-submit'])) {
	$add_query = $pdo->prepare("INSERT INTO `users`(`name`, `last_name`, `date_birth`, `post`, `current_project`) VALUES(?,?,?,?,?)");
	$add_query->execute([$name, $last_name, $date_birth, $post, $current_project]);
}



$select_query = $pdo->prepare("SELECT * FROM `users`");
$select_query->execute();
$users = $select_query->fetchAll();


$edit_name = $_POST['edit_name'];
$edit_last_name = $_POST['edit_last_name'];
$edit_post = $_POST['edit_post'];
$edit_date_birth = $_POST['edit_date_birth'];
$edit_current_project = $_POST['edit_current_project'];
$user_id = $_GET['id'];

if (isset($_POST['user-edit-submit'])) {
	$edit_query = $pdo->prepare("UPDATE users SET name=?, last_name=?, date_birth=?, post=?, current_project=? WHERE id=?");
	$edit_query->execute([$edit_name, $edit_last_name, $edit_date_birth, $edit_post, $edit_current_project, $user_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}


if (isset($_POST['user-delete-submit'])) {
	$delete_query = $pdo->prepare("DELETE FROM users WHERE id=?");
	$delete_query->execute([$user_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}

//Project
$project_name = $_POST['project_name'];
$finish_date = $_POST['finish_date'];


if(isset($_POST['project-add-submit'])){
	$project_add_query = $pdo->prepare("INSERT INTO `projects`(`name`, `finish_date`) VALUES(?,?)");
	$project_add_query->execute([$project_name, $finish_date]);
}

$project_select_query = $pdo->prepare("SELECT * FROM `projects`");
$project_select_query->execute();
$projects = $project_select_query->fetchAll();

$edit_project_name = $_POST['edit_project_name'];
$edit_finish_date = $_POST['edit_finish_date'];
$project_id = $_GET['id'];

if (isset($_POST['project-edit-submit'])) {
	$select_project_query = $pdo->prepare("SELECT * FROM `projects` WHERE id=?");
	$select_project_query->execute([$project_id]);
	$selected_project = $select_project_query->fetch();

	$change_user_current_project_query = $pdo->prepare("UPDATE users SET current_project=? WHERE current_project=?");
	$change_user_current_project_query->execute([$edit_project_name, $selected_project["name"]]);

	$project_edit_query = $pdo->prepare("UPDATE projects SET name=?, finish_date=? WHERE id=?");
	$project_edit_query->execute([$edit_project_name, $edit_finish_date, $project_id]);

	header('Location: '. $_SERVER['HTTP_REFERER']);
}


if (isset($_POST['project-delete-submit'])) {
	$select_project_query = $pdo->prepare("SELECT * FROM `projects` WHERE id=?");
	$select_project_query->execute([$project_id]);
	$selected_project = $select_project_query->fetch();

	$change_user_current_project_query = $pdo->prepare("UPDATE users SET current_project=? WHERE current_project=?");
	$change_user_current_project_query->execute(["Нет", $selected_project["name"]]);
	
	$project_delete_query = $pdo->prepare("DELETE FROM projects WHERE id=?");
	$project_delete_query->execute([$project_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
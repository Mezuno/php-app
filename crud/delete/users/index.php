<?php

	require_once $_SERVER['DOCUMENT_ROOT'].'/php-app/includes/links.php';
	require_once $connect_db_link;

	if (!isset($_SESSION['token'])) {
		setcookie('logError', 'Сначала авторизируйтесь.', time()+1, '/php-app');	
		header('Location: '.$auth_user_form_link);
	}

	require $get_auth_user_data_link;
	require $check_access_admin_link;

	$id = $_POST['id'];

	if ($id == $authUserData['id']) {
		setcookie('error', 'Зачем удалять себя?', time()+1, '/php-app');
		header('Location: /php-app/');
	}

	if (isset($id) && !empty($id) && $id != $authUserData['id']) {
		
		// Soft deletes
		$sql = "UPDATE users SET deleted_at = NOW() WHERE id = ?";
		$stmt = $db->prepare($sql);
		$stmt->execute([$id]);

		// Обычное удаление
		// $sql = "DELETE FROM users WHERE id = ?";
		// $stmt = $db->prepare($sql);
		// $stmt->execute([$id]);

	}

	header('Location: /php-app/');
	
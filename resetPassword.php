<?php
	require_once "functions.php";

	if (isset($_GET['email']) && isset($_GET['token'])) {
		$conn = new mysqli('localhost', 'root', '', 'jestectester');

		$email = $conn->real_escape_string($_GET['email']);
		$token = $conn->real_escape_string($_GET['token']);

		$sql = $conn->query("SELECT idUsers FROM users WHERE
			usersEmail='$email' AND token='$token' AND token<>'' AND tokenExpire > NOW()
		");

		if ($sql->num_rows > 0) {
			$newPassword = generateNewString();
			$newPasswordEncrypted = password_hash($newPassword, PASSWORD_BCRYPT);
			$conn->query("UPDATE users SET token='', usersPwd = '$newPasswordEncrypted'
				WHERE usersEmail='$email'
			");

			echo "Your New Password Is $newPassword<br><a href='login.php'>Click Here To Log In</a>";
		} else
			redirectToLoginPage();
	} else {
		redirectToLoginPage();
	}
?>

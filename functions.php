<?php
		function generatePassword($length) {
			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+=-/";
			$password = substr(str_shuffle($chars), 0, $length);
			return $password;
		}

		if (isset($_GET["length"])) {
			$length = intval($_GET["length"]);
			$password = generatePassword($length);
			echo "<p>Generated Password: $password</p>";
		}
?>
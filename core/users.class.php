<?php
	namespace Krypton;

	class User
	{
		//Begin Login Process
		function Login()
		{
			global $mysql;
			if(!empty($_POST['log_username']) && !empty($_POST['log_password']))
			{
				$sql = "SELECT * FROM users WHERE username = :username";
				$user_record = $mysql->Connect->prepare($sql);

				$user_record->bindParam(':username', $_POST['log_username']);
				$user_record->execute();

				$result = $user_record->fetch(\PDO::FETCH_ASSOC);

				if(count($result) > 0 && password_verify($_POST['log_password'], $result['password']))
				{

					$_SESSION['user']['id'] = $result['id'];
					header("Location: ?page=index");
				}
				else
				{

				}
			}
		}
		//Select User Information from DB for Params etc (Users table only!)
		function getUserInfo($key, $id)
		{
			global $mysql;

			$sql = "SELECT $key FROM users WHERE id = $id";
			$prep = $mysql->Connect->prepare($sql);
			$prep->execute();

			$result = $prep->fetch(\PDO::FETCH_ASSOC);
			return $result[$key];
		}

	}

?>

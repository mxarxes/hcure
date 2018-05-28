<?php session_start();
require('controller/frontend.php');
addValues();
?>
<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" type="image/png" href="public/images/logo.png">
		<link rel="stylesheet" type="text/css" href="public/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<body>
		<?php
if(isset($_GET['action'])){
	if($_GET['action'] == 'servir'){
				showServirForm();
			}
			elseif($_GET['action'] == 'addUser'){
				showNewPatientForm();
			}
			elseif($_GET['action'] == 'connexion'){
				showConnexionForm();
			}
			elseif($_GET['action'] == 'disconnect'){
				disconnectUser();
				header('index.php');
			}
			else{
				showIndex();
			}

		}
		else{
			showIndex();
		}
?>
</body>
</html>

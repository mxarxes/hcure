<?php

function dbConnect(){
	try
		{
		 $db = new PDO('mysql:host=localhost;dbname=eleve;charset=utf8', 'eleve', 'raynouard');
		 return $db;
	 }
	 catch (Exception $e)
	 {
      die('Erreur : ' . $e->getMessage());
	}
}
#EXPÉRIMENTAL À TESTER
function writeData($idclient){
	$db = dbConnect();
	if(!empty($_GET['id_client'])){
		#ECRITURE DU FICHIER DATA.TXT
		$fichier = fopen('data.txt', 'a');
		file_put_contents('data.txt', '');
		$patientData = findPatientFromId($idclient);
		fputs($fichier, $patientData['nb1']);
		fputs($fichier, $patientData['nb2']);
		fclose($fichier);
		$nb1 = $patientData['nb1'];
		$nb2 = $patientData['nb2'];
		#LECTURE DU SCRIPT PYTHON
		#$pyscript = 'C:\\wamp\\www\\testing\\scripts\\imageHandle.py';
		#$python = 'C:\\Python27\\python.exe';
		#$cmd = "$python $pyscript";
		#exec("$cmd", $output);
		#OU !!

		#shell_exec(python3 /chemin/du/script.py);

		#ECRITURE DES DONNEES DANS LA TABLE LOG
		$req = $db->prepare('INSERT INTO log(dateheure,patient,infirmier) VALUES (NOW(),:patient,:idinfirmier)');
		$req->execute(array('patient' => $_GET['id_client'], 'idinfirmier' => $_SESSION['idinfirmier']));
	}
}

function findUserFromId($id){
	$db = dbConnect();
	if(isset($_SESSION['idinfirmier'])){
		$req = $db->prepare('SELECT * FROM infirmiers WHERE id = ?');
		$req->execute(array($id));
		$userData = $req->fetch();
		return $userData;
	}
}

function findPatientFromId($id){
	$db = dbConnect();
	$req = $db->prepare('SELECT * FROM patients WHERE id = ?');
	$req->execute(array($id));
	$patientData = $req->fetch();
	$req->CloseCursor();
	return $patientData;
}



function addPatient($prenom,$nom,$nb1,$nb2,$infirmier){
	$db = dbConnect();
	if (isset($_POST['nb1'],$_POST['nb2'])){
		if(isset($_SESSION['idinfirmier'])){
			if (!empty($_POST['nom']) AND !empty($_POST['prenom'])){
				if (!empty($_POST['nb1']) AND isset($_POST['nb2'])){
					if($_POST['nb1'] <= 9 AND $_POST['nb2'] <=9){
						if($_POST['nb1'] >= 0 AND $_POST['nb2'] >=0){
								$req = $db->prepare('INSERT INTO patients(prenom,nom,nb1,nb2,infirmier) VALUES(:prenom, :nom,:nb1,:nb2,:infirmier)');
								$req->execute(array(
													'prenom' => $prenom,
													'nom' =>strtoupper($nom),
													'nb1' => (int)$nb1,
													'nb2' => (int)$nb2,
													'infirmier' => $infirmier));
												}
											}
										}
									}
								}
							}
						}
function connectUser($id,$password){
	$db = dbConnect();
	if(isset($_POST['idinfirmier'])){
		$reponse = $db->prepare('SELECT * FROM infirmiers WHERE id=?');
		$reponse->execute(array($id));
		$donnees = $reponse->fetch();
			if (!empty($password) AND $password == $donnees['password'] AND ($id >= 1 AND $id <= 10)){
				try{
					$_SESSION['idinfirmier'] = (int)$id;
					header('location:index.php');
				}
				catch(Exeption $a){
					die();
					$connectUserError = 1;
				}
			}
			else{
						$connectUserError = 2;
					}
					$reponse->CloseCursor();}
}

function disconnectUser(){
	unset($_SESSION['id']);
	session_destroy();
	header('location:index.php');
}
function listPatients($idinfirmier){
	$db = dbConnect();
	$req = $db->prepare('SELECT * FROM patients WHERE infirmier = ?');
	$req->execute(array($idinfirmier));
	return $req;
}

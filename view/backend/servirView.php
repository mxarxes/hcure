<?php
$db = dbConnect();
	if(!isset($_SESSION['idinfirmier'])){
		header('location:index.php?action=connexion');
	}
	else{
		$userData = findUserFromId($_SESSION['idinfirmier']);
	}
$title = 'Servir un patient';
ob_start(); ?>
<div class="card">
	<div class="card-body">
		<h3 class="card-title">Servir un patient </h3>
		<form method="get" action="">
			<label> Distribuer pour: </label>
			<select name="id_client" class="custom-select ml-2">
<?php
$req = $db->prepare('SELECT * FROM patients WHERE infirmier = ?');
$req->execute(array($_SESSION['idinfirmier']));
while ($patients = $req->fetch())
{
	?>
	<option value="<?= $patients['id'] ?>"><?php echo $patients['nom'] . ' ' . $patients['prenom'] ?></option> <?php
}
$req->CloseCursor;?>

			</select>
			<input type="submit" class="btn btn-primary">
		</form>
	</div>
</div>
<?php $content = ob_get_clean();
require('template.php'); ?>

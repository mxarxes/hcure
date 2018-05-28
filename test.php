<div class="card">
	<div class="card-body">
		<h1 class="card-title"> Connexion </h1>
		<form method="post" action="">
			<select name="idinfirmier" id="idinfirmier" class="custom-select ml-2">
					<?php $infirmiers = $db->query('SELECT * FROM infirmiers');
					while($infirmier = $infirmiers->fetch()){?>
						<option value="<?= $infirmier['id'] ?>"><?= $infirmier['nom'] . ' ' . $infirmier['prenom'] ?></option><?php	} ?>
				</select>
		</form>
	</div>
	<div class="input-group">
		<span class="input-group-addon" id="input-groupe-addon1">Mot de passe</span>
		<input name="password" type="password" />
		<input type="submit" class="btn btn-success ml-2"></div>
</div>

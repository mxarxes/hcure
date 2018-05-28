<?php $title = 'Connexion';
 ob_start(); ?>
<div class="card">
	<div class="card-body">
		<h1 class="card-title"> Connexion </h1>
		<form method="post" action="">
		<?php $infirmiers = $db->query('SELECT * FROM infirmiers'); ?>
			<select name="idinfirmier" id="idinfirmier" class="custom-select ml-2">
					<?php
					
					while($nurse = $infirmiers->fetch()){
						?>
						<option value="<?= $nurse['id'] ?>"><?= $nurse['nom'] . ' ' . $nurse['prenom'] ?></option>
<?php				}?>
			</select>
			<div class="input-group">
				<span class="input-group-addon" id="input-groupe-addon1">Mot de passe</span>
				<input name="password" type="password" />
				<input type="submit" class="btn btn-success ml-2">
			</div>
		</form>
	</div>
</div><?php $content = ob_get_clean(); 
require('template.php'); ?>

<?php
if(!isset($_SESSION['idinfirmier'])){
	header('location:index.php?action=connexion');
	}
$title = 'Nouveau Patient';
ob_start();?>

			<div class="col col-md-4">
				<h3> Nouveau patient </h3>
				<form action="" method="post">

						<div class="input-group"><span class="input-group-addon" id="basic-addon1">Prénom</span>
						<input type="text" name="prenom" class="form-control form-control-lg"></div><br />
						<div class="input-group"><span class="input-group-addon" id="basic-addon1">NOM</span>
						<input type="text" name="nom" class="form-control form-control-lg"></div><br />
						<div class="input-group"><span class="input-group-addon" id="basic-addon1">Nombre de gélules 1</span>
						<input type="text" name="nb1" placeholder="1-9" class="form-control form-control-lg"></div><br />
						<div class="input-group"><span class="input-group-addon" id="basic-addon1">Nombre de gélules 2</span>
						<input type="text" name="nb2" placeholder="1-9" class="form-control form-control-lg"></div><br />
<p class="alert-warning"> Ce patient sera inscrit comme <strong class="alert-link"> votre </strong> patient.</p>
<input type="submit" class="btn btn-primary">
<input class="btn btn-primary" type="reset" value="Réinitialiser">
</div>
</form>
<?php $content = ob_get_clean();
require('template.php') ?>

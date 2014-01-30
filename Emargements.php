<?php include('Functions.php');

	echo $header;?>
	
  <body id="emargements">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      
      <form class="form-horizontal" role="form">
      		<h2 class="form-signin-heading">Feuilles d'emargement</h2>
      		<p>Veuillez selectionner un parcours (spécialité et année) puis une Unité d'enseignement pour voir la liste des étudiants dans cette UE.</p><p>
	      		Vous pouvez laisser le champs UE vide pour avoir la liste de tous les étudiants du parcous toutes UE confondues
      		</p>
		<div class="form-group">
			<label class="col-sm-2 control-label">Choisir un parcours : </label>
			<div class="col-sm-10">
				<select class="form-control">
					<option value="7">Master 1 2IBS</option>
					<option value="6">Master 1 ISRI</option>
					<option value="5">Master 1 MIAGE</option>
					<option value="8">Master 2 2IBS INFO</option>
					<option value="9">Master 2 2IBS INSTRUM</option>
					<option value="4">Master 2 ISRI</option>
					<option value="3">Master 2 MIAGE 2COM</option>
					<option value="1">Master 2 MIAGE OSIE</option>
					<option value="2">Master 2 MIAGE SIS</option>
				</select>
			</div>
		</div>
		  
		<div class="form-group">
			<label class="col-sm-2 control-label">Choisir une UE : </label>
			<div class="col-sm-10">
				<select class="form-control">
					<option value="7"></option>
					<option value="7">M1.2 Anglais</option>
					<option value="7">M1.2 Anglais</option>
				</select>
			</div>
		</div>
		  		 
		  <button type="submit" class="btn btn-primary btn-sm btn-success">Aperçu</button>
		  <button type="submit" class="btn btn-default">Feuilles d'émargement excel</button>
		  <button type="submit" class="btn btn-default" href="#" data-toggle="modal" data-target="#modalEmail">Envoyer un email</button>
		  <button type="submit" class="btn btn-default" href="#" data-toggle="modal" data-target="#modalEmailListe">Liste des emails</button>
		</form>
		
	<div>      	
		<h3>Prévisualisation de la feuille d'émargement pour l'UE Anglais</h3>
		<?php echo $tableEtudiants ;?>
	</div>      	      
      </div> <!-- End jumbotron Introduction HP -->
      <?php echo $footer; ?>
    </div> <!-- /container -->

<!-- Modals -->
<?php echo $modalProfil; ?>
<?php echo $modalEmail; ?>
<?php echo $modalEmailListe	; ?>

<?php echo $footerScripts; ?>
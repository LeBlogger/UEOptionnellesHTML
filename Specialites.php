<?php include('Functions.php');

	echo $header;?>
	
  <body id="specialites">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      
      <!-- Button trigger modal -->
      	
      	<h2>Gestion des Spécialités</h2>
      	
      	<p><button class="FR btn btn-primary btn-sm btn-success" data-toggle="modal" data-target="#modalAjouterEtudiant">
  Ajouter une nouvelle spécialité
</button></p>
      	
      	<table class="table table-condensed table-hover" style="background : #FFF; margin-top:15px;">
        <thead>
          <tr class="active">
            <th>Intitulé</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
	        <tr>
		       <td>Master MIAGE</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#modalVoirEtudiant"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#modalModifierEtudiant"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		    </tr>
		    <tr>
		       <td>Master MIAGE</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#modalVoirEtudiant"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#modalModifierEtudiant"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		    </tr>
		    <tr>
		       <td>Master MIAGE</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#modalVoirEtudiant"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#modalModifierEtudiant"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		    </tr>

        </tbody>
      </table>


      <?php echo $Pagination; ?>
      	      
      </div> <!-- End jumbotron0 Introduction HP -->
      
      <?php echo $footer; ?>
      
      </div> <!-- /container -->

<!-- Modals -->
<?php echo $modalContact; ?>
<?php echo $modalAjouterEtudiant; ?>
<?php echo $modalVoirEtudiant; ?>
<?php echo $modalModifierEtudiant; ?>
<?php echo $modalSupprimerEtudiant; ?>
<?php echo $modalProfil; ?>

<?php echo $footerScripts; ?> 
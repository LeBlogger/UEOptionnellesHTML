<?php include('Functions.php');

	echo $header;?>
	
  <body id="admin">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      
      <!-- Button trigger modal -->
      	
      	<h2>Demandes d'inscriptions en cours</h2>
      	
      	
      	<table class="table table-condensed table-hover" style="background : #FFF; margin-top:15px;">
        <thead>
          <tr class="active">
            <th>Nom</th>
            <th>Prénom</th>
            <th>Année</th>
            <th>Login</th>
            <th>Email</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
	        <tr>
		       <td>Souf</td>
		        <td>Lam</td>
		        <td>M2 MIAGE OSIE</td>
		        <td>Soufiane</td>
		        <td>contact@soufiane.fr</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#modalVoirEtudiant"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#modalModifierEtudiant"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        	<a class="glyphicon glyphicon-ok" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		    </tr>
		    <tr>
		        <td>Souf</td>
		        <td>Lam</td>
		        <td>M2 MIAGE OSIE</td>
		        <td>Soufiane</td>
		        <td>contact@soufiane.fr</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#myModalVoirE"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#myModalModifierE"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#myModalSupprimerE"> </a>
		        	<a class="glyphicon glyphicon-ok" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		    </tr>
		    <tr>
		        <td>Souf</td>
		        <td>Lam</td>
		        <td>M2 MIAGE OSIE</td>
		        <td>Soufiane</td>
		        <td>contact@soufiane.fr</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#myModalVoirE"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#myModalModifierE"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#myModalSupprimerE"> </a>
		        	<a class="glyphicon glyphicon-ok" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		    </tr>
		    <tr>
		        <td>Souf</td>
		        <td>Lam</td>
		        <td>M2 MIAGE OSIE</td>
		        <td>Soufiane</td>
		        <td>contact@soufiane.fr</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#myModalVoirE"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#myModalModifierE"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#myModalSupprimerE">    </a>
		        	<a class="glyphicon glyphicon-ok" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant">   </a>
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

<?php echo $footerScripts; ?> 
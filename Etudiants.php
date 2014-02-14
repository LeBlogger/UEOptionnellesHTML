<?php include('Functions.php');

	echo $header;?>
	
  <body id="etudiants">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      
      <!-- Button trigger modal -->
      	
      	<h2>Gestion des étudiants</h2>
      	
      	<p><button class="btn btn-primary btn-sm btn-success" data-toggle="modal" data-target="#modalAjouterEtudiant">
  Ajouter un nouvel Etudiant
</button> <button class="btn btn-primary btn-sm btn-success" data-toggle="modal" data-target="#modalAjouterEtudiant">
  Télécharger la liste des étudiants
</button></p>
      	<table id="table_id" class="display table table-condensed table-hover" style="background : #FFF; margin-top:15px;"">
    <thead>
          <tr class="active">
            <th>Nom</th>
            <th>Prénom</th>
            <th>Année</th>
            <th>Login</th>
            <th>Email</th>
            <th>Actions</th>
            <td></td>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr><tr>
		       <td>Souf</td>
		        <td>Lam</td>
		        <td>M2 MIAGE OSIE</td>
		        <td>Soufiane</td>
		        <td>contact@soufiane.fr</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#modalVoirEtudiant"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#modalModifierEtudiant"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
		    <tr>
		       <td>SoufTest</td>
		        <td>Lam</td>
		        <td>M2 MIAGE OSIE</td>
		        <td>Soufiane</td>
		        <td>contact@soufiane.fr</td>
		        <td>
		        	<a class="glyphicon glyphicon-search" title="Voir plus d'informations sur cet étudiant" href="#" data-toggle="modal" data-target="#modalVoirEtudiant"> </a>
		        	<a class="glyphicon glyphicon-edit" title="Modifier cet étudiant" href="#" data-toggle="modal" data-target="#modalModifierEtudiant"> </a>
		        	<a class="glyphicon glyphicon-trash" title="Supprimer cet étudiant" href="#" data-toggle="modal" data-target="#modalSupprimerEtudiant"> </a>
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
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
		        </td>
		        <td><input type="checkbox" /></td>
		    </tr>
        </tbody>
</table>
      	      
      </div> <!-- End jumbotron0 Introduction HP -->
      
      <?php echo $footer; ?>
      
      </div> <!-- /container -->

<!-- Modals -->
<?php echo $modalProfil; ?>
<?php echo $modalContact; ?>
<?php echo $modalAjouterEtudiant; ?>
<?php echo $modalVoirEtudiant; ?>
<?php echo $modalModifierEtudiant; ?>
<?php echo $modalSupprimerEtudiant; ?>

<script type="text/javascript">
$('#table_id').DataTable( {
    language: {
        processing:     "Traitement en cours...",
        search:         "Rechercher&nbsp;:",
        sLengthMenu:    "Afficher _MENU_ &eacute;l&eacute;ments",
        info:           "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
        infoEmpty:      "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
        infoFiltered:   "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "Aucun &eacute;l&eacute;ment &agrave; afficher",
        emptyTable:     "Aucune donnée disponible dans le tableau",
        paginate: {
            first:      "Premier",
            previous:   "Pr&eacute;c&eacute;dent",
            next:       "Suivant",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
} );
</script>



<?php echo $footerScripts; ?> 
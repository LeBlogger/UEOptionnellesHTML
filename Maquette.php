<?php include('Functions.php');

	echo $header;?>
	
  <body id="maquette">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      
      <form class="form-horizontal" role="form">
      		<p>Choisir un parcours pour afficher la liste des UE</p>
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
		  		 
		  <button type="submit" class="btn btn-primary btn-sm btn-success">Afficher</button>
		</form>
      
      	<table class="table table-condensed table-hover" style="background : #FFF; margin-top:15px;">
        <thead>
          <tr class="active">
            <th>Intitulé de l'UE</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
	        <tr>
		       <td>M1.11 - Administration des Systèmes d'exploitation MIAGE</td>
		        <td>obligatoire</td>
		    </tr>
		    <tr>
		       <td>M1.11 - Administration des Systèmes d'exploitation MIAGE</td>
		        <td>Optionnelle</td>
		    </tr>
		    <tr>
		       <td>M1.11 - Administration des Systèmes d'exploitation MIAGE</td>
		        <td>obligatoire</td>
		    </tr>
		    <tr>
		       <td>M1.11 - Administration des Systèmes d'exploitation MIAGE</td>
		        <td>obligatoire</td>
		    </tr>
		    <tr>
		       <td>M1.11 - Administration des Systèmes d'exploitation MIAGE</td>
		        <td>obligatoire</td>
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
<?php include('Functions.php');

	echo $header;?>
	
  <body id="recapChoix">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      	<h3></h3>
      	
      	
      	
      	<form class="form-horizontal" role="form">
      		<h2 class="form-signin-heading">Récapitulatif des choix des étudiants</h2>
		<div class="form-group">
			<label class="col-sm-2 control-label">Choisir une année : </label>
			<div class="col-sm-10">
				<select class="form-control">
					<option value="7">Master 1</option>
					<option value="6">Master 2</option>
				</select>
			</div>
		</div>
		  
		<div class="form-group">
			<label class="col-sm-2 control-label">UE Oligatoires : </label>
			<div class="col-sm-10">
				<select class="form-control">
					<option value="7">Cacher</option>
					<option value="7">Afficher</option>
				</select>
			</div>
		</div>
		  		 
		  <button type="submit" class="btn btn-primary btn-sm btn-success">Afficher</button>
		</form>
      	
      	
      	<table class="table table-condensed table-hover" style="background : #FFF; margin-top:15px; font-size: 13px;">
        <thead>
          <tr class="active">
            <th>Intitulé module</th>
            <th>Nb inscrits</th>
            <th>Nb autorisés</th>
            <th>Master 2 2IBS INFO</th>
            <th>Master 2 2IBS INSTRUM</th>
            <th>Master 2 ISRI</th>
            <th>Master 2 MIAGE 2COM</th>
            <th>Master 2 MIAGE OSIE</th>
            <th>Master 2 MIAGE SIS</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="active">M1.03 - Gestion de production</td>
            <td>0</td>
            <td>32</td>
            <td>0</td>
            <td>0</td>
            <td>32</td>
            <td>0</td>
            <td>0</td>
            <td>32</td>
          </tr>
          <tr>
            <td class="active">M1.04 - Traitement du signal et DSP</td>
            <td>0</td>
            <td>32</td>
            <td>0</td>
            <td>0</td>
            <td>32</td>
            <td>0</td>
            <td>0</td>
            <td>32</td>
          </tr>
          <tr>
            <td class="active">M1.1 - Anglais</td>
            <td>0</td>
            <td>32</td>
            <td>0</td>
            <td>0</td>
            <td>32</td>
            <td>0</td>
            <td>0</td>
            <td>32</td>
          </tr>
        </tbody>
      </table>
      
      </div> <!-- End jumbotron Introduction HP -->
      <?php echo $footer; ?>
    </div> <!-- /container -->

<!-- Modals -->
<?php echo $modalContact;?>
<?php echo $modalProfil; ?>

<?php echo $footerScripts; ?>
<?php include('Functions.php');

	echo $header;?>
	
  <body id="recapChoix">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron" style="padding: 10px 20px; margin-top: 5px;">
      	<h3>Récapitulatif des choix des étudiants</h3>
      	
      	<table class="table table-condensed table-hover" style="background : #FFF; margin-top:15px; font-size: 13px;">
        <thead>
          <tr class="active">
            <th>Intitulé module</th>
            <th>Nb inscrits</th>
            <th>Nb autorisés</th>
            <th>Master 1 2IBS</th>
            <th>Master 1 ISRI</th>
            <th>Master 1 MIAGE</th>
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
            <td>0</td>
            <td>0</td>
            <td>0</td>
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
            <td>0</td>
            <td>0</td>
            <td>0</td>
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
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
      </table>
      
      </div> <!-- End jumbotron Introduction HP -->
      <?php echo $footer; ?>
    </div> <!-- /container -->

<!-- Modals -->
<?php echo $modalContact;?>

<?php echo $footerScripts; ?>
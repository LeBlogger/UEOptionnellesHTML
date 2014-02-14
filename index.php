<?php include('Functions.php'); ?>

	<?php echo $header;?>
  
  <body id="index">
  
  <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="#" data-toggle="modal" data-target="#myModalContact"><span class="glyphicon glyphicon-envelope"></span>  Contact</a></li>
        </ul>
        <h3 class="text-muted"><a href="/Etudiant.php">Inscriptions pédagogiques</a></h3>
      </div>
	
	Text Local Sara
	
      <div class="jumbotron">

      textLocalSouf

        <h1>Master STIC - Spécialités ISRI, MIAGE et 2IBS
        <p class="lead">Cette application permet aux étudiants du Master STIC - ISRI, MIAGE et 2IBS de choisir leurs UE optionnelles</p>
        <p>Pour choisir vos UEs optionnelles vous devez :</p>
        <ol>
  <li>Vous inscrire et attendre le mail d'activation de votre compte - Vérifiez votre adresse mail!</li>
  <li>Vous loguer sur le système avec les login/password que vous avez choisis</li>
  <li>Faire vos choix à chaque semestre</li>
</ol> 
        <!-- Button trigger modal -->
<button class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModalInscription">
  Inscription
</button>
        <!-- Button trigger modal -->
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalConnexion">
  Connexion
</button>
        
      </div> <!-- End Introduction HP -->
      
      <div class="footer">
        <p>&copy; UPJV 2013</p>
      </div>

    </div> <!-- /container -->


<?php echo $modalCreerEtudiant; ?>

<?php echo $modalAdmin; ?> 

    
<?php echo $modalContact;?>

<?php echo $footerScripts; ?>    

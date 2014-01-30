<?php include('Functions.php');

	echo $header;?>
	
  <body id="emargements">
  
  <div class="container">
      
      <?php echo $adminHeader2;?>
      
      <?php echo $adminMenu;?>

      <div class="jumbotron0" style="padding: 10px 20px; margin-top: 5px;">
      
      	<p><button type="button" class="FR btn btn-primary btn-sm btn-success">Feuilles d'émargement excel</button></p>
      	
      	<h3>Prévisualisation des feuilles d'émargement</h3>
      	
      	<!-- Nav tabs -->
<ul class="nav nav-tabs" style="font-size: 16px;">
<li><a href="#home" data-toggle="tab">M1 2IBS</a></li>
<li><a href="#profile" data-toggle="tab">M1 ISRI</a></li>
<li><a href="#messages" data-toggle="tab">M1 MIAGE</a></li>
<li><a href="#settings" data-toggle="tab">M2 2IBS INFO</a></li>
<li><a href="#promo9" data-toggle="tab">M2 2IBS INSTRUM</a></li>
<li><a href="#promo4" data-toggle="tab">M2 ISRI</a></li>
<li><a href="#promo3" data-toggle="tab">M2 2COM</a></li>
<li><a href="#promo1" data-toggle="tab">M2 OSIE</a></li>
<li><a href="#promo2" data-toggle="tab">M2 SIS</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active" id="home">
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
          M1.03 - Gestion de production
                  </a>
      </h2>
    </div>
    <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">
      		
      		<?php echo $tableEtudiants ;?>

      </div>
    </div>
	  </div>
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          M1.19 - Bio statistiques
        </a>
      </h2>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      		<?php echo $tableEtudiants ;?>
      </div>
    </div>
  </div>
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          M1.20 - Conduite du changement
        </a>
      </h2>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      
      		<?php echo $tableEtudiants ;?>
      </div>
    </div>
  </div>

  </div>
  <div class="tab-pane" id="profile">...</div>
  <div class="tab-pane" id="messages">......</div>
  <div class="tab-pane" id="settings">..........</div>
</div>
      	      
      </div> <!-- End jumbotron Introduction HP -->
      <?php echo $footer; ?>
    </div> <!-- /container -->

<!-- Modals -->

<?php echo $footerScripts; ?>
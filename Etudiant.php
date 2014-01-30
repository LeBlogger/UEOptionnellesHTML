<?php include('Functions.php');

echo $header;?>  
  
  <body class="etudiant">
  
  <div class="container">
      
  		<?php echo $adminHeader1;?>
  		
      <div class="jumbotron">
      	<p>Bonjour Soufiane Lamchaouri.</p> <p>Cette application va vous permettre de choisir les UE Optionnelles pour la deuxième annèe du master MIAGE</p>
        
	<div class="panel-group" id="accordion">
	
		<!-- Accordion Tab 1 -->
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          Choix Semestre 1
        </a>
      </h2>
    </div>
    <div id="collapseOne" class="panel-collapse collapse.in in">
      <div class="panel-body">
      <form class="form-signin" role="form">
        <p>Selectionnez 2 UE optionnelles dans la liste ci-dessous.</p>
        <p>Vous avez jusqu'au 06/10/2013 réaliser ou modifier vos choix</p>
       
        
        
        <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
        <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Envoyer</button>
      </form>
      
		
        
      </div>
    </div>
  </div>  
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
          Choix Semestre 1 - Déjà fait
        </a>
      </h2>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
      <form class="form-signin" role="form">
        <p>Choix ouverts du 16/09/2013 au 06/10/2013</p>
        <p>Choix fait le 20/09/2013</p>
        
        <div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
        <div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox has-success">
		    <label>
		      <input type="checkbox" disabled checked> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox has-success">
		    <label>
		      <input type="checkbox" disabled checked> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox has-success">
		    <label>
		      <input type="checkbox" disabled checked> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <button data-toggle="modal" data-target="#myModalChoixUE" type="submit" class="btn btn-default">Modifier</button>
      </form>
      </div>
    </div>
  </div>
	  <!-- Accordion Tab 2 -->
	  <div class="panel panel-default">
    <div class="panel-heading">
      <h2 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
          Choix Semestre 2
        </a>
      </h2>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
      
      <form class="form-signin" role="form">
        <p>Les choix des UEs optionnelles ne sont pas encore ouverts pour le Deuxième semestre.</p>
        <p>Vous pouvez faire vos choix à partir du 20/09/2013.</p>
        
        <div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
        <div class="checkbox">
		    <label>
		      <input type="checkbox" disabled /> M2.36 - Outils pour la Business Intelligence
		    </label>
		</div>
		<div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		</div>
		<div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		</div>
		<div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		</div>
		<div class="checkbox">
		    <label>
		      <input type="checkbox" disabled> M2.36 - Outils pour la Business Intelligence
		    </label>
		</div>
      </form>
		
        
      </div>
	    </div>
	  </div>
	
	</div> <!-- End Accordion -->
        
      </div> <!-- End jumbotron Introduction HP -->
      
      <?php echo $footer; ?>

    </div> <!-- /container -->


<!-- Modal -->
<div class="modal fade" id="myModalChoixUE" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form class="form-signin" role="form">
        <p>Selectionnez 2 UE optionnelles dans la liste ci-dessous.</p>
        <p>Vous avez jusqu'au 06/10/2013 réaliser ou modifier vos choix</p>
       
        
        
        <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
        <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox has-success">
		    <label>
		      <input type="checkbox" checked> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox has-success">
		    <label>
		      <input type="checkbox" checked> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <div class="checkbox has-success">
		    <label>
		      <input type="checkbox" checked> M2.36 - Outils pour la Business Intelligence
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default">Envoyer</button>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<?php echo $footerScripts; ?>
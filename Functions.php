<?php 


$header = '<!DOCTYPE html>
			<html lang="fr">
  <head>
    <title>Inscriptions pédagogiques</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/styles.css?v=12220" rel="stylesheet">
  </head>';


$adminHeader1 = '<div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="#" data-toggle="modal" data-target="#myModalContact"><span class="glyphicon glyphicon-envelope"></span>  Contact</a></li>
          <li><a href="/"><span class="glyphicon glyphicon-off"></span>  Déconnexion (Soufiane)</a></li>
        </ul>
        <h3 class="text-muted">Inscriptions pédagogiques</h3>
      </div>';

$adminHeader2 = '<div class="header">
        <ul class="nav nav-pills pull-right">
        <li><a class="admin" href="/Admin.php"><span class="glyphicon glyphicon-cog"></span> Administration</a></li>
          <li><a href="/"><span class="glyphicon glyphicon-off"></span> Déconnexion (Soufiane)</a></li>
        </ul>
        <h3 class="text-muted">Inscriptions pédagogiques</h3>
      </div>';

$modalContact = '<!-- Modal -->
<div class="modal fade" id="myModalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <form class="form-signin" role="form">
      <h2 class="form-signin-heading">Nous contacter par email</h2>
      		<p>Vous avez des questions concernant les UE optionnelles ou l utilisation de l application web. contactez-nous.</p><p>

Les champs annotés de un astérisque * doivent être remplis.</p>
		  <div class="form-group">
		    <label>Nom / Prenom</label>
		    <input type="text" class="form-control" placeholder="Nom / Prénom">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse email">
		  </div>
		  <div class="form-group">
		  <label>Parcourt</label>
		  <select class="form-control">
  <option>MIAGE</option>
  <option>2IBS</option>
</select>
		  </div>
		  <div class="form-group">
		  <label>Message</label>
		  
		  <textarea class="form-control" rows="3"></textarea>
		  
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Recevoir une copie de message par email
		    </label>
		  </div>
		  <button type="submit" class="btn btn-default" >Envoyer</button>
		</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal --> ';



$footer = '<div class="footer">
        <p class="FL">&copy; UPJV 2013</p>
      </div>';
      
      
$adminMenu = ' <div class="">
      	<ul class="nav nav-tabs nav-justified">
			<li><a class="recapChoix" href="/recapChoix.php">Choix</a></li>
			<li><a class="emargements" href="/Emargements.php">Feuilles émargement</a></li>
			<li><a class="etudiants" href="/Etudiants.php">Etudiants</a></li>
			<li><a class="maquette" href="/Maquette.php">Maquette</a></li>
			<li><a class="ue" href="/UE.php">UEs</a></li>
			<li><a class="parcours" href="/Parcours.php">Années</a></li>
			<li><a class="specialites" href="/Specialites.php">Spécialités</a></li>
        </ul>
      </div>';
      
$tableEtudiants = '<table class="table table-condensed table-hover" style="background : #FFF; margin-top:15px;">
        <thead>
          <tr class="active">
            <th>Nom</th>
            <th>Prénom</th>
            <th>Promotion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Souf</td>
            <td>Lam</td>
            <td>MIAGE</td>
          </tr>
          <tr>
            <td>Souf</td>
            <td>Lam</td>
            <td>MIAGE</td>
          </tr>
          <tr>
            <td>Souf</td>
            <td>Lam</td>
            <td>MIAGE</td>
          </tr>
        </tbody>
      </table>';
      
$modalCreerEtudiant = '<!-- Modal -->
<div class="modal fade" id="myModalInscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <form class="form-signin" role="form">
      		<h2 class="form-signin-heading">Formulaire l inscription</h2>
      		<p>Veuillez vous inscrire et attendre l activation de votre compte pour pouvoir faire vos choix d options.</p><p>

Les champs annotés d une astérisque * doivent être remplis.</p>
		  <div class="form-group">
		    <label>Nom : </label>
		    <input type="text" class="form-control" placeholder="Nom">
		  </div>
		  <div class="form-group">
		    <label>Prénom : </label>
		    <input type="text" class="form-control" placeholder="Prénom">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse email : </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse email">
		  </div>
		  <div class="form-group">
		  <label>Choisir un parcours : </label>
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
		  
		  <div class="form-group">
		    <label>Identifiant : </label>
		    <input type="text" class="form-control" placeholder="Identifiant">
		  </div>
		  
		  <div class="form-group">
		    <label>Mot de passe : </label>
		    <input type="text" class="form-control" placeholder="Mot de passe">
		  </div>
		  
		  
		  <div class="form-group">
		    <label>Confirmer mot de passe : </label>
		    <input type="text" class="form-control" placeholder="Mot de passe">
		  </div>
		 
		  <button type="submit" class="btn btn-default" >Envoyer</button>
		</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';

$modalAjouterEtudiant = '<!-- Modal -->
<div class="modal fade" id="modalAjouterEtudiant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="form-signin-heading">Formulaire d ajout nouvel Etudiant</h2>
        </div>
        <div class="modal-body">
      <form class="form-signin" role="form">
      		<p>Vous allez ajouter un nouvel Etudiant à la base. Cet Etudiant recevera un email automatiquement avec son mot de passe et la confirmation que son compte a été activé.</p><p>

Les champs annotés d une astérisque * doivent être remplis.</p>
		  <div class="form-group">
		    <label>Nom : </label>
		    <input type="text" class="form-control" placeholder="Nom" >
		  </div>
		  <div class="form-group">
		    <label>Prénom : </label>
		    <input type="text" class="form-control" placeholder="Prénom">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse email : </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse email">
		  </div>
		  <div class="form-group">
		  <label>Choisir un parcours : </label>
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
		  
		  <div class="form-group">
		    <label>Identifiant : </label>
		    <input type="text" class="form-control" placeholder="Identifiant">
		  </div>
		  
		  <div class="form-group">
		  <label>Actif : </label>
<select class="form-control">
<option value="1">Oui</option>
<option value="2" selected>Non</option>
</select>
		  </div>
		 
		  <button type="submit" class="btn btn-success" >Valider</button>
		  <button type="cancel" class="btn btn-warning" >Annuler</button>
		  
		</form>
		</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';


$modalAdmin = '<!-- Modal -->
<div class="modal fade" id="myModalConnexion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <form class="smallModel form-signin">
        <h2 class="form-signin-heading">Connexion</h2>
        <input type="text" class="form-control" placeholder="Identifiant" required autofocus>
        <input type="Mot de passe" class="form-control" placeholder="Mot de passe" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Sauvegarder
        </label>
        <button class="btn btn-lg btn-primary btn-block" type="submit" onclick=window.location="/recapChoix.php">Se connecter</button>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';

$modalVoirEtudiant = '<!-- Modal -->
<div class="modal fade" id="modalVoirEtudiant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2>Fiche de l étudiant Souf Lam</h2>
        </div>
    	
        <div class="modal-body">
      <table class="table table-bordered table-hover">
        <tbody>
        <tr>
        	<th>Cle</th>
        	<td>214</td>
        </tr>
        <tr class="even">
        	<th>Nom</th>
        	<td>Souf</td>
        </tr>
        <tr class="odd">
        	<th>Prenom</th>
        	<td>Lam</td>
        </tr>
		<tr class="even">
			<th>Année</th>
			<td><span class="null">M2 MIAGE OSIE</span></td>
		</tr>
		<tr class="odd">
			<th>Login</th>
			<td>Soufiane</td>
		</tr>
		<tr class="even">
			<th>Email</th>
			<td>contact@soufiane.fr</td>
		</tr>
		<tr class="odd">
			<th>Actif</th>
			<td>Oui</td>
		</tr>
</tbody>
      </table>
      </div>
      <div class="modal-footer">
      <p><button class="btn btn-warning btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#modalModifierEtudiant">Modifier</button>
      <button class="btn btn-danger btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#modalSupprimerEtudiant">Supprimer</button>
      <button class="btn btn-success btn-sm" data-dismiss="modal" data-toggle="modal" data-target="#modalAjouterEtudiant">Ajouter Nouveau</button></p>

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';


$modalModifierEtudiant = '<!-- Modal -->
<div class="modal fade" id="modalModifierEtudiant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h2 class="form-signin-heading">Modification de l Etudiant Souf Lam</h2>
        </div>
        <div class="modal-body">
      <form class="form-signin" role="form">
      		
      		<p>Vous allez modifier les informations de l etudiant Souf Lam dans la base de l applciation.</p>
		  <div class="form-group">
		    <label>Nom : </label>
		    <input type="text" class="form-control" placeholder="Nom" value="Souf" >
		  </div>
		  <div class="form-group">
		    <label>Prénom : </label>
		    <input type="text" class="form-control" placeholder="Prénom" value="Lam">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse email : </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse email" value="contact@soufiane.fr">
		  </div>
		  <div class="form-group">
		  <label>Choisir un parcours : </label>
<select class="form-control" value="5">
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
		  
		  <div class="form-group">
		    <label>Identifiant : </label>
		    <input type="text" class="form-control" placeholder="Identifiant" value="LeBlogger">
		  </div>
		 
		 <div class="form-group">
		  <label>Actif : </label>
<select class="form-control">
<option value="1">Oui</option>
<option value="2" selected>Non</option>
</select>
		  </div>
		 
		  <button type="submit" class="btn btn-success" >Valider</button>
		  <button type="submit" class="btn btn-warning" >Annuler</button>
		</form>
		</div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';

$modalSupprimerEtudiant = '<!-- Modal -->
<div class="modal fade" id="modalSupprimerEtudiant" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2>Veillez confirmer la suppression de l etudiant Souf Lam de la base</h2>
      	<button type="submit" class="btn btn-danger" >Confirmer</button>
		  <button type="submit" class="btn btn-default" >Annuler</button>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';

$Pagination = '<div class="TAC"><ul class="pagination">
  <li class="disabled"><span>&laquo;</span></li>
  <li class="active"><span>1 <span class="sr-only">(current)</span></span></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul></div>';

$footerScripts = '<!-- jQuery (necessary for Bootstrap s JavaScript plugins) -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>';
<?php 


$header = '<!DOCTYPE html>
			<html lang="fr">
  <head>
    <title>Inscriptions pédagogiques</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/styles.css?v=12220" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap-3.0.3.min.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">

		<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-3.0.3.min.js"></script>
		<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
		
		<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.0-beta.1/css/jquery.dataTables.css">
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.0-beta.1/js/jquery.dataTables.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.css">
 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/plug-ins/505bef35b56/integration/bootstrap/3/dataTables.bootstrap.css"></script>

    
    </head>';


$adminHeader1 = '<div class="header">
<div class="btn pull-right">
<div class="btn-group">
  <button type="button" class="btn btn-default btn-sm">Soufiane</button>
  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#" data-toggle="modal" data-target="#modalProfil">Mon profil</a></li>
    <li class="divider"></li>
    <li><a href="/">Déconexion</a></li>
  </ul>
  </div>
</div>

<div class="btn pull-right">
  <a type="button" class="btn btn-default btn-sm" href="#" data-toggle="modal" data-target="#myModalContact"><span class="glyphicon glyphicon-envelope"></span> Contact</a>
</div>
        <h3 class="text-muted">Inscriptions pédagogiques</h3>
      </div>';

$adminHeader2 = '<div class="header">
        <!-- Split button -->
<div class="btn pull-right">
<div class="btn-group">
  <button type="button" class="btn btn-default btn-sm">Soufiane</button>
  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#" data-toggle="modal" data-target="#modalProfil">Mon profil</a></li>
    <li class="divider"></li>
    <li><a href="/">Déconexion</a></li>
  </ul>
  </div>
</div>

<div class="btn pull-right">
  <a type="button" class="btn btn-default btn-sm" href="/admin.php"> Demandes inscription <span class="label label-info">42</span> </a>
</div>
        <h3 class="text-muted">Inscriptions pédagogiques</h3>
      </div>';
$adminHeaderEnseignant = '<div class="header">
        <!-- Split button -->
<div class="btn pull-right">
<div class="btn-group">
  <button type="button" class="btn btn-default btn-sm">Enseignant</button>
  <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#" data-toggle="modal" data-target="#modalProfil">Mon profil</a></li>
    <li class="divider"></li>
    <li><a href="/">Déconexion</a></li>
  </ul>
  </div>
</div>
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
        <p class="FR"> Etudiants UPJV en MIAGE : Soufiane - Alphousseynou - Sara - Alicia - Abdelmouaine</p>
      </div>';
      
      
$adminMenu = ' <div class="">
      	<ul class="nav nav-tabs nav-justified">
			<li><a class="recapChoix" href="/recapChoix.php">Choix</a></li>
			<li><a class="emargements" href="/Emargements.php">Feuilles émargement</a></li>
			<li><a class="etudiants" href="/Etudiants.php">Etudiants</a></li>
			<li><a class="parcours" href="/Parcours.php">Parcours</a></li>
			<li><a class="maquette" href="/Maquette.php">Maquette</a></li>
			<li><a class="ue" href="/UE.php">UEs</a></li>
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
		    <input type="text" class="form-control" placeholder="Nom" required>
		  </div>
		  <div class="form-group">
		    <label>Prénom : </label>
		    <input type="text" class="form-control" placeholder="Prénom" required>
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
		    <label for="exampleInputEmail1">Adresse email : </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse email" required>
		  </div>
		  
		  
		  <div class="form-group">
		    <label>Identifiant : </label>
		    <input type="text" class="form-control" placeholder="Identifiant" required>
		  </div>
		  
		  <div class="form-group">
		    <label>Mot de passe : </label>
		    <input type="text" class="form-control" placeholder="Mot de passe" required>
		  </div>
		  
		  
		  <div class="form-group">
		    <label>Confirmer mot de passe : </label>
		    <input type="text" class="form-control" placeholder="Mot de passe" required>
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
		    <input type="text" class="form-control" placeholder="Nom" required >
		  </div>
		  <div class="form-group">
		    <label>Prénom : </label>
		    <input type="text" class="form-control" placeholder="Prénom" required>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Adresse email : </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Entrer votre adresse email" required>
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
        <p><input type="text" class="form-control" placeholder="Identifiant" required autofocus></p>
        <p><input type="Mot de passe" class="form-control" placeholder="Mot de passe" required></p>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Sauvegarder
        </label>
        <p><button class="btn btn-lg btn-primary btn-block" type="submit" onclick=window.location="/recapChoix.php">Se connecter</button>
        <a href="#">Mot de passe oublié</a>
        </p>
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
      
      <table class="table table-bordered table-hover">
        <tbody>
        <tr>
        	<th>UE Optionnelle 1 </th>
        	<td>Anglais 1</td>
        </tr>
        <tr class="even">
        	<th>UE Optionnelle 2</th>
        	<td>Web</td>
        </tr>
        <tr class="odd">
        	<th>UE Optionnelle 3</th>
        	<td>Droit</td>
        </tr>
        <tr>
        	<th>UE Obligatoire 1 </th>
        	<td>Anglais 1</td>
        </tr>
        <tr class="even">
        	<th>UE Obligatoire 2</th>
        	<td>Web</td>
        </tr>
        <tr class="odd">
        	<th>UE Obligatoire 3</th>
        	<td>Droit</td>
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
		  
		  <div class="form-group">
		  <label>UE Optionnelle 1 : </label>
<select class="form-control">
<option value="1">Anglais</option>
<option value="2" selected>Web</option>
</select>
		  </div>
		  
		  <div class="form-group">
		  <label>UE Optionnelle 2 : </label>
<select class="form-control">
<option value="1">Anglais</option>
<option value="2" selected>Web</option>
</select>
		  </div>
		  
		  <div class="form-group">
		  <label>UE Optionnelle 3 : </label>
<select class="form-control">
<option value="1">Anglais</option>
<option value="2" selected>Web</option>
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

$modalProfil = '<!-- Modal -->
<div class="modal fade" id="modalProfil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2>Veillez confirmer la suppression de l etudiant Souf Lam de la base</h2>
      	<button type="submit" class="btn btn-danger" >Confirmer</button>
		  <button type="submit" class="btn btn-default" >Annuler</button>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';

$modalEmail = '<!-- Modal -->
<div class="modal fade" id="modalEmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <form class="form-horizontal" role="form">
      <h2 class="form-signin-heading">Envoyer un email aux étudiants suivant UE Anglais</h2>
      		<p>Veuillez compléter le formulaire suivant pour envoyer un email groupé à tous les étudiants de UE Anglais.</p><p>Vous pouvez envoyer ce message à des adresses email personnalisées</p>

		  <div class="form-group">
		    <label class="col-sm-4 control-label">Email additionnels</label>
		    <div class="col-sm-8">
			    <input type="text" class="form-control" placeholder="Entrer des emails séparés par des virgules">
		    </div>
		  </div>
		  
		  <div class="form-group">
		    <label class="col-sm-4 control-label">Objet :</label>
		    <div class="col-sm-8">
		    	<input type="text" class="form-control" placeholder="Sujet de votre email">
		    </div>
		  </div>
		  
		  <div class="form-group">
		  
		  <label class="col-sm-4 control-label">Message</label>
		  <div class="col-sm-8">
		  <textarea class="form-control" rows="3"></textarea>
		  </div>
		  </div>
		  <button type="submit" class="btn btn-default" >Envoyer</button>
		</form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->';

$modalEmailListe = '<!-- Modal -->
<div class="modal fade" id="modalEmailListe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <form class="form-horizontal" role="form">
      <h2 class="form-signin-heading">Liste des emails des étudiants qui suivent l UE Anglais</h2>
		  
		  <div class="form-group">
		  
		  <div class="col-sm-12">
		  <textarea class="form-control" rows="10">alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com>alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com>, alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com>, alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com>, alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com>, alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com>, alicia mpassi <alicia.mpassi@gmail.com>, Sara Mchichou <mchichou.sara@gmail.com></textarea>
		  </div>
		  </div>
		</form>
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

$footerScripts = '
  </body>
</html>';
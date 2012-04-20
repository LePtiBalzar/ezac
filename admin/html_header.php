<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr" dir="ltr">
	<head>
		<title>Application H�bergement Campanule : Administration de l'�v�nement <?php echo $tab_evenement['nom']; ?></title>
		<link href="../config/style.css" rel="stylesheet" type="text/css" />
		<link href="admin.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="../js/propositions.js"></script>
		<script type="text/javascript" src="../js/proposer.js"></script>
		<script type="text/javascript" src="admin.js"></script>
		<style type="text/css">

.element_menu.selectionne, .proposition, #zone_formulaire_proposition{
	border-color: #<?php echo $tab_evenement['code_couleur'];?>;
}

#separateur_zones, .proposition .adresse, .bouton_afficher_form_demande{
	background-color: #<?php echo $tab_evenement['code_couleur'];?>;
}

.proposition h3 .nom_hote, h2, .element_menu.selectionne, .proposition .telephone, .proposition .email{
	color: #<?php echo $tab_evenement['code_couleur'];?>;
}

.bouton_valider_form_demande:hover, .bouton_valider_form_proposition:hover{
	border: 1px solid #<?php echo $tab_evenement['code_couleur'];?>;
	box-shadow: 0px 0px 2px #<?php echo $tab_evenement['code_couleur'];?>;
}

#zone_banniere{
	border: 1px solid #<?php echo $tab_evenement['code_couleur'];?>;
	box-shadow: 0px 0px 4px #<?php echo $tab_evenement['code_couleur'];?>;
}
		</style>
	</head>
	
	<body>
		<div id="entete">
			<a href="http://lacampanule.free.fr/">
				<img id="logo_campanule" alt="La Campanule" src="../img/logo_campanule.png" />
			</a>
			<p id="texte_entete">
				Application H�bergement Campanule : Administration de l'�v�nement <?php echo $tab_evenement['nom']; ?>
			</p>
		</div>

		<div id="entete_evenement">
			<p id="texte_entete_evenement">
				Administration de l'�v�nement
			</p>
			<div id="zone_banniere">
				<a href="http://<?php echo $tab_evenement['site_officiel']; ?>">
					<img src="../img/bannieres/<?php echo $tab_evenement['banniere']; ?>" alt="<?php echo $tab_evenement['nom']; ?>" />
				</a>
			</div>
		</div>

		<div id="corps">
			<div id="menu">
				<a class="element_menu<?php if($element_menu_selectionne == 1){echo ' selectionne';} ?>" href="liste_evenements.php">Autres �v�nements</a>
				<a class="element_menu<?php if($element_menu_selectionne == 2){echo ' selectionne';} ?>" href="reservation.php">Liste des h�bergements</a>
				<a class="element_menu" href="logout.php">D�connexion</a>
			</div>
			
			<div id="zone_contenu">
				<div id="separateur_zones">
				</div>
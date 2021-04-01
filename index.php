<!DOCTYPE html> 
<html>  
  <head>
  <link rel="stylesheet" type="text/css" href="cv.css.css">
  
   <meta charset="utf-8" /> 
   
  </head>
  <?php 
        if(isset($_GET['drone'])){
            session_start();
            $nbdrone = $_SESSION["nbdrone"];
            $nbvol = $_SESSION["nbvol"];
			$nbutilisateur = $_SESSION["nbutilisateur"];
        }
	?>		
  <body> 
	<header id= "titre_header">mes dev! Web en SNIR</header>
	<aside id="aside"><a>https://www.w3schools.com/</a></aside>
	<nav id="nav"> <ul class="navigation"><li id="nav_mon_cv">
	<a href="index.php" classe="violet"> Mon CV </a></li>
		<li id="nav_mon_site" >Mon site</li>
		<?php if(isset($_COOKIE["pseudo"])){ ?>
						<a href="login.php?profil"> Profil </a>
						<a href="login.php?deconnexion"> Se deconnecter </a>
						<a href="login.php?drone">Drone</a>
					<?php } else{ ?>
						<li id="nav_inscription">Inscription</li>
						<li id="nav_connexion">Connexion</li>
					<?php } ?>
					
		</ul>
		 </nav>
	<section id="section" >
	<?php
            if(isset($_GET['profil'])){
                echo'
                <form action="login.php" method="POST">
                    <label for="nom">Nom :</label>
                    <input type="text" id="nom" name="nom_utilisateur" value="'.$_COOKIE["nom"] . '"required/>
                    <br/>
                    <label for="prenom">Prénom :</label>
                    <input type="text" id="prenom" name="prenom_utilisateur" value="'.$_COOKIE["prenom"] . '" required/>
                    <br/>
                    <label for="mail">Addresse mail :</label>
                    <input type="email" id="mail" name="mail_utilisateur" value="'.$_COOKIE["email"] . '" required/>
					<br/>
                    <label for="pseudo">Pseudo :</label>
                    <input type="text" id="pseudo" name="pseudo_utilisateur" value="' . $_COOKIE["pseudo"] . '" required/>
                    <br/><br/>
                    <input type="submit" value="Mettre à jour" name="miseajour"/>
                </form>';
            }
			if(isset($_GET['drone'])){
                if(isset($_GET['nbdrone'])){
                    $table = '<table style="width: none;">';
                    for($tour = 0; $tour <= count($_SESSION["nbdrone"]) - 1; $tour++){
                        $donneesDrone = $_SESSION["nbdrone"][$tour];
                        foreach($donneesDrone as $nom => $contenu){
                            $$nom = $contenu;
                        }
                        $table .= '<tr><td><input type="number" name="iddrone" value="' . $iddrone . '" readonly disabled style="width: unset;"/></td>';
                        $table .= '<td><input type="text" name="marque" value="' . $marque . '" style="width: unset;"/></td>';
                        $table .= '<td><input type="text" name="marque" value="' . $modele . '" style="width: unset;"/></td>';
                        $table .= '<td><input type="text" name="marque" value="' . $refDrone . '" style="width: unset;"/></td>';
                        $table .= '<td><input type="date" name="marque" value="' . $dateAchat . '" style="width: unset;"/></td>';
                        $table .= '<td><input type="submit" value="Mettre à jour" name="miseajour" style="width: unset;"/></td></tr>';  
                    }
                    echo $table . "</table>";
                }
                else{
                    echo '
                        <div class="statistique"><a href="rest.php?drone&nbdrone">
                        <p class="statistique_icone"><img src="./icones/drone.svg"></p>
                        <p class="statistique_valeur">' . $nbdrone . '</p></a></div>
                        <div class="statistique"><a href="rest.php?drone&nbvol">
                        <p class="statistique_icone"><img src="./icones/fly.svg"></p>
                        <p class="statistique_valeur">' . $nbvol . '</p></a></div>
                        <div class="statistique"><a href="rest.php?drone&nbutilisateur">
                        <p class="statistique_icone"><img src="./icones/man.svg"></p>
                        <p class="statistique_valeur">' . $nbutilisateur . '</p></a></div>
                    ';
                }
            }
			else{
        		?>
		<div id="mon_cv">
			<div id="dessous"><video id="video" width="100%" src="fight.mp4" type="video/mp4"></video>
				<img id=boutonplay src="play.png"/>
				<img id=boutonstop src="stop.png" alt="Stop"/>
				<img class="input_control" id="fr" src="fr.jpg" alt="Drapeau francais">
  				<img class="input_control" id="en" src="en.jpg" alt="Drapeau américain">
			</div>
			MATHIS Lucas <br/>
			6 avenue des résédas Pontault-Combault 77340 </br>
			07 81 74 41 98 </br> 
			lucas.mathis.pro@gmail.com</br> 
			date de naissance:15/06/2000</br>
			<br><br><br><br><br><br>
		
	<table>
		<thead>
			<tr>
				<th class="th" colspan="3"><center><h4><u><b>Mes Compétences</b></u></h4></center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="gris">
				<td>Developpement Web</td>
				<td><ul><li>HTML 5</li>
						<li>CSS 3</li>
						<li>PHP et base de données</li>
						<li>Installation complète d'un serveur web sur un os linux</li></ul></td>
				<td><center><b><u>3 mois</u></b></center></td>
			</tr>
			<tr>
				<td>Developpement d'application en C/C++</td>
				<td><ul><li>Les types de données et leurs fonctions</li>
						<li>les classes et les objets</li>
						<li>Communication réseau</li>
						=>Journal lumineux/Spot DMX/Caméra IP/Vehicule(bus CAN)/Jeu d'échec</ul></td>
				<td><center><b><u>3 mois</u></b></center></td>
			</tr>
			<tr class="gris">
				<td>Installation d'application et de réseau</td>
				<td><ul><li>Configuration IP d'un réseau</li>
						<li>parametrage switch et routeur cisco</li>
						<li>Création de VLAN</li>
						<li>Téléphonie IP</li>
						<li>Installation de serveur Web</li>
						<li>Gestion de parking</li></ul></td>
					<td><center><b><u>3 semaines</u></b></center></td>
			</tr>
		</tbody>
	</table><br><br>
			<table>
				<thead>
					<tr>
						<th class="th" colspan="3"><center><h4><u><b>Mes Formation</b></u> </h4></center></th>
					</tr>
				</thead>
			<tbody>
				<tr class="gris">
					<td>2020/2021</td>
					<td>BTS SN Informatique et Réseaux Lycée Louis ARMAND, Nogent-sur-Marne</td>
				
				</tr>
				<tr>
					<td>2017/2019</td>
					<td>Baccalauréat STI2D Système d'Information et Numérique Lycée René Cassin, Noisiel</td>
				</tr>
					<tr class="gris">
						<td>2018/2019</td>
						<td>Obtention du Baccalauréat STI2D option SIN</td>
					</tr>
				</tbody>
			</table><br><br>
			<table>
		<thead>
			<tr>
				<th class="th" colspan="3"><center><h4><u><b>Mes diplômes</b></u></h4></center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="gris">
				<td>2018/2019</td>
				<td>Obtention Baccalauréat STI2D option SIN Lycée René Cassin, Noisiel</td>
				
			</tr>
			<tr>
				<td>2018</td>
				<td>Obtention du PSC1 </td>
			</tr>
			
		</tbody>
	</table><br><br>
	<table>
		<thead>
			<tr>
				<th colspan="3"><center><h4><u><b>Mes Expérience Professionnel</b></u></h4></center></center></th>
			</tr>
		</thead>
		<tbody>
			<tr class="gris">
				<td>Depuis Oct. 2018 (l’été et vacances scolaires) </td>
				<td><ul><li>Animateur en centre de vacances RATP (Royan, Evian et en Corrèze)</li>
				<li>Gestion d’un groupe de 25 enfants de 6 à 10 ans</li>
				<li>Organisation des activités</li>
				<li>Participation aux réunions avec les parents</li></ul> </td>
				
			</tr>
			<tr>
				<td>Eté 2018</td>
				<td>	<ul><li>Employé polyvalent de collectivité – RATP</li>
							<li>Nettoyage des locaux</li></ul></td>
			</tr>
			<tr class="gris">
				<td>Printemps 2020 </td>
						<td><ul><li>Personnel de surveillance et d’accompagnement éducatif – Mairie de Pontault-Combault</li>
								<li>Surveillance du temps de midi</li></ul> </td>
			</tr>
		</tbody>
	</table>

		<h3><u><b>Langue</b></u></h3>
		<ol><li>Anglais :<label for="file"></label>
			<progress  max="100" value="75"> </progress></li>
			<li>Espagnol :<label for="file"></label>
				<progress  max="100" value="60"> </progress></li>
			<li>Français :<label for="file"></label>
				<progress  max="100" value="85"> </progress></li></ol>
		<h3><u><b>Mes loisirs</b></u></h3>
		<ul class="loisirs"><li>Informatique et nouvelle technologie</li>
			<li>Tennis de table(compétion au niveau départementale),snowboard</li>
			<li>Lecture(mythologie,manga)</li></ul>
		</div>
		<?php	}	?>																			
		
		<div id="Inscription">
			<h1>Inscrivez-vous !</h1>
			<form id="form_inscription" action="login.php" method="post">
				<label for="nom">Nom : </label>
				<input type="text" id="nom" name="nom_utilisateur">
				<label for="prenom">Prénom : </label>
				<input type="text" id="prenom" name="prenom_utilisateur">
				<label for="adresse_mail">Adresse mail : </label>
				<input type="email" id="adresse_mail" name="adresse_mail_utilisateur">
				<label for="naissance">Date de naissance : </label>
				<input type="date" id="naissance" name="naissance_utilisateur">
				<label for="pseudo">Pseudo : </label>
				<input type="text" id="pseudo" name="pseudo_utilisateur">
				<label for="mdp1">Mot de passe : </label>
				<input type="password" id="mdp1" name="mdp1_utilisateur" required>
				<p> <span id="mdp_longueur" class="rouge">8 caractères</span> avec au moins : <span id="mdp_majuscule" class="rouge">1 majuscule</span>, <span id="mdp_minuscule" class="rouge">1 minuscule</span>, <span id="mdp_chiffre" class="rouge">1 Chiffre</span>, <span id="mdp_speciaux" class="rouge">1 Caractère spécial</span>.</p>
				<label for="mdp2">Ressaisir le mot de passe : </label>
				<input type="password" id="mdp2" name="mdp2_utilisateur" required>
				<input type="submit" id="bouton_inscription" class="bleu" value="M'inscrire" name="inscription">
			</form>
		 
		</div>

		<div id= "Connexion">
			<h1>Formulaire de Connexion</h1>
				
				<h2>identifiez-vous!</h2>
				<form action="login.php" method="POST">	
					<label for="pseudo"> pseudo:</label>
					<input type="text" id="pseudo" name="pseudo">

					<label for="mot_de_passe"> mot de passe:</label>
					<input type="password" id="mot_de_passe" name="mdp">

					<input type="submit" name="connexion" value="valider">

				</form>
		</div>
</section>
 <footer id="p_footer">
	<div class="themecouleur" id="theme_bleu"></div>
	<div class="themecouleur" id="theme_orange"></div>
	<div class="themecouleur" id="theme_gris"></div>
	  Lucas MATHIS-Septembre
	</footer>

 <script src="mesFonctions.js"></script>
 <script> 
/*visiteur()
</script>



</body>
</html> 
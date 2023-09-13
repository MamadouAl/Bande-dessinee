<?php


include 'albums_auteur.php' ;


$pageHTML = '<html>
<head>
	<title> Suppression d\'auteur </title>
	<link rel="stylesheet" type="text/css" href="struct2.css" />
	<link rel="shortcut icon" href="images/spirou_fond.ico" />
<meta http-equiv="Content-Type" content="text/html charset=utf-8"/>
</head>
<body>

<div id="fond_titre">
		<div id="titre_principal">
				<h1>Spirou et Fantasio </h1>
		</div>
	</div>

<div id="body">
			<div id="liens">
					<p>
						<a  href="index.php"> Accueil </a>  &ensp;
						<a href="albums.php"> Albums </a>  &ensp;
						<a href="auteurs.php"> Auteurs </a>&ensp;
						<a href="insert_album.php"> Nouvel album</a>&ensp;
						<a href="insert_auteur.php"> Nouvel auteur</a>
					</p>
			</div>

					<div id="modification">
							<table border ="0" align="center">' ;
									$supprimer = getAuteurById($_GET['id']) ;
									$pageHTML .= '<tr> <th>Identifiant</th><th>Nom de l\'auteur</th><th>Prénom de l\'auteur</th></tr>';

									$pageHTML .= '<tr>' ;
									foreach ($supprimer as $ligne) {
										$pageHTML  .= '<td>'.$ligne.'</td>' ;
									}

									$pageHTML .= '</tr>
							</table>';

							$pageHTML .= '
							<form action ="sup_auteur2.php" method="get" >
										<p><input type="hidden" name="aut_id" size ="10" value ="'.$supprimer['aut_id'].'"/></p>
										  <p>Voulez-vous vraiment supprimer cet auteur ? <br/>
										  <input type="radio" name="choix_sup" value ="Oui" required /> Oui <br/>
										  <input type="radio" name="choix_sup" value ="Non" required /> Non
										  </p>' ;

							$pageHTML .=' <p><input type="submit" name="enregistrement" value ="Envoyer"/>
										<input type="reset" name="enregistrement" value ="Annuler"/> </p>
								</form>';
$pageHTML .='
			</div>
			</div>
			<div id="auteurs">
			      <table border="0" align="center">
			        <tr><td style ="background-color: #272727;" ><div id="auteurs2">
			            <p> Auteurs du site :
			            <ul>
			                <li>DIALLO Mamadou Aliou</li> </br>
			                <li>FAGBEHOURO Ronald </li></br>
			                <li>HASSANE Idriss</li>

			            </ul>
			            </p>
			            </div></td>

			            <td style ="background-color: #272727;" > <div id="basPage"> <img src="images/spip.jpg" alt = "fantasiouuu" title ="spip" />
			            </div></td></tr>
			      </table>
			</div>
</body>
</html>' ;


echo $pageHTML ;


 ?>

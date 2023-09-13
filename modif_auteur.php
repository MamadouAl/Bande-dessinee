<?php


include 'albums_auteur.php' ;


$pageHTML = '<html>
<head>
	<title> Mise à jour d\'auteur </title>
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


		<div id="modification">' ;

		$modifier = getAuteurById($_GET['id']) ;

		$pageHTML .= '
				<form action ="modif_auteur2.php" method="get" >
							<table border="0" align="center">
									<p><input type="hidden" name="aut_id" size ="10" value ="'.$modifier['aut_id'].'"/>
									</p>

						      <tr><td>
									<p>Nom de l\'auteur : </td>
						      <td><input type="text" name= "aut_nom" size ="30" value ="'.$modifier['aut_nom'].'"/> <br/>
						      </p></td> </tr>

						      <tr><td>
						      <p>Prénom de l\'auteur :</td>
						      <td><input type="text" name= "aut_prenom" size ="30" value ="'.$modifier['aut_prenom'].'"/> <br/>
						      </p> </td> </tr>
				      </table>

				  <p><input type="submit" name="enregistrement" value ="Envoyer"/>
				  <input type="reset" name="enregistrement" value ="Annuler"/> </p>
				</form>
		</div>';

$pageHTML .='
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
</body></html>' ;

echo $pageHTML ;













?>

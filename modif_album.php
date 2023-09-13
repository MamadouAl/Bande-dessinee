<?php


include 'albums_auteur.php' ;


$pageHTML = '<html>
<head>
	<title> Mise à jour d\'un album </title>
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


	<div id="modification">';

			$modifier = getAlbumById($_GET['id']) ;

			$pageHTML .= '<form action ="modif_album2.php" method="get" >
						<table border="0" align ="center">

										<p><input type="hidden" name="bd_num" size ="10" value ="'.$modifier['bd_num'].'"/> </p>

								<tr><td>	<p>Titre :
											</td><td><input type="text" name= "bd_titre" size ="30" value ="'.$modifier['bd_titre'].'"/> <br/></p></td></tr>

								<tr><td>	<p>Annee : </td>
											<td><input type="number" name= "bd_annee" size ="10" value ="'.$modifier['bd_annee'].'"/> <br/></p></td></tr>

								<tr><td>	<p>Pages : </td>
											<td><input type="number" name= "bd_nbpages" size ="10" value ="'.$modifier['bd_nbpages'].'"/> <br/></p></td></tr>

									<tr><td><p>Prix : </td>
												<td><input type="number" name= "bd_prix" step="0.1" size ="10" value ="'.$modifier['bd_prix'].'"/> <br/></p></td></tr>
							</table>


					<p><input type="submit" name="enregistrement" value ="Envoyer"/>
					<input type="reset" name="enregistrement" value ="Annuler"/> </p></form>
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

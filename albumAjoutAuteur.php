<?php


include 'albums_auteur.php' ;


$pageHTML = '<html>
<head>
	<title> Insertion d\'auteur</title>
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
						<a  href="auteurs.php"> Auteurs </a>&ensp;
						<a href="insert_album.php"> Nouvel album</a>&ensp;
						<a href="insert_auteur.php"> Nouvel auteur</a>
					</p>
			</div>

		<div id="modification">';

		$pageHTML .= '
				<form action ="albumAjoutAuteur2.php" method="get" >
					<table border ="0" align="center">
				    	<input type="hidden" name= "bd_num" size ="30" value ="'.$_GET['id'].'"/>

							<tr><td>Sélectionnez l\'auteur :</td>
							<td>
							<select size="1" name="aut_id">';

							foreach (getAllAuteur() as $auteur) {
								$pageHTML .= '<option value="'.$auteur['aut_id'].'" >'.$auteur['aut_nom'].' '.$auteur['aut_prenom'].'</option>';
							}

						$pageHTML .='</select></td></tr>
						<tr><td>R&ocirc;le de l\'auteur :</td>
						<td>
				        <select size="1" name="aut_role">
				            <option value="scénariste" > Scénariste </option>
				            <option value="dessinateur" > Dessinateur </option>
				            <option value="coloriste" > Coloriste </option>
				      </select> </td></tr>
      	</table>
				 		<p><input type="submit" name="enregistrement" value ="Envoyer"/>
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
</body></html>' ;

echo $pageHTML ;

?>

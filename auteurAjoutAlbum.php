<?php


include 'albums_auteur.php' ;


$pageHTML = '<html>
<head>
	<title>Insertion d\'album</title>
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


$pageHTML .= '<form action ="auteurAjoutAlbum2.php" method="get" >

    <input type="hidden" name= "aut_id" size ="30" value ="'.$_GET['id'].'"/>

		<tr><td>Titre de l\'album :</td>
		<td>
		<select size="1" name="bd_num">';

		foreach (getAllAlbum() as $album) {
			$pageHTML .= '<option value="'.$album['bd_num'].'" >'.$album['bd_titre'].'</option>';
		}

	$pageHTML .='</select></td></tr>


	<input type="hidden" name= "aut_id" size ="30" value ="'.$_GET['id'].'"/>

	<tr><td>R&ocirc;le de l\'auteur :</td>
	<td>
		<select size="1" name="aut_role">
				<option value="scénariste" > Scénariste </option>
				<option value="dessinateur" > Dessinateur </option>
				<option value="coloriste" > Coloriste </option>
	</select>
	 </td></tr>
	</table>';

      $pageHTML .=' <p><input type="submit" name="enregistrement" value ="Envoyer"/>
			  <input type="reset" name="enregistrement" value ="Annuler"/> </p></form>';


$pageHTML .='</div>
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

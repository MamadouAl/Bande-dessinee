<?php
include 'albums_auteur.php' ;
$pageHTML = '<html>
<head>
	<title>Informations sur l\'album </title>
	<link rel="stylesheet" type="text/css" href="struct2.css" />
	<link rel="shortcut icon" href="images/spirou_fond.ico" />
<meta http-equiv="Content-Type" content="text/html charset=utf-8"/>
</head>
<body>  <div id="fond_titre">
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

						<div id="detail">
						<table border="0" align ="center">
						<tr><td>
								<div id="liste">' ;
										$pageHTML .='<h3> Les auteurs de '.getAlbumById($_GET['id'])['bd_titre'].'</h3>

										<ul>';

											if(!empty(getAuteurs_albumById($_GET['id']))){

												foreach (getAuteurs_albumById($_GET['id']) as $detail) {

													$auteur=getAuteurById($detail['aut_id']);

													$pageHTML .= '<li> <a href="albumsSupAuteur.php?id[]='.$detail['aut_id'].'&id[]='.$_GET['id'].'&id[]='.$detail['aut_role'].'">
													'.$auteur['aut_nom']." ".$auteur['aut_prenom'].", ".$detail['aut_role']." </a></li> " ;

											}
										}else {
												$pageHTML .= '<p> Aucun auteur trouvé !!!</p>';
											}


										$pageHTML .='</ul>
														<p> Pour supprimer une ligne, cliquez sur celle-ci !</p>';

										$pageHTML .='<p> <a href="albumAjoutAuteur.php?id='.$_GET['id'].'"> Ajouter un nouvel auteur à cet album </a></p> ';
										$pageHTML .='
								</div></td><td>
										<div id="detail_image">';
										if($_GET['id'] <= 70){
											$pageHTML .= '<img src="ImagesAlbums/image'.$_GET['id'].'.jpg" alt = "image_album" title ="'.getAlbumById($_GET['id'])['bd_titre'].'"/>';
										} else {
											$pageHTML .= '<img src="ImagesAlbums/image.jpg" alt = "image_album" title ="'.getAlbumById($_GET['id'])['bd_titre'].'"/>';
										}

				$pageHTML.='</div></td></tr>
			</table>
</div>';



$pageHTML .= '</div>

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

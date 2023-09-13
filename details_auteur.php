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
			<table border="0" align ="center"><tr><td>
					<div id="liste">' ;
							$pageHTML .='<h3> Les albums de '.getAuteurById($_GET['id'])['aut_nom'].' :</h3>

							<ul>';
								if(!empty(getAlbums_auteurById($_GET['id']))){

										foreach (getAlbums_auteurById($_GET['id']) as $detail) {
										  // code...
										//  print_r(getAuteurById($detail['aut_id']));
										$albums=getAlbumById($detail['bd_num']);
										//echo $auteur['aut_nom'];
										$pageHTML .= '<li><a href="auteursSupAlbum.php?id[]='.$detail['bd_num'].'&id[]='.$_GET['id'].'&id[]='.$detail['aut_role'].'">

										'.$albums['bd_titre']." ".$albums['bd_annee']. ", <i>".$detail['aut_role']."</i> </a> </li> " ;
										// print_r($detail['aut_role']);
										}
								}else {
									$pageHTML .= '<p> Aucun album trouvé !!!</p>';
								}
							$pageHTML .='</ul> <p> Pour supprimer une ligne, cliquez sur celle-ci !</p>';

							$pageHTML .='<p> <a href="auteurAjoutAlbum.php?id='.$_GET['id'].'"> Ajouter un nouvel album dans la bibliographie de l\'auteur </a></p> ';


							$pageHTML .='
					</div></td><td>
			<div id="detail_image">';
						if($_GET['id'] <= 34){
							$pageHTML .= '<img src="ImagesAuteurs/image'.$_GET['id'].'.jpg" alt = "image_auteur" title ="'.getAuteurById($_GET['id'])['aut_nom'].'"/>';
						} else {
							$pageHTML .= '<img src="ImagesAuteurs/image.jpg" alt = "image_auteur" title ="'.getAuteurById($_GET['id'])['aut_nom'].'"/>';
						}

			$pageHTML.='
			</div> </td></tr>
			</table>
	</div>';


$pageHTML .= '
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

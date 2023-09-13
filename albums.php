<?php

include 'albums_auteur.php';

$album = getAllAlbum() ;

$pageHTML = '<html>
<head>
	<title> Les albums </title>
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
              <a style=" border-bottom: solid;" href="albums.php"> Albums </a>  &ensp;
              <a href="auteurs.php"> Auteurs </a>&ensp;
              <a href="insert_album.php"> Nouvel album</a>&ensp;
              <a href="insert_auteur.php"> Nouvel auteur</a>
            </p>
        </div>

		<div id="tableau">
				<table border="1" align="center">
				<h3> LISTE DES ALBUMS SPIROU & FANTASIO </h3>
				' ;

				$pageHTML .= '<tr> <th>Numero</th>
											<th>Titre</th>
											<th>Année</th>
											<th>Page</th>
											<th>Prix</th>
											</tr>';


				foreach ($album as $ligne) {

					$pageHTML .="<tr>";
					foreach ($ligne as $col) {
						$pageHTML .= " <td>".$col."</td> ";

					}
					$pageHTML .= '<td class="edition"><a href="modif_album.php?id='.$ligne['bd_num'].'" >Modifier </a>';

					$pageHTML .= '</td><td class="edition"><a href="sup_album.php?id='.$ligne['bd_num'].'" >Supprimer </a> </td>' ;
					$pageHTML .= '</td><td class="edition"><a href="details_album.php?id='.$ligne['bd_num'].'" >Details...</a> </td>' ;

					$pageHTML .= '</tr>';

				}


				$pageHTML .= '	</table>
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

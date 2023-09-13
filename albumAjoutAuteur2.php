<?php
include 'albums_auteur.php' ;

$pageHTML = '<html>
<head>
	<title>Insertion d\'auteur d\'un album </title>
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

			<div id="tableau">';

					insertProduire(array($_GET['aut_id'], $_GET['bd_num'], $_GET['aut_role']));

					$pageHTML .= '<p>Insertion effectuée avec succès !</p>

					<p> <img src="images/validation.jpg" alt = "validation" title ="valider" />' ;

					$pageHTML .='<p> <a href="details_album.php?id='.$_GET['bd_num'].'"> Revenir à l\'album </a></p> ';

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

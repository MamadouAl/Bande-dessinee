<?php
$pageHTML ='<html>
<head>
<title>Les BD</title>
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
              <a style=" border-bottom: solid;" href="index.php"> Accueil </a>  &ensp;
              <a href="albums.php"> Albums </a>  &ensp;
              <a href="auteurs.php"> Auteurs </a>&ensp;
              <a href="insert_album.php"> Nouvel album</a>&ensp;
              <a href="insert_auteur.php"> Nouvel auteur</a>
            </p>
        </div>

        <div id="histoire">
        <table border="0">

            <tr><td style ="background-color: white;">
              <div id="image1">
                  <img src="images/spirou4.jpg" alt = "fantasiouuu" title ="Spirou"/>
              </div></td> <td style ="background-color: white;">

              <div id="histoires">
                  <h2> Un peu d\'histoire.. </h2>
                  <p>
                    Spirou et Fantasio sont deux personnages de bande dessinée
                    créés par le dessinateur belge Rob-Vel en 1938. Ils sont les
                    héros d\'une série d\'aventures publiées dans le magazine Spirou.</br>
                    L\'histoire commence avec Spirou, un groom du Moustic Hôtel à
                    Bruxelles, qui devient un aventurier après avoir rencontré
                    Fantasio, un reporter intrépide. Ensemble, ils voyagent
                    à travers le monde et affrontent des ennemis redoutables tels
                    que le comte de Champignac, Zorglub et le Marsupilami.</br>Au fil des
                    années, Spirou et Fantasio sont devenus des personnages très
                    populaires de la bande dessinée franco-belge.</br> La série a été
                    reprise par plusieurs auteurs, dont Franquin, qui est considéré
                    comme l\'un des plus grands dessinateurs de Spirou et Fantasio.
                    Franquin a introduit de nombreux personnages iconiques tels que
                    le Marsupilami, le méchant Gaston Lagaffe et les célèbres
                    Champignac, et a créé certaines des aventures les plus mémorables
                    de la série, comme "Zorglub" et "QRN sur Bretzelburg".La série a
                    continué après le départ de Franquin en 1969, avec de nombreux
                    autres auteurs apportant leur propre vision de Spirou et Fantasio.
                    En 2008, la série a été relancée avec une nouvelle équipe créative,
                    mais elle reste fidèle à l\'esprit original de l\'œuvre de Rob-Vel
                    et de Franquin, avec des aventures excitantes et de l\'humour pour
                    tous les âges.
                    </p>
              </div>
            </td></tr>
          </table>

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
</div>';

$pageHTML .='</body></html>';
echo $pageHTML;

?>

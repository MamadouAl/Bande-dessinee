<?php
include 'monEnv.php';

function connexion() {
    /** TODO renseigner $strConnex à l'aide de $_ENV configuré dans monEnv.php */
    $strConnex = "host=".$_ENV['dbHost']." user=".$_ENV['dbUser']." password=".$_ENV['dbPasswd'];
    //echo $strConnex ;
    $ptrDB = pg_connect($strConnex);
    return $ptrDB;
}

/**
 * getCollectiviteById
 * @param string $id
 * @return array tableau associatif associé à la collecivité
 * TODO
 */
function getAlbumById(string $id) : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_album WHERE bd_num = $1";

    /* TODO préparer la requête avec la fonction pg_prepare(...) ici */

    pg_prepare($ptrDB, "reqPrepSelectById" , $query ) ;

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectById", array($id));

    if (isset($ptrQuery)){
        /* TODO récupérer le tableau associatif avec pg_fetch_assoc dans $resu */
        $resu = pg_fetch_assoc($ptrQuery) ;

        if (empty($resu)){
            $resu =  array("message" => "Identifiant de album non valide : $id");
        }
    /* TODO libérer les ressources avec pg_free_result() ici */
    pg_free_result($ptrQuery) ;
    /* TODO fermer la connexion avec pg_close() ici */
    pg_close($ptrDB) ;
            return $resu;
    }
}

function getAllAlbum() : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_album";

    pg_prepare($ptrDB, "reqPrepSelectAll", $query);

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectAll", array());

    $resu = array();

    if (isset($ptrQuery)) {
        /* TODO traitement des lignes du résultats une à une ici */
        $resu = pg_fetch_all($ptrQuery) ;

    }
    pg_free_result($ptrQuery);
    pg_close($ptrDB);
    return $resu;
}

function insertAlbum(array $album) : array {
    $ptrDB = connexion();

    /* préparation et exécution de la requête INSERT ici */
    $monNum = "SELECT (MAX(bd_num) + 1) AS bd_num FROM P03_album";
    pg_prepare($ptrDB, "monNumReq", $monNum);
    $leMax= pg_execute($ptrDB, "monNumReq", array());

    $tab = pg_fetch_all($leMax);
    array_unshift($album, $tab[0]['bd_num']);

    $ptrInsert = "INSERT INTO P03_album VALUES ($1,$2,$3,$4,$5)" ;
    pg_prepare($ptrDB , "reqPrep" , $ptrInsert ) ;
    $ptrQuery = pg_execute($ptrDB , "reqPrep" , $album) ;

    return getAlbumById($album[0]);
}

function updateAlbum(array $album) {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête UPDATE ici */
    $ptrUpdate = "UPDATE P03_album SET bd_titre=$2, bd_annee=$3 ,bd_nbPages =$4, bd_prix=$5 WHERE bd_num=$1" ;
    pg_prepare($ptrDB , "reqPrep" , $ptrUpdate) ;
    $ptrQuery = pg_execute($ptrDB , "reqPrep" , $album) ;

    return getAlbumById($album['bd_num']);
}

function deleteAlbum(string $id) {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête DELETE ici */
    $ptrDelete ="DELETE FROM P03_album WHERE bd_num =$1 " ;

    $ptrDelete_produire = "DELETE FROM P03_produire WHERE bd_num=$1" ;


    pg_prepare($ptrDB , "reqPrep_produire" , $ptrDelete_produire) ;
    pg_prepare($ptrDB , "reqPrep" , $ptrDelete) ;

    $ptrQuery_prod = pg_execute($ptrDB , "reqPrep_produire" , array($id)) ;

    $ptrQuery = pg_execute($ptrDB , "reqPrep" , array($id)) ;



}

/*---------------------------------------------------------------------------------------*/


function getAuteurById(string $id) : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_auteur WHERE aut_id = $1";

    /* TODO préparer la requête avec la fonction pg_prepare(...) ici */

    pg_prepare($ptrDB, "reqPrepSelectById" , $query ) ;

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectById", array($id));

    if (isset($ptrQuery)){
        /* TODO récupérer le tableau associatif avec pg_fetch_assoc dans $resu */
        $resu = pg_fetch_assoc($ptrQuery) ;

        if (empty($resu)){
            $resu =  array("message" => "Identifiant de auteur non valide : $id");
        }
    /* TODO libérer les ressources avec pg_free_result() ici */
    pg_free_result($ptrQuery) ;
    /* TODO fermer la connexion avec pg_close() ici */
    pg_close($ptrDB) ;
            return $resu;
    }
}

function getAllAuteur() : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_auteur";

    pg_prepare($ptrDB, "reqPrepSelectAll", $query);

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectAll", array());

    $resu = array();

    if (isset($ptrQuery)) {
        /* TODO traitement des lignes du résultats une à une ici */
        $resu = pg_fetch_all($ptrQuery) ;

    }
    pg_free_result($ptrQuery);
    pg_close($ptrDB);
    return $resu;
}

function insertAuteur(array $auteur) : array {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête INSERT ici */
    $monNum = "SELECT (MAX(aut_id) + 1) AS aut_id FROM P03_auteur";
    pg_prepare($ptrDB, "monNumReq", $monNum);
    $leMax= pg_execute($ptrDB, "monNumReq", array());

    $tab = pg_fetch_all($leMax);
    array_unshift($auteur, $tab[0]['aut_id']);

    $ptrInsert = "INSERT INTO P03_auteur VALUES ($1, $2, $3)" ;
    pg_prepare($ptrDB , "reqPrep" , $ptrInsert);
    $ptrQuery = pg_execute($ptrDB , "reqPrep" , $auteur) ;

    return getAlbumById($auteur[0]);
}

function updateAuteur(array $auteur) {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête UPDATE ici */
    $ptrUpdate = "UPDATE P03_auteur SET aut_nom=$2, aut_prenom=$3  WHERE aut_id=$1" ;
    pg_prepare($ptrDB , "reqPrep" , $ptrUpdate) ;
    $ptrQuery = pg_execute($ptrDB , "reqPrep" , $auteur) ;

    return getAlbumById($auteur['aut_id']);
}

function deleteAuteur(string $id) {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête DELETE ici */
    $ptrDelete ="DELETE FROM P03_auteur WHERE aut_id =$1 " ;

    $ptrDelete_produire = "DELETE FROM P03_produire WHERE aut_id=$1" ;
    pg_prepare($ptrDB , "reqPrep_produire" , $ptrDelete_produire) ;
    pg_prepare($ptrDB , "reqPrep" , $ptrDelete) ;

    $ptrQuery_prod = pg_execute($ptrDB , "reqPrep_produire" , array($id)) ;
    $ptrQuery = pg_execute($ptrDB , "reqPrep" , array($id)) ;



}


/*---------------------------------------------------------------------------------------*/

/* */
function getAuteurs_albumById(string $id) : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_produire WHERE bd_num = $1";

    /* TODO préparer la requête avec la fonction pg_prepare(...) ici */

    pg_prepare($ptrDB, "reqPrepSelectById" , $query ) ;

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectById", array($id));

    if (isset($ptrQuery)){
        /* TODO récupérer le tableau associatif avec pg_fetch_assoc dans $resu */
        $resu = pg_fetch_all($ptrQuery) ;

        if (empty($resu)){
            $resu =  array();
        }
    /* TODO libérer les ressources avec pg_free_result() ici */
    pg_free_result($ptrQuery) ;
    /* TODO fermer la connexion avec pg_close() ici */
    pg_close($ptrDB) ;
            return $resu;
    }
}

function getAlbums_auteurById(string $id) : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_produire WHERE aut_id = $1";

    /* TODO préparer la requête avec la fonction pg_prepare(...) ici */

    pg_prepare($ptrDB, "reqPrepSelectById" , $query ) ;

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectById", array($id));

    if (isset($ptrQuery)){
        /* TODO récupérer le tableau associatif avec pg_fetch_assoc dans $resu */
        $resu = pg_fetch_all($ptrQuery) ;

        if (empty($resu)){
            $resu =  array();
        }
    /* TODO libérer les ressources avec pg_free_result() ici */
    pg_free_result($ptrQuery) ;
    /* TODO fermer la connexion avec pg_close() ici */
    pg_close($ptrDB) ;
            return $resu;
    }
}

function getAllProduire() : array {
    $ptrDB = connexion();

    $query = "SELECT * FROM P03_produire";

    pg_prepare($ptrDB, "reqPrepSelectAll", $query);

    $ptrQuery = pg_execute($ptrDB, "reqPrepSelectAll", array());

    $resu = array();

    if (isset($ptrQuery)) {
        /* TODO traitement des lignes du résultats une à une ici */
        $resu = pg_fetch_all($ptrQuery) ;

    }
    pg_free_result($ptrQuery);
    pg_close($ptrDB);
    return $resu;
}

function insertProduire(array $produire) : void {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête INSERT ici */
    $ptrVerif ="SELECT COUNT(*) AS nbre FROM P03_produire WHERE aut_id = $1 AND bd_num = $2 AND aut_role = $3";
    pg_prepare($ptrDB, "reqVerif", $ptrVerif);
    $ptrQuery1 = pg_execute($ptrDB, "reqVerif", $produire);

    $resu = pg_fetch_all($ptrQuery1);
    if($resu[0]['nbre']==0){
      $ptrDB2 = connexion();
      $ptrInsert = "INSERT INTO P03_produire VALUES ($1, $2, $3)" ;
      pg_prepare($ptrDB2 , "reqPrep" , $ptrInsert) ;
      $ptrQuery = pg_execute($ptrDB2 , "reqPrep" , $produire) ;
    }



  //  return getAlbumById($produire['aut_id']);
}

function deleteProduire(array $aSupp) {
    $ptrDB = connexion();

    /* TODO préparation et exécution de la requête DELETE ici */
    $ptrDelete ="DELETE FROM P03_produire WHERE aut_id =$1 AND bd_num =$2 AND aut_role=$3 " ;
    pg_prepare($ptrDB , "reqPrep" , $ptrDelete) ;
    $ptrQuery = pg_execute($ptrDB , "reqPrep" , $aSupp) ;
}

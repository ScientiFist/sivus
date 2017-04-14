<?php
/* CONNEXION BDD */
include 'core/db.php';

/* ERREUR */
$name = $_GET['name'];
$car = $_GET['car'];
$id = $_GET['id'];

if(!isset($name) && !isset($car) && !isset($id) || empty($name) && empty($car) && empty($id)){
header('location:erreur.php');
}


$carselected = $dbh->prepare("SELECT * FROM car WHERE marque_car = :marque_car AND nom_car = :nom_car AND id_car = :id_car");
$carselected->bindValue(':marque_car', $car, PDO::PARAM_INT);
$carselected->bindValue(':nom_car', $name , PDO::PARAM_STR);
$carselected->bindValue(':id_car', $id, PDO::PARAM_INT);
$carselected -> execute();

foreach($carselected as $carselect){

$descr_car = utf8_encode($carselect['descr_car']);
$perf_descr_car = utf8_encode($carselect['perf_descr_car']);
$ergo_descr_car = utf8_encode($carselect['ergo_descr_car']);
$cara_descr_car = utf8_encode($carselect['cara_descr_car']);
$avis_team_car = $carselect['avis_team_car'];
$url_youtube_video_car = $carselect['url_youtube_video_car'];
$url_view_car = $carselect['url_view_car'];
$ch_car = $carselect['ch_car'];
$nom_car = $carselect['nom_car'];
$i = $carselect['marque_car'];
$note = $carselect['note_car'];

}

if(empty($carselect)){
header('location:erreur.php');
}


include 'core/listcar.php';
?>

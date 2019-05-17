<?php 
require_once 'modeles/modele_database.php';
require_once 'modeles/modele_patients.php';

$patients = new patients(); 

if(isset($_POST['form_insert'])) {
    header('Location : partie2/Exo_1/ajout-patient.php/');
}

?>
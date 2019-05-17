<?php

class patients extends database { 

    private $id = 0;
    private $firstname = '';
    private $lastname = '';
    private $birthdate = 1/1/1970;
    private $phone; 
    private $mail = 'robin.halberda@orange.fr';

 public function addPatients() {

        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $birthdate = $_POST['birthdate'];
        $phone = $_POST['phone'];
        $mail = $_POST['mail'];
        $query = $bdd->addPatients();
        $array = array(
            'lastname' => $lastname,
            'firstname' => $firstname,
            'birthdate' => $birthdate,
            'phone' => $phone,
            'mail' => $mail
        );
        $query->execute($array);
    }
}


?>
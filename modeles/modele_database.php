<?php 

class database {

    private $_host = 'mysql:host=localhost;dbname=hospitalE2N';
    private $username = 'robin.halberda';
    private $password = 'b8izn9hi';
    private $dataBase;

public function getHost() {
    return $this->_host;
}

public function setHost($host){
    $this->_host = $host;
}

public function getUsername() {
    return $this->username;
}

public function getPassword() {
    return $this->password;
}

public function __construct(){
    try{
        $this->dataBase = new PDO($this->getHost(), $this->getUsername(), $this->getPassword() );
    } catch (Exception $errorMessage) {
        die('Erreur : ' . $errorMessage->getMessage() );
    }
}
}

?>
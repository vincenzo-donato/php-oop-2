<!-- IMPLEMENTO LA CLASSE 'User'  -->
<?php
    
    // CLASSE 
    class User{
        // VARIABILI 
        public $id;
        public $utente;
        public $email;
        public $nome;
        public $cognome;

        // COSTRUCT PER INFO ID UTENTI E EMAIL 
        public function __construct($_id, $_utente = '', $_email = '')
        {
            $this->id = $_id;
            $this->utente = $_utente;
            $this->email = $_email;
        }

    }
    
    // Dichiaro gli oggetti 
    $primoUserInfoPrimarie = new User(19982881,'Fil','Fil@gmail.com');
    $secondoUserInfoPrimarie = new User(38712983,'Ababua','Aliababua@gmail.com');
    $terzoUserInfoPrimarie = new User(2311231,'Range','range@gmail.com');
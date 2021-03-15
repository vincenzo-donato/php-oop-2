<!-- IMPLEMENTO LA CLASSE 'Employee' ereditata da User  -->
<?php

// INCLUDO LA CLASSE User E IL TRAITS GetInfo
require_once 'User.php';
require_once 'GetInfo.php';


class Employee extends User {

  public $nazione;

  // RIFORMULO IL COSTRUCT PER RECUPERARE ALTRE INFO E AGGIUNGERE LA NAZIONE ALLA NUOVA CLASSE 
  public function __construct($_id, $_nome, $_cognome, $_nazione = '')
  {
    parent::__construct($_id);
    $this->nome = $_nome;
    $this->cognome = $_cognome;
    $this->nazione = $_nazione;
  }

  // Posiziono la trait 
  use GetInfo;

}

// Dichiaro gli oggetti 
$primoUserInfoSecondarie = new Employee(19982881,'Fil','Aristo','Italiana');
$primoUserInfoSecondarie->setSesso('M');

$secondoUserInfoSecondarie = new Employee(38712983,'Tom','Cruise','Americana');
$secondoUserInfoSecondarie->setSesso('g');

$terzoUserInfoSecondarie = new Employee(2311231,'Elisa','Mastro','Inglese');
$terzoUserInfoSecondarie->setSesso('F');
<!-- IMPLEMENTO LA TRAIT   -->
<?php

    // Inizializzo trait  
    trait GetInfo {

        // Aggiungo altre info che voglio recuperare 
        protected $sesso;
        public    $saluto;

        // Eseguo dei metodi per avere un risultato diverso per il saluto in base al sesso del user 
        public function setSesso($_sesso){
            $this->sesso = $_sesso;
            if($this->sesso == 'M'){
                $this->saluto = 'Benvenuto';
            }
            else if($this->sesso == 'F'){
                $this->saluto = 'Benvenuta';
            }
            else{
                $this->saluto = 'Valutazione non valida';
            }
        }

        public function getSesso(){
            return $this->saluto;
        }

    }
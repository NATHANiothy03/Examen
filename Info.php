<?php
class Info
    {
            public $Nom;
            public $Prix;
            public $info;
            public $img;
            public function __construct($Nom,$Prix,$Info,$img)
            {
                $this->Nom = $Nom;
                $this->Prix=$Prix;
                $this->Info=$Info;
                $this->img=$img;
            }
    }   
?>
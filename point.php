<?php

class point 
{
    
    private $x;
    private $y;
    private $couleur;

    function __construct ($x,$y,$couleur)
    {
        $this->x = $x;
        $this->y = $y;    
        $this-> couleur = $couleur;
    }

    public function Afficher ()
    {
        echo "<span style='color:".$this->couleur."'".">".$this->x.",".$this->y."</span>";
    }

    function __get($propriete) 
    {
        return $this->$propriete;
    }
   
    function __set($prop, $valeur) 
    {
        $this->$prop = $valeur;
    }

}




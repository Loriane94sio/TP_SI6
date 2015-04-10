<?php

class rectangle 
{
    private $point_haut_gauche;
    private $largeur;
    private $hauteur;
    private $couleur_fond;
    private $couleur_bord;
    
    function __construct($x, $y, $largeur, $hauteur, $couleur_fond, $couleur_bord) 
    {
        
        $this->point_haut_gauche = new point ($x, $y, $couleur_bord);
        $this->largeur = $largeur;
        $this->hauteur = $hauteur;
        $this->couleur_fond = $couleur_fond;
        $this->couleur_bord = $couleur_bord;
    }
    

    
}

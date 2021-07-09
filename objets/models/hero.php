<?php
require_once('models/personne.php');
class Hero extends Personne
{
    private $_aFaitOut;
    public $pseudo;
    public $estSuperVilain;
    public function __construct($pPrenom,$pNom,$pGenre,$pPseudo,$pEstSuperVilain,$pAFaitOut)
    {
        parent::__construct($pNom,$pPrenom,$pGenre);
        $this->pseudo = $pPseudo;
        $this->estSuperVilain = $pEstSuperVilain;
        $this->_aFaitOut = $pAFaitOut;
       // var_dump($this);
    }
    public function getIdentiteSecrete()
    {
        /**
         * a charge de vérifier si la personne a droit d'avoir la vrai identité
         */
        if ($this->_aFaitOut == true)
        {
            return $this->_prenom." ".$this->_nom;
        }    
        else
        {
            return "...<br>Cette information est secrete.<br> Merci de vous rendre au Shield.";
   
        }}
    public function afficherInformation()
    {
        //$citoyen=parent::afficherInformation(); // permet d'appeler 
        //la version de la méthode implémenté dans la classe parent (Personne)
        return "le héro est ".$this->pseudo." et est un ".$this->getCote();
    }
    public function getCote()
    {
        if ($this->estSuperVilain)
        return " un criminel";
        else
        return "un justicier";
    }

}

?>
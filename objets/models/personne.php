<?php
class personne
{
    protected $_nom;
    protected $_prenom;
    public $genre;

    public function __construct($pNom,$pPrenom,$pGenre)
    {
        $this->_nom = $pNom;
        $this->_prenom = $pPrenom;
        $this->genre = $pGenre;
    }
    public function getIdentite()
    {
        return "il s'agit de ".$this->_prenom." ".$this->_nom;
    }
    public function afficherInformation()
    {
        return "le citoyen s'apppelle ".$this->_prenom." ".$this->_nom;
    }
}
?>
<?php
namespace modele;
class Point
{
// ------------------------------------------------------------------------------------------------------
    // ---------------------------------- Attributs protégés de la classe -----------------------------------
    // ------------------------------------------------------------------------------------------------------

    // protected au lieu de private car cette classe fera l'objet d'un héritage
    protected $latitude; // latitude
    protected $longitude; // longitude
    protected $altitude; // altitude

    // ------------------------------------------------------------------------------------------------------
    // ----------------------------------------- Constructeur -----------------------------------------------
    // ------------------------------------------------------------------------------------------------------

    public function __construct($uneLatitude, $uneLongitude, $uneAltitude) {
        $this->latitude = $uneLatitude;
        $this->longitude = $uneLongitude;
        $this->altitude = $uneAltitude;
    }

    // ------------------------------------------------------------------------------------------------------
    // ---------------------------------------- Getters et Setters ------------------------------------------
    // ------------------------------------------------------------------------------------------------------

    public function getLatitude() {return $this->latitude;}
    public function setLatitude($uneLatitude) {$this->latitude = $uneLatitude;}

    public function getLongitude() {return $this->longitude;}
    public function setLongitude($uneLongitude) {$this->longitude = $uneLongitude;}

    public function getAltitude() {return $this->altitude;}
    public function setAltitude($uneAltitude) {$this->altitude = $uneAltitude;}

    // ------------------------------------------------------------------------------------------------------
    // ---------------------------------------- Méthodes d'instances ----------------------------------------
    // ------------------------------------------------------------------------------------------------------

    // Fournit une chaine contenant toutes les données de l'objet
    public function toString() {
        $msg = "latitude : " . $this->latitude . "<br>";
        $msg .= "longitude : " . $this->longitude . "<br>";
        $msg .= "altitude : " . $this->altitude . "<br>";
        return $msg;
    }
}
<?php


 
class Putovanje {
    private $putovanje_id;
    private $destinacija;
    private $datum;
    private $trajanje_putovanja;
    private $cena;
    private $korisnik_id;
    
    public function __construct($destinacija, $datum, $trajanje_putovanja, $cena, $korisnik_id) {
      $this->destinacija = $destinacija;
      $this->datum = $datum;
      $this->trajanje_putovanja = $trajanje_putovanja;
      $this->cena = $cena;
      $this->korisnik_id = $korisnik_id;
    }
    
    public function setPutovanjeId($putovanje_id) {
      $this->putovanje_id = $putovanje_id;
    }
    
    public function getPutovanjeId() {
      return $this->putovanje_id;
    }
    
    public function getDestinacija() {
      return $this->destinacija;
    }
    
    public function getDatum() {
      return $this->datum;
    }
    
    public function getTrajanjePutovanja() {
      return $this->trajanje_putovanja;
    }
    
    public function getCena() {
      return $this->cena;
    }
    
    public function getKorisnikId() {
      return $this->korisnik_id;
    }

}







?>
<?php

// Online PHP compiler to run PHP program online
// Print "Try programiz.pro" message


abstract class Vehicule implements ReservableInterface {
    protected int $id;
    protected string $immatriculation;
    protected string $marque;
    protected string $modele;
    protected float $prixJour;
    protected bool $disponible;
    
    
        public function __construct(int $id, string $immatriculation, string $marque, string $modele, float $prixJour) {
        $this->id = $id;
        $this->immatriculation = $immatriculation;
        $this->marque = $marque;
        $this->modele = $modele;
        $this->prixJour = $prixJour;
        $this->disponible = true;
    }

      public function afficherDetails(){
        echo "Immatriculation: $this->immatriculation \n";
        echo "Marque: $this->marque \n";
        echo "Modèle: $this->modele \n";
        echo "Prix/jour: $this->prixJour € \n";
    }
    
    public function calculerPrix(int $jours){
        return $this->prixJour * $jours;
    }

    
     public function estDisponible() {
        return $this->disponible;
    }
    
    
    abstract public function getType(): string;
}
?>


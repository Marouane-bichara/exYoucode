<?php

class Moto extends Vehicule implements ReservableInterface {
    private int $cylindree;

    public function getType(): string {
        return 'Moto';
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        if (!$this->estDisponible()) {
            throw new Exception("Le véhicule n'est pas disponible.");
        }
        $reservation = new Reservation($client, $this, $dateDebut, $nbJours);
        $this->disponible = false; 
        return $reservation;
    }

    public function afficherDetails(){
        parent::afficherDetails();
        echo ", Cylindrée: $this->cylindree";
    }
}
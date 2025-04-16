<?php

class Voiture extends Vehicule implements ReservableInterface {
    private int $nbPortes;
    private string $transmission;

    public function getType(): string {
        return 'Voiture';
    }

    public function reserver(Client $client, DateTime $dateDebut, int $nbJours): Reservation {
        if (!$this->estDisponible()) {
            throw new Exception("Le véhicule n'est pas disponible.");
        }
        $reservation = new Reservation($client, $this, $dateDebut, $nbJours);
        $this->disponible = false; 
        return $reservation;
    }

    public function afficherDetails() {
        parent::afficherDetails();
        echo ", Nombre de portes: $this->nbPortes, Transmission: $this->transmission";
    }
}



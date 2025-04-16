<?php 
class Camion extends Vehicule implements ReservableInterface {
    private float $capaciteTonnage;

    public function getType(): string {
        return 'Camion';
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
        echo ", Capacité de tonnage: $this->capaciteTonnage";
    }
}

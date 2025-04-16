<?php

class Client extends Personne {
    private string $numeroClient;
    private array $reservations = [];

    public function ajouterReservation(Reservation $r) {
        $this->reservations[] = $r;
    }

    public function afficherProfil() {
        echo "Nom: {$this->nom} {$this->prenom}, Email: {$this->email}, Numéro Client: {$this->numeroClient}\n";
    }

    public function getHistorique() {
        echo "Historique des réservations:\n";
        foreach ($this->reservations as $reservation) {
            $reservation->afficherDetails();
        }
    }
}
?>

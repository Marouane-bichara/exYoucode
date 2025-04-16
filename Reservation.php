<?php
class Reservation {
    private $vehicule;
    private $client;
    private $dateDebut;
    private $nbJours;
    private $statut;

    public function __construct(Client $client, Vehicule $vehicule, DateTime $dateDebut, int $nbJours) {
        $this->client = $client;
        $this->vehicule = $vehicule;
        $this->dateDebut = $dateDebut;
        $this->nbJours = $nbJours;
        $this->statut = 'En attente';   
    }

    public function calculerMontant(){
        return $this->vehicule->calculerPrix($this->nbJours);
    }

    public function confirmer() {
        $this->statut = 'Confirmée';
    }

    public function annuler() {
        $this->statut = 'Annulée';
    }

    public function afficherDetails() {
        echo "Véhicule: {$this->vehicule->getType()}, Montant: {$this->calculerMontant()}€, Date: {$this->dateDebut->format('Y-m-d')}, Statut: {$this->statut}\n";
    }
}

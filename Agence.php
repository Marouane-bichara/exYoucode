<?php 

 
    class Agence{
        protected string $nom;
        protected string $ville;
        protected array $vehicules = [];
        protected array $clients = [];

        public function __construct(string $nom, string $ville){
            $this->nom = $nom;
            $this->ville = $ville;
        }

        public function ajouterVehicule(Vehicule $v){
            $this->vehicules[] = $v;
        }


        public function rechercherVehiculeDisponible(string $type){
            foreach ($this->vehicules as $vehicule) {
                if ($vehicule->getType() === $type && !$vehicule->estReserve()) {
                    return $vehicule;
                }
            }
            return null;
        }

        public function enregistrerClient(Client $c){
            $this->clients[] = $c;
        }


        public function faireReservation(Client $client, Vehicule $v, DateTime $dateDebut, int $nbJours): Reservation{
            if (!in_array($client, $this->clients)) {
                throw new Exception("Client non enregistré.");
            }
            if (!in_array($v, $this->vehicules)) {
                throw new Exception("Véhicule non enregistré.");
            }
            if (!$v->estDisponible()) {
                throw new Exception("Véhicule non disponible.");
            }
            $reservation = $v->reserver($client, $dateDebut, $nbJours);
            return $reservation;
            
        }
    }
?>
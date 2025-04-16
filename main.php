<?php


require_once 'Agence.php';

$agenceParis = new Agence("Location de Véhicules", "Paris" , [
    new Voiture(1, "AB-123-CD", "Toyota", "Corolla", 50.0),
    new Moto(2, "EF-456-GH", "Yamaha", "MT-07", 30.0),
    new Camion(3, "IJ-789-KL", "Mercedes", "Sprinter", 80.0)
] , [
    new Client(1, "Dupont", "Jean"),
    new Client(2, "Martin", "Sophie"),
]);

$agenceCasablanca = new Agence("Location de Casablanca", "Casablanca" , [
    new Voiture(4, "MN-012-OP", "Renault", "Clio", 40.0),
    new Moto(5, "QR-345-ST", "Kawasaki", "Ninja", 35.0),
    new Camion(6, "UV-678-WX", "Iveco", "Daily", 90.0)
] , [
    new Client(3, "El Amrani", "Ahmed"),
    new Client(4, "Bennani", "Fatima"),
]);

$disponibleVParis = $agenceParis->rechercherVehiculeDisponible("Voiture");
$disponibleVMontpellier = $agenceCasablanca->rechercherVehiculeDisponible("Moto");
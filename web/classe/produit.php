<?php

class Produit {
    private int $id;
    private string $nom;
    private float $prix;

    public function __construct(int $id, string $nom, float $prix) {
        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
    }

    public function afficher() {
        echo("Info sur le produit : " .$this->id. " , " .$this->nom. " , " .$this->prix. " €");
    }

    public function getId(): int {
        return $this->id;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getPrix(): float {
        return $this->prix;
    }
}

$produit = new Produit(1, "Truc", 1.50);
$produit->afficher();

?>
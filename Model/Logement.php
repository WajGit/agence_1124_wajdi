<?php

class Logement{
    private string $titre;
    private string $adresse;
    private string $ville;
    private int $cp;
    private int $surface;
    private int $prix;
    private string $photo;
    private string $type;
    private string $description;

    public function __construct(string $titre, string $adresse, string $ville, string $cp, string $surface, string $prix, string $photo, string $type, string $description){
        $this->titre = $titre;
        $this->adresse = $adresse;
        $this->ville = $ville;
        $this->cp = intval($cp);
        $this->surface = intval($surface);
        $this->prix = intval($prix);
        $this->photo = $photo;
        $this->type = $type;
        $this->description = trim($description);
    }
	
    public function getTitre(): string {return $this->titre;}

	public function getAdresse(): string {return $this->adresse;}

	public function getVille(): string {return $this->ville;}

	public function getCp(): int {return $this->cp;}

	public function getSurface(): int {return $this->surface;}

	public function getPrix(): int {return $this->prix;}

	public function getPhoto(): string {return $this->photo;}

	public function getType(): string {return $this->type;}

	public function getDescription(): string {return $this->description;}

}

?>
<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeEtLocalisationDesMuseesDeFrance
 *
 * @ORM\Table(name="liste_et_localisation_des_musees_de_france")
 * @ORM\Entity
 */
class ListeEtLocalisationDesMuseesDeFrance
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Région administrative", type="string", length=39, nullable=true)
     */
    private $r�gionAdministrative;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Département", type="string", length=24, nullable=true)
     */
    private $d�partement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Identifiant Muséofile", type="string", length=5, nullable=true)
     */
    private $identifiantMus�ofile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commune", type="string", length=31, nullable=true)
     */
    private $commune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom officiel du musée", type="string", length=106, nullable=true)
     */
    private $nomOfficielDuMus�e;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Adresse", type="string", length=118, nullable=true)
     */
    private $adresse;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Lieu", type="string", length=72, nullable=true)
     */
    private $lieu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Code Postal", type="string", length=5, nullable=true)
     */
    private $codePostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Téléphone", type="string", length=84, nullable=true)
     */
    private $t�l�phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="URL", type="string", length=170, nullable=true)
     */
    private $url;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Latitude", type="string", length=19, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Longitude", type="string", length=20, nullable=true)
     */
    private $longitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="REF_Deps", type="string", length=7, nullable=true)
     */
    private $refDeps;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geolocalisation", type="string", length=40, nullable=true)
     */
    private $geolocalisation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Date arrêté attribution appellation", type="string", length=10, nullable=true)
     */
    private $dateArr�t�AttributionAppellation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getR�gionAdministrative(): ?string
    {
        return $this->r�gionAdministrative;
    }

    public function setR�gionAdministrative(?string $r�gionAdministrative): self
    {
        $this->r�gionAdministrative = $r�gionAdministrative;

        return $this;
    }

    public function getD�partement(): ?string
    {
        return $this->d�partement;
    }

    public function setD�partement(?string $d�partement): self
    {
        $this->d�partement = $d�partement;

        return $this;
    }

    public function getIdentifiantMus�ofile(): ?string
    {
        return $this->identifiantMus�ofile;
    }

    public function setIdentifiantMus�ofile(?string $identifiantMus�ofile): self
    {
        $this->identifiantMus�ofile = $identifiantMus�ofile;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->commune;
    }

    public function setCommune(?string $commune): self
    {
        $this->commune = $commune;

        return $this;
    }

    public function getNomOfficielDuMus�e(): ?string
    {
        return $this->nomOfficielDuMus�e;
    }

    public function setNomOfficielDuMus�e(?string $nomOfficielDuMus�e): self
    {
        $this->nomOfficielDuMus�e = $nomOfficielDuMus�e;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getLieu(): ?string
    {
        return $this->lieu;
    }

    public function setLieu(?string $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(?string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getT�l�phone(): ?string
    {
        return $this->t�l�phone;
    }

    public function setT�l�phone(?string $t�l�phone): self
    {
        $this->t�l�phone = $t�l�phone;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getRefDeps(): ?string
    {
        return $this->refDeps;
    }

    public function setRefDeps(?string $refDeps): self
    {
        $this->refDeps = $refDeps;

        return $this;
    }

    public function getGeolocalisation(): ?string
    {
        return $this->geolocalisation;
    }

    public function setGeolocalisation(?string $geolocalisation): self
    {
        $this->geolocalisation = $geolocalisation;

        return $this;
    }

    public function getDateArr�t�AttributionAppellation(): ?string
    {
        return $this->dateArr�t�AttributionAppellation;
    }

    public function setDateArr�t�AttributionAppellation(?string $dateArr�t�AttributionAppellation): self
    {
        $this->dateArr�t�AttributionAppellation = $dateArr�t�AttributionAppellation;

        return $this;
    }


}

<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FrequentationMuseesDeFrance2018
 *
 * @ORM\Table(name="frequentation_musees_de_france_2018")
 * @ORM\Entity
 */
class FrequentationMuseesDeFrance2018
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=7, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="osm_id", type="string", length=10, nullable=true)
     */
    public $osmId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=117, nullable=true)
     */
    public $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=7, nullable=true)
     */
    public $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", length=56, nullable=true)
     */
    public $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postal_code", type="string", length=17, nullable=true)
     */
    public $postalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=30, nullable=true)
     */
    public $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=27, nullable=true)
     */
    public $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    public $countryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=6, nullable=true)
     */
    public $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="string", length=19, nullable=true)
     */
    public $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lon", type="string", length=20, nullable=true)
     */
    public $lon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=10, nullable=true)
     */
    public $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=true)
     */
    public $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=10, nullable=true)
     */
    public $fax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    public $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats", type="string", length=54, nullable=true)
     */
    public $stats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="string", length=23, nullable=true)
     */
    public $tags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=10, nullable=true)
     */
    public $description;

    public function getId(): ?string
    {
        return $this->id;
    }

    public function getOsmId(): ?string
    {
        return $this->osmId;
    }

    public function setOsmId(?string $osmId): self
    {
        $this->osmId = $osmId;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLat(): ?string
    {
        return $this->lat;
    }

    public function setLat(?string $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): ?string
    {
        return $this->lon;
    }

    public function setLon(?string $lon): self
    {
        $this->lon = $lon;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(?int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getStats(): ?string
    {
        return $this->stats;
    }

    public function setStats(?string $stats): self
    {
        $this->stats = $stats;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


}

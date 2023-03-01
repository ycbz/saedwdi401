<?php

namespace App/Entity;

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
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="osm_id", type="string", length=10, nullable=true)
     */
    private $osmId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=117, nullable=true)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="number", type="string", length=7, nullable=true)
     */
    private $number;

    /**
     * @var string|null
     *
     * @ORM\Column(name="street", type="string", length=56, nullable=true)
     */
    private $street;

    /**
     * @var string|null
     *
     * @ORM\Column(name="postal_code", type="string", length=17, nullable=true)
     */
    private $postalCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=30, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=27, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country_code", type="string", length=2, nullable=true)
     */
    private $countryCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=6, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lat", type="string", length=19, nullable=true)
     */
    private $lat;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lon", type="string", length=20, nullable=true)
     */
    private $lon;

    /**
     * @var string|null
     *
     * @ORM\Column(name="website", type="string", length=10, nullable=true)
     */
    private $website;

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=10, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=10, nullable=true)
     */
    private $fax;

    /**
     * @var int|null
     *
     * @ORM\Column(name="year", type="integer", nullable=true)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="stats", type="string", length=54, nullable=true)
     */
    private $stats;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="string", length=23, nullable=true)
     */
    private $tags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=10, nullable=true)
     */
    private $description;


}

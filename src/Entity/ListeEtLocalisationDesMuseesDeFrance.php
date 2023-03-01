<?php

namespace App/Entity;

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
     * @ORM\Column(name="RÃ©gion administrative", type="string", length=39, nullable=true)
     */
    private $rã©gionAdministrative;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DÃ©partement", type="string", length=24, nullable=true)
     */
    private $dã©partement;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Identifiant MusÃ©ofile", type="string", length=5, nullable=true)
     */
    private $identifiantMusã©ofile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Commune", type="string", length=31, nullable=true)
     */
    private $commune;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nom officiel du musÃ©e", type="string", length=106, nullable=true)
     */
    private $nomOfficielDuMusã©e;

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
     * @ORM\Column(name="TÃ©lÃ©phone", type="string", length=84, nullable=true)
     */
    private $tã©lã©phone;

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
     * @ORM\Column(name="Date arrÃªtÃ© attribution appellation", type="string", length=10, nullable=true)
     */
    private $dateArrãªtã©AttributionAppellation;


}

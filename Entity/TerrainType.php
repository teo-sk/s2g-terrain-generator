<?php

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Teo\Symfony2Gaming\TerrainGeneratorBundle\Model\TerrainType as TerrainTypeModel;


/**
 * Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\TerrainType
 *
 * @ORM\MappedSuperclass
 */
abstract class TerrainType extends TerrainTypeModel
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;
}
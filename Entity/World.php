<?php

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Teo\Symfony2Gaming\TerrainGeneratorBundle\Model\World as WorldModel;

/**
 * Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\World
 *
 * @ORM\MappedSuperclass
 */
abstract class World extends WorldModel
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer $width
     *
     * @ORM\Column(name="width", type="integer")
     */
    protected $width;

    /**
     * @var integer $height
     *
     * @ORM\Column(name="height", type="integer")
     */
    protected $height;

}
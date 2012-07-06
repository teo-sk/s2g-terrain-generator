<?php

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Teo\Symfony2Gaming\TerrainGeneratorBundle\Model\TerrainBlock as TerrainBlockModel;

/**
 * Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\TerrainBlock
 *
 * @ORM\MappedSuperclass
 */
abstract class TerrainBlock extends TerrainBlockModel
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
     * @var integer $tileX
     *
     * @ORM\Column(name="tileX", type="integer")
     */
    protected  $tileX;

    /**
     * @var integer $tileY
     *
     * @ORM\Column(name="tileY", type="integer")
     */
    protected  $tileY;

}
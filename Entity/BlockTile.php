<?php

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Teo\Symfony2Gaming\TerrainGeneratorBundle\Model\BlockTile as BlockTileModel;

/**
 * Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\BlockTile
 *
 * @ORM\MappedSuperclass
 */
abstract class BlockTile extends BlockTileModel
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

    /**
     * @var integer $worldX
     *
     * @ORM\Column(name="worldX", type="integer")
     */
    protected $worldX;

    /**
     * @var integer $worldY
     *
     * @ORM\Column(name="worldY", type="integer")
     */
    protected $worldY;

    /**
     * @var array $midpoint
     *
     * @ORM\Column(name="midpoint", type="array")
     */
    protected $midpoint;

}
<?php

/*
* This file is part of the Symfony2Gaming TerrainGeneratorBundle package.
*
* (c) Matej Zilak <http://teo.sk>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Model;

/**
 * Base block tile model
 *
 * @author Matej Zilak <teo@teo.sk>
 */

abstract class BlockTile Implements BlockTileInterface {
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var integer $width
     *
     */
    private $width;

    /**
     * @var integer $height
     *
     */
    private $height;

    /**
     * @var integer $worldX
     *
     */
    private $worldX;

    /**
     * @var integer $worldY
     *
     */
    private $worldY;

    /**
     * @var array $midpoint
     *
     */
    private $midpoint;


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set width
     *
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * {@inheritdoc}
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set height
     *
     * @param integer $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * {@inheritdoc}
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set worldX
     *
     * @param integer $worldX
     */
    public function setWorldX($worldX)
    {
        $this->worldX = $worldX;
    }

    /**
     * {@inheritdoc}
     */
    public function getWorldX()
    {
        return $this->worldX;
    }

    /**
     * Set worldY
     *
     * @param integer $worldY
     */
    public function setWorldY($worldY)
    {
        $this->worldY = $worldY;
    }

    /**
     * {@inheritdoc}
     */
    public function getWorldY()
    {
        return $this->worldY;
    }

    /**
     * Set midpoint
     *
     * @param array $midpoint
     */
    public function setMidpoint($midpoint)
    {
        $this->midpoint = $midpoint;
    }

    /**
     * {@inheritdoc}
     */
    public function getMidpoint()
    {
        return $this->midpoint;
    }
}
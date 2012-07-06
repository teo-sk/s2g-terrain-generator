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
 * Base terrain block model
 *
 * @author Matej Zilak <teo@teo.sk>
 */

abstract class TerrainBlock Implements TerrainBlockInterface {
    /**
     * @var integer $id
     */
    protected  $id;

    /**
     * @var TerrainTypeInterface $terrainType
     */
    protected $terrainType;

    /**
     * @var BlockTileInterface $blockTile
     */
    protected $blockTile;

    /**
     * @var integer $tileX
     */
    protected  $tileX;

    /**
     * @var integer $tileY
     */
    protected  $tileY;



    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockTile()
    {
        return $this->blockTile;
    }

    /**
     * Set blockTile
     *
     * @param BlockTileInterface $blockTile
     */
    public function setBlockTile(BlockTileInterface $blockTile)
    {
        $this->blockTile = $blockTile;
    }

    /**
     * {@inheritdoc}
     */
    public function getTerrainType()
    {
        return $this->terrainType;
    }

    /**
     * Set terrainType
     *
     * @param TerrainTypeInterface $terrainType
     */
    public function setTerrainType(TerrainTypeInterface $terrainType)
    {
        $this->terrainType = $terrainType;
    }

    /**
     * {@inheritdoc}
     */
    public function getTileX()
    {
        return $this->tileX;
    }

    /**
     * Set tileX
     *
     * @param integer $tileX
     */
    public function setTileX($tileX)
    {
        $this->tileX = $tileX;
    }

    /**
     * {@inheritdoc}
     */
    public function getTileY()
    {
        return $this->tileY;
    }

    /**
     * Set tileY
     *
     * @param integer $tileY
     */
    public function setTileY($tileY)
    {
        $this->tileY = $tileY;
    }


}
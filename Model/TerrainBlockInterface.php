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
 * Interface defining terrain blocks
 *
 * @author Matej Zilak <teo@teo.sk>
 */
interface TerrainBlockInterface
{
    /**
     * Returns unique id of terrain block.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Returns the terrain type object for this block.
     *
     * @return TerrainTypeInterface
     */
    public function getTerrainType();

    /**
     * Returns the tile this block belongs to.
     *
     * @return BlockTile
     */
    public function getBlockTile();

    /**
     * Returns the x position of the block in the tile.
     *
     * @return integer
     */
    public function getTileX();

    /**
     * Returns the y position of the block in the tile.
     *
     * @return integer
     */
    public function getTileY();

}
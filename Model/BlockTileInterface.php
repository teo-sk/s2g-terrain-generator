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
 * Interface defining block tiles
 *
 * @author Matej Zilak <teo@teo.sk>
 */
interface BlockTileInterface
{
    /**
     * Returns unique id of block tile.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Returns width of block tile.
     *
     * @return integer
     */
    public function getWidth();

    /**
     * Returns height of block tile.
     *
     * @return integer
     */
    public function getHeight();

    /**
     * Returns the x position of the tile in the world.
     *
     * @return integer
     */
    public function getWorldX();

    /**
     * Returns the y position of the tile in the world.
     *
     * @return integer
     */
    public function getWorldY();

    /**
     * Returns the array of coordinates to define middle point of the tile.
     *
     * @return array
     */
    public function getMidpoint();
}
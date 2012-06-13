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
interface WorldInterface
{
    /**
     * Returns unique id of world.
     *
     * @return mixed
     */
    public function getId();

    /**
     * Returns width of world.
     *
     * @return integer
     */
    public function getWidth();

    /**
     * Returns height of world.
     *
     * @return integer
     */
    public function getHeight();
}
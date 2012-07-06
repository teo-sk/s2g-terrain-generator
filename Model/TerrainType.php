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
 * Base terrain type model
 *
 * @author Matej Zilak <teo@teo.sk>
 */

abstract class TerrainType Implements TerrainTypeInterface {
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * @var string $name
     *
     */
    private $name;


    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
}
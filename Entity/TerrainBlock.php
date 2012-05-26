<?php

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\TerrainBlock
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\TerrainBlockRepository")
 */
class TerrainBlock
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
     * @var integer $terrainX
     *
     * @ORM\Column(name="terrainX", type="integer")
     */
    private $terrainX;

    /**
     * @var integer $terrainY
     *
     * @ORM\Column(name="terrainY", type="integer")
     */
    private $terrainY;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set terrainX
     *
     * @param integer $terrainX
     */
    public function setTerrainX($terrainX)
    {
        $this->terrainX = $terrainX;
    }

    /**
     * Get terrainX
     *
     * @return integer 
     */
    public function getTerrainX()
    {
        return $this->terrainX;
    }

    /**
     * Set terrainY
     *
     * @param integer $terrainY
     */
    public function setTerrainY($terrainY)
    {
        $this->terrainY = $terrainY;
    }

    /**
     * Get terrainY
     *
     * @return integer 
     */
    public function getTerrainY()
    {
        return $this->terrainY;
    }
}
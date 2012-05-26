<?php

namespace Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\BlockTile
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Teo\Symfony2Gaming\TerrainGeneratorBundle\Entity\BlockTileRepository")
 */
class BlockTile
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
     * @var integer $width
     *
     * @ORM\Column(name="width", type="integer")
     */
    private $width;

    /**
     * @var integer $height
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var integer $worldX
     *
     * @ORM\Column(name="worldX", type="integer")
     */
    private $worldX;

    /**
     * @var integer $worldY
     *
     * @ORM\Column(name="worldY", type="integer")
     */
    private $worldY;

    /**
     * @var array $midpoint
     *
     * @ORM\Column(name="midpoint", type="array")
     */
    private $midpoint;


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
     * Set width
     *
     * @param integer $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * Get width
     *
     * @return integer 
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
     * Get height
     *
     * @return integer 
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
     * Get worldX
     *
     * @return integer 
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
     * Get worldY
     *
     * @return integer 
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
     * Get midpoint
     *
     * @return array 
     */
    public function getMidpoint()
    {
        return $this->midpoint;
    }
}
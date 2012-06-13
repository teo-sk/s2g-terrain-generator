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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

}
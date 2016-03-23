<?php

namespace biz\sitewebBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * motif
 *
 * @ORM\Table(name="motif")
 * @ORM\Entity(repositoryClass="biz\sitewebBundle\Repository\motifRepository")
 */
class motif
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titreMotif", type="string", length=255)
     */
    private $titreMotif;


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
     * Set titreMotif
     *
     * @param string $titreMotif
     * @return motif
     */
    public function setTitreMotif($titreMotif)
    {
        $this->titreMotif = $titreMotif;

        return $this;
    }

    /**
     * Get titreMotif
     *
     * @return string 
     */
    public function getTitreMotif()
    {
        return $this->titreMotif;
    }
}

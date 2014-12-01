<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbIpr
 *
 * @ORM\Table(name="tb_ipr")
 * @ORM\Entity
 */
class TbIpr
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nro_ipr", type="integer", nullable=false)
     */
    private $nroIpr;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ipr", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idIpr;



    /**
     * Set nroIpr
     *
     * @param integer $nroIpr
     * @return TbIpr
     */
    public function setNroIpr($nroIpr)
    {
        $this->nroIpr = $nroIpr;

        return $this;
    }

    /**
     * Get nroIpr
     *
     * @return integer 
     */
    public function getNroIpr()
    {
        return $this->nroIpr;
    }

    /**
     * Get idIpr
     *
     * @return integer 
     */
    public function getIdIpr()
    {
        return $this->idIpr;
    }
}

<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbProyecto
 *
 * @ORM\Table(name="tb_proyecto")
 * @ORM\Entity
 */
class TbProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nro_proyecto", type="integer", nullable=false)
     */
    private $nroProyecto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_proyecto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProyecto;



    /**
     * Set nroProyecto
     *
     * @param integer $nroProyecto
     * @return TbProyecto
     */
    public function setNroProyecto($nroProyecto)
    {
        $this->nroProyecto = $nroProyecto;

        return $this;
    }

    /**
     * Get nroProyecto
     *
     * @return integer 
     */
    public function getNroProyecto()
    {
        return $this->nroProyecto;
    }

    /**
     * Get idProyecto
     *
     * @return integer 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}

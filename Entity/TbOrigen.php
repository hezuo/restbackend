<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrigen
 *
 * @ORM\Table(name="tb_origen")
 * @ORM\Entity
 */
class TbOrigen
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_origen", type="string", length=250, nullable=false)
     */
    private $descripcionOrigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_origen", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrigen;



    /**
     * Set descripcionOrigen
     *
     * @param string $descripcionOrigen
     * @return TbOrigen
     */
    public function setDescripcionOrigen($descripcionOrigen)
    {
        $this->descripcionOrigen = $descripcionOrigen;

        return $this;
    }

    /**
     * Get descripcionOrigen
     *
     * @return string 
     */
    public function getDescripcionOrigen()
    {
        return $this->descripcionOrigen;
    }

    /**
     * Get idOrigen
     *
     * @return integer 
     */
    public function getIdOrigen()
    {
        return $this->idOrigen;
    }
}

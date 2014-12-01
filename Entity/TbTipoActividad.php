<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbTipoActividad
 *
 * @ORM\Table(name="tb_tipo_actividad")
 * @ORM\Entity
 */
class TbTipoActividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_actividad", type="string", length=250, nullable=false)
     */
    private $descripcionActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_actividad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoActividad;



    /**
     * Set descripcionActividad
     *
     * @param string $descripcionActividad
     * @return TbTipoActividad
     */
    public function setDescripcionActividad($descripcionActividad)
    {
        $this->descripcionActividad = $descripcionActividad;

        return $this;
    }

    /**
     * Get descripcionActividad
     *
     * @return string 
     */
    public function getDescripcionActividad()
    {
        return $this->descripcionActividad;
    }

    /**
     * Get idTipoActividad
     *
     * @return integer 
     */
    public function getIdTipoActividad()
    {
        return $this->idTipoActividad;
    }
}

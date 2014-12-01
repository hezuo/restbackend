<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbActividad
 *
 * @ORM\Table(name="tb_actividad")
 * @ORM\Entity
 */
class TbActividad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_planificacion", type="integer", nullable=false)
     */
    private $idPlanificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_actividad", type="string", length=250, nullable=false)
     */
    private $descripcionActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_actividad", type="integer", nullable=false)
     */
    private $idTipoActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ipr", type="integer", nullable=false)
     */
    private $idIpr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_semana_actividad", type="date", nullable=false)
     */
    private $fechaSemanaActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_proyecto", type="integer", nullable=false)
     */
    private $idProyecto;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_lunes", type="integer", nullable=false)
     */
    private $hhPlanificadaLunes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_lunes", type="integer", nullable=false)
     */
    private $hhRealLunes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_martes", type="integer", nullable=false)
     */
    private $hhPlanificadaMartes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_martes", type="integer", nullable=false)
     */
    private $hhRealMartes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_miercoles", type="integer", nullable=false)
     */
    private $hhPlanificadaMiercoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_miercoles", type="integer", nullable=false)
     */
    private $hhRealMiercoles;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_jueves", type="integer", nullable=false)
     */
    private $hhPlanificadaJueves;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_jueves", type="integer", nullable=false)
     */
    private $hhRealJueves;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_viernes", type="integer", nullable=false)
     */
    private $hhPlanificadaViernes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_viernes", type="integer", nullable=false)
     */
    private $hhRealViernes;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_sabado", type="integer", nullable=false)
     */
    private $hhPlanificadaSabado;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_sabado", type="integer", nullable=false)
     */
    private $hhRealSabado;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_planificada_domingo", type="integer", nullable=false)
     */
    private $hhPlanificadaDomingo;

    /**
     * @var integer
     *
     * @ORM\Column(name="hh_real_domingo", type="integer", nullable=false)
     */
    private $hhRealDomingo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_origen", type="integer", nullable=false)
     */
    private $idOrigen;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_actividad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActividad;



    /**
     * Set idPlanificacion
     *
     * @param integer $idPlanificacion
     * @return TbActividad
     */
    public function setIdPlanificacion($idPlanificacion)
    {
        $this->idPlanificacion = $idPlanificacion;

        return $this;
    }

    /**
     * Get idPlanificacion
     *
     * @return integer 
     */
    public function getIdPlanificacion()
    {
        return $this->idPlanificacion;
    }

    /**
     * Set descripcionActividad
     *
     * @param string $descripcionActividad
     * @return TbActividad
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
     * Set idTipoActividad
     *
     * @param integer $idTipoActividad
     * @return TbActividad
     */
    public function setIdTipoActividad($idTipoActividad)
    {
        $this->idTipoActividad = $idTipoActividad;

        return $this;
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

    /**
     * Set idIpr
     *
     * @param integer $idIpr
     * @return TbActividad
     */
    public function setIdIpr($idIpr)
    {
        $this->idIpr = $idIpr;

        return $this;
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

    /**
     * Set fechaSemanaActividad
     *
     * @param \DateTime $fechaSemanaActividad
     * @return TbActividad
     */
    public function setFechaSemanaActividad($fechaSemanaActividad)
    {
        $this->fechaSemanaActividad = $fechaSemanaActividad;

        return $this;
    }

    /**
     * Get fechaSemanaActividad
     *
     * @return \DateTime 
     */
    public function getFechaSemanaActividad()
    {
        return $this->fechaSemanaActividad;
    }

    /**
     * Set idProyecto
     *
     * @param integer $idProyecto
     * @return TbActividad
     */
    public function setIdProyecto($idProyecto)
    {
        $this->idProyecto = $idProyecto;

        return $this;
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

    /**
     * Set hhPlanificadaLunes
     *
     * @param integer $hhPlanificadaLunes
     * @return TbActividad
     */
    public function setHhPlanificadaLunes($hhPlanificadaLunes)
    {
        $this->hhPlanificadaLunes = $hhPlanificadaLunes;

        return $this;
    }

    /**
     * Get hhPlanificadaLunes
     *
     * @return integer 
     */
    public function getHhPlanificadaLunes()
    {
        return $this->hhPlanificadaLunes;
    }

    /**
     * Set hhRealLunes
     *
     * @param integer $hhRealLunes
     * @return TbActividad
     */
    public function setHhRealLunes($hhRealLunes)
    {
        $this->hhRealLunes = $hhRealLunes;

        return $this;
    }

    /**
     * Get hhRealLunes
     *
     * @return integer 
     */
    public function getHhRealLunes()
    {
        return $this->hhRealLunes;
    }

    /**
     * Set hhPlanificadaMartes
     *
     * @param integer $hhPlanificadaMartes
     * @return TbActividad
     */
    public function setHhPlanificadaMartes($hhPlanificadaMartes)
    {
        $this->hhPlanificadaMartes = $hhPlanificadaMartes;

        return $this;
    }

    /**
     * Get hhPlanificadaMartes
     *
     * @return integer 
     */
    public function getHhPlanificadaMartes()
    {
        return $this->hhPlanificadaMartes;
    }

    /**
     * Set hhRealMartes
     *
     * @param integer $hhRealMartes
     * @return TbActividad
     */
    public function setHhRealMartes($hhRealMartes)
    {
        $this->hhRealMartes = $hhRealMartes;

        return $this;
    }

    /**
     * Get hhRealMartes
     *
     * @return integer 
     */
    public function getHhRealMartes()
    {
        return $this->hhRealMartes;
    }

    /**
     * Set hhPlanificadaMiercoles
     *
     * @param integer $hhPlanificadaMiercoles
     * @return TbActividad
     */
    public function setHhPlanificadaMiercoles($hhPlanificadaMiercoles)
    {
        $this->hhPlanificadaMiercoles = $hhPlanificadaMiercoles;

        return $this;
    }

    /**
     * Get hhPlanificadaMiercoles
     *
     * @return integer 
     */
    public function getHhPlanificadaMiercoles()
    {
        return $this->hhPlanificadaMiercoles;
    }

    /**
     * Set hhRealMiercoles
     *
     * @param integer $hhRealMiercoles
     * @return TbActividad
     */
    public function setHhRealMiercoles($hhRealMiercoles)
    {
        $this->hhRealMiercoles = $hhRealMiercoles;

        return $this;
    }

    /**
     * Get hhRealMiercoles
     *
     * @return integer 
     */
    public function getHhRealMiercoles()
    {
        return $this->hhRealMiercoles;
    }

    /**
     * Set hhPlanificadaJueves
     *
     * @param integer $hhPlanificadaJueves
     * @return TbActividad
     */
    public function setHhPlanificadaJueves($hhPlanificadaJueves)
    {
        $this->hhPlanificadaJueves = $hhPlanificadaJueves;

        return $this;
    }

    /**
     * Get hhPlanificadaJueves
     *
     * @return integer 
     */
    public function getHhPlanificadaJueves()
    {
        return $this->hhPlanificadaJueves;
    }

    /**
     * Set hhRealJueves
     *
     * @param integer $hhRealJueves
     * @return TbActividad
     */
    public function setHhRealJueves($hhRealJueves)
    {
        $this->hhRealJueves = $hhRealJueves;

        return $this;
    }

    /**
     * Get hhRealJueves
     *
     * @return integer 
     */
    public function getHhRealJueves()
    {
        return $this->hhRealJueves;
    }

    /**
     * Set hhPlanificadaViernes
     *
     * @param integer $hhPlanificadaViernes
     * @return TbActividad
     */
    public function setHhPlanificadaViernes($hhPlanificadaViernes)
    {
        $this->hhPlanificadaViernes = $hhPlanificadaViernes;

        return $this;
    }

    /**
     * Get hhPlanificadaViernes
     *
     * @return integer 
     */
    public function getHhPlanificadaViernes()
    {
        return $this->hhPlanificadaViernes;
    }

    /**
     * Set hhRealViernes
     *
     * @param integer $hhRealViernes
     * @return TbActividad
     */
    public function setHhRealViernes($hhRealViernes)
    {
        $this->hhRealViernes = $hhRealViernes;

        return $this;
    }

    /**
     * Get hhRealViernes
     *
     * @return integer 
     */
    public function getHhRealViernes()
    {
        return $this->hhRealViernes;
    }

    /**
     * Set hhPlanificadaSabado
     *
     * @param integer $hhPlanificadaSabado
     * @return TbActividad
     */
    public function setHhPlanificadaSabado($hhPlanificadaSabado)
    {
        $this->hhPlanificadaSabado = $hhPlanificadaSabado;

        return $this;
    }

    /**
     * Get hhPlanificadaSabado
     *
     * @return integer 
     */
    public function getHhPlanificadaSabado()
    {
        return $this->hhPlanificadaSabado;
    }

    /**
     * Set hhRealSabado
     *
     * @param integer $hhRealSabado
     * @return TbActividad
     */
    public function setHhRealSabado($hhRealSabado)
    {
        $this->hhRealSabado = $hhRealSabado;

        return $this;
    }

    /**
     * Get hhRealSabado
     *
     * @return integer 
     */
    public function getHhRealSabado()
    {
        return $this->hhRealSabado;
    }

    /**
     * Set hhPlanificadaDomingo
     *
     * @param integer $hhPlanificadaDomingo
     * @return TbActividad
     */
    public function setHhPlanificadaDomingo($hhPlanificadaDomingo)
    {
        $this->hhPlanificadaDomingo = $hhPlanificadaDomingo;

        return $this;
    }

    /**
     * Get hhPlanificadaDomingo
     *
     * @return integer 
     */
    public function getHhPlanificadaDomingo()
    {
        return $this->hhPlanificadaDomingo;
    }

    /**
     * Set hhRealDomingo
     *
     * @param integer $hhRealDomingo
     * @return TbActividad
     */
    public function setHhRealDomingo($hhRealDomingo)
    {
        $this->hhRealDomingo = $hhRealDomingo;

        return $this;
    }

    /**
     * Get hhRealDomingo
     *
     * @return integer 
     */
    public function getHhRealDomingo()
    {
        return $this->hhRealDomingo;
    }

    /**
     * Set idOrigen
     *
     * @param integer $idOrigen
     * @return TbActividad
     */
    public function setIdOrigen($idOrigen)
    {
        $this->idOrigen = $idOrigen;

        return $this;
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

    /**
     * Get idActividad
     *
     * @return integer 
     */
    public function getIdActividad()
    {
        return $this->idActividad;
    }
}

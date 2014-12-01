<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPlanificacion
 *
 * @ORM\Table(name="tb_planificacion")
 * @ORM\Entity
 */
class TbPlanificacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_coordinador", type="integer", nullable=false)
     */
    private $idUserCoordinador;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_colaborador", type="integer", nullable=false)
     */
    private $idUserColaborador;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_planificacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanificacion;



    /**
     * Set idUserCoordinador
     *
     * @param integer $idUserCoordinador
     * @return TbPlanificacion
     */
    public function setIdUserCoordinador($idUserCoordinador)
    {
        $this->idUserCoordinador = $idUserCoordinador;

        return $this;
    }

    /**
     * Get idUserCoordinador
     *
     * @return integer 
     */
    public function getIdUserCoordinador()
    {
        return $this->idUserCoordinador;
    }

    /**
     * Set idUserColaborador
     *
     * @param integer $idUserColaborador
     * @return TbPlanificacion
     */
    public function setIdUserColaborador($idUserColaborador)
    {
        $this->idUserColaborador = $idUserColaborador;

        return $this;
    }

    /**
     * Get idUserColaborador
     *
     * @return integer 
     */
    public function getIdUserColaborador()
    {
        return $this->idUserColaborador;
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
}

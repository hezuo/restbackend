<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbUser
 *
 * @ORM\Table(name="tb_user")
 * @ORM\Entity
 */
class TbUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="correo", type="string", length=255, nullable=false)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=100, nullable=false)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=100, nullable=false)
     */
    private $clave;

    /**
     * @var string
     *
     * @ORM\Column(name="cargo", type="string", length=100, nullable=false)
     */
    private $cargo;

    /**
     * @var integer
     *
     * @ORM\Column(name="cod_tipo", type="integer", nullable=false)
     */
    private $codTipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set correo
     *
     * @param string $correo
     * @return TbUser
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string 
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return TbUser
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     * @return TbUser
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string 
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set clave
     *
     * @param string $clave
     * @return TbUser
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string 
     */
    public function getClave()
    {
        return $this->clave;
    }

    /**
     * Set cargo
     *
     * @param string $cargo
     * @return TbUser
     */
    public function setCargo($cargo)
    {
        $this->cargo = $cargo;

        return $this;
    }

    /**
     * Get cargo
     *
     * @return string 
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    /**
     * Set codTipo
     *
     * @param integer $codTipo
     * @return TbUser
     */
    public function setCodTipo($codTipo)
    {
        $this->codTipo = $codTipo;

        return $this;
    }

    /**
     * Get codTipo
     *
     * @return integer 
     */
    public function getCodTipo()
    {
        return $this->codTipo;
    }

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

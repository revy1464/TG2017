<?php

namespace AppBundle\Entity;

/**
 * Modulos
 */
class Modulos
{
    /**
     * @var string
     */
    private $idmodulos;

    /**
     * @var string
     */
    private $nombreModulo;

    /**
     * @var string
     */
    private $descripcionModulo;


    /**
     * Get idmodulos
     *
     * @return string
     */
    public function getIdmodulos()
    {
        return $this->idmodulos;
    }

    /**
     * Set nombreModulo
     *
     * @param string $nombreModulo
     *
     * @return Modulos
     */
    public function setNombreModulo($nombreModulo)
    {
        $this->nombreModulo = $nombreModulo;

        return $this;
    }

    /**
     * Get nombreModulo
     *
     * @return string
     */
    public function getNombreModulo()
    {
        return $this->nombreModulo;
    }

    /**
     * Set descripcionModulo
     *
     * @param string $descripcionModulo
     *
     * @return Modulos
     */
    public function setDescripcionModulo($descripcionModulo)
    {
        $this->descripcionModulo = $descripcionModulo;

        return $this;
    }

    /**
     * Get descripcionModulo
     *
     * @return string
     */
    public function getDescripcionModulo()
    {
        return $this->descripcionModulo;
    }
}


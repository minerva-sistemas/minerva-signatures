<?php

namespace Minerva\Signatures\Signature;

/**
 * Assinatura de um objeto
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\Signatures\Signature
 */
class Signature
{
    /**
     * Nome da assinatura
     *
     * @var string
     */
    private $name;

    /**
     * Valor da assinatura
     *
     * @var mixed
     */
    private $value;

    /**
     * Retorna o nome da assinatura
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Define o nome da assinatura
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Retorna o valor da assinatura
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Define o valor da assinatura
     *
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
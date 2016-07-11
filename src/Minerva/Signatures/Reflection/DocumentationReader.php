<?php

namespace Minerva\Signatures\Reflection;

/**
 * Leitor de documentações de classes e propriedades
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\Signatures\Reflection
 */
class DocumentationReader
{
    /**
     * Retorna a documentação de uma classe ou propriedade.
     *
     * @param string $class
     * @param null $property
     * @return string
     */
    public static function getDoc($class, $property = null)
    {
        if(!is_null($property))
            return self::getPropertyDoc($class, $property);

        return self::getClassDoc($class);
    }

    /**
     * Retorna a documentação de classe
     *
     * @param $class
     * @return string
     */
    private static function getClassDoc($class)
    {
        $reflection = new \ReflectionClass($class);
        return $reflection->getDocComment();
    }
    /**
     * Retorna a documentação da propriedade.
     *
     * @param $class
     * @param $property
     * @return string
     */
    private static function getPropertyDoc($class, $property)
    {
        $reflection = new \ReflectionProperty($class, $property);
        return $reflection->getDocComment();
    }
}
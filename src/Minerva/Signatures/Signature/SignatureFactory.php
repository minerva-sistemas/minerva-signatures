<?php

namespace Minerva\Signatures\Signature;

/**
 * Fábrica de assinaturas
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\Signatures\Signature
 */
class SignatureFactory
{
    /**
     * Cria uma assinatura a partir de um nome e valor
     *
     * @param string $name Nome da assinatura
     * @param mixed $value Valor da assinatura
     * @return Signature
     */
    public static function signature($name, $value)
    {
        $signature = new Signature();
        $signature->setName($name);
        $signature->setValue($value);

        return $signature;
    }

    /**
     * Cria um dicionário de assinaturas a partir de uma array
     *
     * @param array $signatures
     * @return SignatureDictionary
     */
    public static function dictionary(array $signatures)
    {
        $dictionary = new SignatureDictionary();
        
        foreach($signatures as $name => $value){
            $signature = self::signature($name, $value);
            $dictionary->add($name, $signature);
        }

        return $dictionary;
    }
}
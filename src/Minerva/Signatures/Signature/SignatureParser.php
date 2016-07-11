<?php

namespace Minerva\Signatures\Signature;

use Minerva\Signatures\Reflection\DocumentationReader;

/**
 * Analisador de documentações
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\Reflection
 */
class SignatureParser
{
    /**
     * Retorna um dicionário para um objeto ou propriedade
     *
     * Se apenas o primeiro parâmetro estiver preenchido, será montado um dicionário
     * com as assinaturas da classe, caso contário, será montado um dicionário com as
     * assinaturas da propriedade definida.
     *
     * @param $object
     * @param null|string $property
     * @param string $tag
     * @return SignatureDictionary
     */
    public static function getDictionary($object, $property = null, $tag = '@configure')
    {
        $documentation = DocumentationReader::getDoc($object, $property);
        $jsonArray = self::getJsonArray($documentation, $tag);
        $signaturesArray = self::compile($jsonArray);

        $signatureDictionary = SignatureFactory::dictionary($signaturesArray);

        return $signatureDictionary;
    }

    /**
     * Retorna array com os jsons de configuração
     *
     * @param $documentation
     * @param $tag
     * @return array
     */
    private static function getJsonArray($documentation, $tag)
    {
        $regex = "/{$tag} (.*?)\n/";
        preg_match_all($regex, $documentation, $matches);
        return $matches[1];
    }

    /**
     * Junta todas configurações em uma array
     *
     * @param array $config
     * @return array
     */
    private static function compile(array $config)
    {
        $fullConfig = [];
        foreach ($config as $json) {
            $jsonConfig = (array)json_decode($json);
            $fullConfig = array_merge($fullConfig, $jsonConfig);
        }
        return $fullConfig;
    }
}
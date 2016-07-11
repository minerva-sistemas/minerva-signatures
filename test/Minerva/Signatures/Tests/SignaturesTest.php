<?php

namespace Minerva\Signatures\Tests;

use Minerva\Signatures\Signature\SignatureParser;

/**
 * Class SignaturesTest
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\Signatures\Tests
 */
class SignaturesTest extends \PHPUnit_Framework_TestCase
{
    public function testSomeBullShit()
    {
        $car = new Car();

        $dictionary = SignatureParser::getDictionary($car);
        var_dump($dictionary);
    }
}
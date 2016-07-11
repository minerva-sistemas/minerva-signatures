<?php

namespace Minerva\Signatures\Tests;

use Minerva\Signatures\Signature\Signature;
use Minerva\Signatures\Signature\SignatureParser;

/**
 * Class SignaturesTest
 *
 * @author  Lucas A. de Araújo <lucas@minervasistemas.com.br>
 * @package Minerva\Signatures\Tests
 */
class SignaturesTest extends \PHPUnit_Framework_TestCase
{
    public function testClassSignatureReading()
    {
        $car = new Car();
        $configuration = SignatureParser::getDictionary($car, null, '@configure');

        /** @var Signature $brand */
        $brand = $configuration->get('brand');

        $this->assertEquals($brand->getValue(), 'Chevrolet');
        $this->assertEquals($brand->getName(),  'brand');
    }

    public function testPropertySignatureReading()
    {
        $car = new Car();
        $configuration = SignatureParser::getDictionary($car, 'engine', '@configure');

        /** @var Signature $brand */
        $brand = $configuration->get('cc');

        $this->assertEquals($brand->getValue(), '5.0');
        $this->assertEquals($brand->getName(),  'cc');
    }
}
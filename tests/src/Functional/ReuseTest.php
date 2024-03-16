<?php

/*
 * This file is part of the SOAPGenerator package.
 * (c) SOAPGenerator.
 */

namespace SOAPGenerator\Tests\Functional;

use SOAPGenerator\Config;

/**
 * Test case to ensure that we can use same Generator instance multiple times.
 */
class ReuseTest extends FunctionalTestCase
{
    protected $CurrencyConvertorClassesList = [
        'ConversionRate',
        'ConversionRateResponse',
        'Currency',
    ];

    protected function getWsdlPath()
    {
        // Source: http://www.webservicex.net/CurrencyConvertor.asmx?WSDL.
        return $this->fixtureDir.'/currencyconvertor/CurrencyConvertor.wsdl';
    }

    protected function assertPreConditions(): void
    {
        $this->assertInstanceOf('SOAPGenerator\Generator', $this->generator);

        foreach ($this->CurrencyConvertorClassesList as $class) {
            $this->assertGeneratedClassExists($class);
        }
    }

    public function testReuse()
    {
        $outputDir = $this->outputDir.DIRECTORY_SEPARATOR.'SecondRun';
        $inputFile = $this->fixtureDir.'/abstract/abstract.wsdl';

        $config = new Config([
            'inputFile' => $inputFile,
            'outputDir' => $outputDir,
        ]);

        // Generate the code for second WSDL.
        $this->generator->generate($config);

        // Register the autoloader.
        require_once $outputDir.DIRECTORY_SEPARATOR.'autoload.php';

        foreach ($this->CurrencyConvertorClassesList as $class) {
            $this->assertGeneratedFileNotExists('SecondRun'.DIRECTORY_SEPARATOR.$class.'.php');
        }
    }

    protected function assertGeneratedFileNotExists($filename, $message = '')
    {
        $this->assertFileNotExists($this->outputDir.DIRECTORY_SEPARATOR.$filename, $message);
    }
}

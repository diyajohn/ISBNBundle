<?php

namespace TestDemo\ISBNBundle\Tests\Services;

use TestDemo\ISBNBundle\Services\ISBNService;

class ISBNServiceTest extends \PHPUnit_Framework_TestCase
{
    private $ISBNObject;

    public function setUp()
    {
        $this->ISBNObject = new ISBNService();
    }

    /**
     * @covers TestDemo\ISBNBundle\Services\ISBNService::isValidISBN
     */
    public function testIsValidISBNInvalid()
    {
        $isbn = '9-1234-5678-9';
        $this->assertFalse($this->ISBNObject->isValidISBN($isbn));
    }

    /**
     * @covers TestDemo\ISBNBundle\Services\ISBNService::isValidISBN
     */
    public function testIsValidISBNValid()
    {
        $isbn = '0-7475-3269-9';
        $this->assertTrue($this->ISBNObject->isValidISBN($isbn));
    }

    /**
     * @covers TestDemo\ISBNBundle\Services\ISBNService::generateISBN
     */
    public function testGenerateISBN()
    {
        $isbn = $this->ISBNObject->generateISBN();
        $this->assertTrue($this->ISBNObject->isValidISBN($isbn));
    }
}
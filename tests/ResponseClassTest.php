<?php
// @codingStandardsIgnoreFile

namespace Jnjxp\HttpStatus;

use Zend\Diactoros\Response;

class ResponseClassTest extends \PHPUnit_Framework_TestCase
{

    protected $responseClass;

    protected $codes = [
        100 => ResponseClass::INFORMATIONAL,
        200 => ResponseClass::SUCCESS,
        300 => ResponseClass::REDIRECTION,
        400 => ResponseClass::CLIENT_ERROR,
        500 => ResponseClass::SERVER_ERROR,
    ];

    public function setUp()
    {
        $this->responseClass = new ResponseClass();
    }

    protected function getRandomStatus($prefix)
    {
        $min = $prefix * 100;
        $max = $min + 99;
        return rand($min, $max);
    }

    public function statusProvider()
    {
        $statuses = [];
        foreach ($this->codes as $prefix => $class) {
            for ($code = $prefix; $code < $prefix + 100; $code ++) {
                $statuses[] = [$code, $class];
                $statuses[] = [
                    (new Response)->withStatus($code),
                    $class
                ];
            }
        }
        return $statuses;
    }

    /**
     * @dataProvider statusProvider
     */
    public function testGetClass($code, $class)
    {
        $this->assertEquals($class, $this->responseClass->getClass($code));
    }

    public function testInvalidClass()
    {
        $this->setExpectedException(Exception::class);
        $this->responseClass->getClass(999);
    }

    /**
     * @dataProvider statusProvider
     */
    public function testIs($code, $class)
    {
        $methods = [
            ResponseClass::INFORMATIONAL => 'isInformational',
            ResponseClass::SUCCESS       => 'isSuccess',
            ResponseClass::REDIRECTION   => 'isRedirection',
            ResponseClass::CLIENT_ERROR  => 'isClientError',
            ResponseClass::SERVER_ERROR  => 'isServerError',
        ];

        foreach ($methods as $true => $method) {
            $result = call_user_func([$this->responseClass, $method], $code);
            if ($class == $true) {
                $this->assertTrue($result);
            } else {
                $this->assertFalse($result);
            }
        }
    }
}

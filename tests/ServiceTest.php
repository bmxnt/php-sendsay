<?php

namespace Sendsay\Tests;

use Sendsay\Service;

class ServiceTest extends BaseTestCase
{
    /** @var Service */
    private $service;

    protected function setUp()
    {
        parent::setUp();

        $options = [
            'login' => '',
            'password' => '',
            'log.enabled' => false
        ];

        $this->service = new Service($options);
    }

    public function testGetUser()
    {
        $expected = null;
        $actual = $this->service->getUser('blablabla@gmail.com');
        $this->assertEquals($expected, $actual);
    }
}
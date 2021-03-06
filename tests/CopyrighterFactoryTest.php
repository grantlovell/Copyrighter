<?php

use Copyrighter\CopyrighterFactory;

class CopyrighterFactoryTest extends PHPUnit_Framework_TestCase
{

    public function test_it_returns_an_instance_of_copyrighter()
    {
        $copyrighter = CopyrighterFactory::create();
        $this->assertInstanceOf('Copyrighter\\Copyrighter', $copyrighter);
    }

    public function test_it_throws_exception_for_bad_configuration()
    {
        $this->setExpectedException('Copyrighter\Exceptions\InvalidConfigurationException');
        CopyrighterFactory::create([ 'foo' => 'bar' ]);
    }

} 
<?php

namespace Dhii\Transformer\UnitTest;

use Dhii\Transformer\TransformerFactoryInterface as Subject;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Tests {@see Subject}.
 */
class TransformerFactoryInterfaceTest extends TestCase
{
    /**
     * Creates a new instance of the test subject.
     *
     * @param array $methods The methods to mock.
     *
     * @return MockObject|Subject The new instance.
     */
    public function createInstance($methods = array())
    {
        $mock = $this->getMockBuilder(Subject::class)
            ->onlyMethods($methods)
            ->getMock();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(Subject::class, $subject, 'A valid instance of the test subject could not be created.');
    }
}

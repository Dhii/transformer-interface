<?php

namespace Dhii\Transformer\UnitTest\Exception;

use Dhii\Transformer\Exception\CouldNotTransformExceptionInterface as Subject;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * Tests {@see Subject}.
 */
class CouldNotTransformExceptionInterfaceTest extends TestCase
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
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(Subject::class, $subject, 'A valid instance of the test subject could not be created.');
    }
}

<?php

namespace Dhii\Transformer\UnitTest\Exception;

use Dhii\Transformer\Exception\TransformerExceptionInterface as Subject;
use Dhii\Transformer\TransformerAwareInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Throwable;

/**
 * Tests {@see Subject}.
 */
class TransformerExceptionInterfaceTest extends TestCase
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
        $this->assertInstanceOf(Throwable::class, $subject, 'Subject does not implement required interface');
        $this->assertInstanceOf(TransformerAwareInterface::class, $subject, 'Subject does not implement required interface');
    }
}

<?php

namespace Dhii\Util\FuncTest;

use Dhii\Util\ConfigAwareTrait;
use Xpmock\TestCase;

/**
 * Tests {@see Dhii\Util\ConfigAwareTrait}.
 *
 * @since [*next-version*]
 */
class ConfigAwareTraitTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'Dhii\\Util\\ConfigAwareTrait';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ConfigAwareTrait
     */
    public function createInstance()
    {
        return $this->getMockForTrait(static::TEST_SUBJECT_CLASSNAME);
    }

    /**
     * Tests the config getter and setter methods.
     *
     * @since [*next-version*]
     */
    public function testGetSetConfig()
    {
        $subject = $this->createInstance();
        $reflect = $this->reflect($subject);

        $reflect->_setConfig($config = array('test' => 'this', 'foo' => 'bar'));

        $this->assertEquals($config, $reflect->_getConfig());
    }
}

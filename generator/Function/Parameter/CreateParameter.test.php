<?php

namespace WpService\Generator\Function\Parameter;

use PHPUnit\Framework\TestCase;

class CreateParameterTest extends TestCase
{
    /**
     * @testdox Test if the CreateParameter class has the correct properties
     */
    public function testCreateParameter(): void
    {
        $parameter = CreateParameter::create('string', 'name', '[]');
        $this->assertEquals('string', $parameter->getType());
        $this->assertEquals('name', $parameter->getName());
        $this->assertEquals('[]', $parameter->getDefault());
    }
}
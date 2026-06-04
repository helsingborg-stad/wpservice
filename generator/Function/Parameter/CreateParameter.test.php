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
        $parameter = CreateParameter::create('string', 'name', true, false, '[]');
        $this->assertEquals('string', $parameter->getType());
        $this->assertEquals('name', $parameter->getName());
        $this->assertTrue($parameter->isSpread());
        $this->assertEquals('[]', $parameter->getDefault());
    }

    /**
     * @testdox Implicit nullable is made explicit when default is null (PHP 8.4 compat)
     */
    public function testImplicitNullableBecomesExplicit(): void
    {
        $parameter = CreateParameter::create('string', 'foo', false, false, 'null');
        $this->assertStringContainsString('string|null', (string) $parameter);
    }

    /**
     * @testdox Union types also get |null appended when default is null
     */
    public function testUnionTypeGetsNullAppended(): void
    {
        $parameter = CreateParameter::create('int|\WP_Post', 'post', false, false, 'null');
        $this->assertStringContainsString('int|\WP_Post|null', (string) $parameter);
    }

    /**
     * @testdox Already-nullable union type is not double-nulled
     */
    public function testAlreadyNullableUnionIsNotModified(): void
    {
        $parameter = CreateParameter::create('int|null', 'post', false, false, 'null');
        $this->assertStringNotContainsString('null|null', (string) $parameter);
        $this->assertStringContainsString('int|null', (string) $parameter);
    }

    /**
     * @testdox Non-null default does not add |null to type
     */
    public function testNonNullDefaultDoesNotAddNullable(): void
    {
        $parameter = CreateParameter::create('string', 'foo', false, false, "'bar'");
        $this->assertStringNotContainsString('null', (string) $parameter);
    }
}

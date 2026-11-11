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
     * @dataProvider nullableParameterProvider
     */
    public function testStringRepresentationUsesExplicitNullability(string $type, ?string $default, string $expected): void
    {
        $parameter = CreateParameter::create($type, 'value', false, false, $default);
        $this->assertSame($expected, (string) $parameter);
    }

    public function nullableParameterProvider(): array
    {
        return [
            ['string', 'null', '?string $value = null'],
            ['\\WP_Post', 'NULL', '?\\WP_Post $value = NULL'],
            ['int|\\WP_Post', 'null', 'int|\\WP_Post|null $value = null'],
            ['int|null', 'null', 'int|null $value = null'],
            ['?string', 'null', '?string $value = null'],
            ['mixed', 'null', 'mixed $value = null'],
            ['', 'null', '$value = null'],
            ['string', "'null'", "string \$value = 'null'"],
            ['string', null, 'string $value'],
        ];
    }

    public function testNullableParameterPassedByReference(): void
    {
        $parameter = CreateParameter::create('array', 'value', false, true, 'null');
        $this->assertSame('?array &$value = null', (string) $parameter);
    }
}

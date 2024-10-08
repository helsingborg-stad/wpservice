<?php

namespace WpService\Generator\Function;

use WpService\Generator\Function\Parameter\ParameterInterface;
use PHPUnit\Framework\TestCase;
use SebastianBergmann\Type\Parameter;

class FunctionWithNamespacedTypesTest extends TestCase
{
    /**
     * @testdox Class exists
     */
    public function testClassExists()
    {
        $this->assertTrue(class_exists(\WpService\Generator\Function\FunctionWithNamespacedTypes::class));
    }

    /**
     * @testdox getReturnType(): Non built-in types are namespaced
     */
    public function testNonBuiltInTypesAreNamespaced()
    {
        $inner    = $this->getInnerFake(['returnType' => 'int|WP_Post']);
        $function = new \WpService\Generator\Function\FunctionWithNamespacedTypes($inner);

        $this->assertEquals('int|\WP_Post', $function->getReturnType());
    }

    /**
     * @testdox getParameters(): Non built-in types are namespaced
     */
    public function testNonBuiltInTypesAreNamespacedInParameters()
    {
        $parameter = $this->getFakeParameter();
        $parameter->setType('int|WP_Post');

        $inner    = $this->getInnerFake([ 'parameters' => [$parameter] ]);
        $function = new \WpService\Generator\Function\FunctionWithNamespacedTypes($inner);

        $parameters = $function->getParameters();
        $this->assertEquals('int|\WP_Post', $parameters[0]->getType());
    }

    /**
     * @testdox getDocBlock(): Non built-in types are namespaced
     */
    public function testNonBuiltInTypesAreNamespacedInDocBlock()
    {
        $innerParameter = $this->getFakeParameter();
        $innerParameter->setType('int|WP_Post');
        $inner    = $this->getInnerFake(['docBlock' => '@param int|WP_Post $post', 'parameters' => [$innerParameter]]);
        $function = new \WpService\Generator\Function\FunctionWithNamespacedTypes($inner);

        $this->assertEquals('@param int|\WP_Post $post', $function->getDocBlock());
    }

    /**
     * @testdox getDocBlock(): Non built-in types are namespaced in @return of doc block
     */
    public function testNonBuiltInTypesAreNamespacedInReturnOfDocBlock()
    {
        $inner    = $this->getInnerFake(['docBlock' => '@return int|WP_Post', 'returnType' => 'int|WP_Post']);
        $function = new \WpService\Generator\Function\FunctionWithNamespacedTypes($inner);

        $this->assertEquals('@return int|\WP_Post', $function->getDocBlock());
    }

    private function getFakeParameter(): ParameterInterface
    {
        return new class implements ParameterInterface {
            private string $type;
            private string $name;

            public function getType(): string
            {
                return $this->type;
            }

            public function getName(): string
            {
                return $this->name;
            }

            public function setName(string $name): void
            {
                $this->name = $name;
            }

            public function setType(string $type): void
            {
                $this->type = $type;
            }

            public function getDefault(): ?string
            {
                return null;
            }
        };
    }

    private function getInnerFake(array $data = []): FunctionInterface
    {
        return new class ($data) implements FunctionInterface {
            public function __construct(private array $data)
            {
            }
            public function getName(): string
            {
                return $this->data['name'] ?? '';
            }

            public function getDocBlock(): string
            {
                return $this->data['docBlock'] ?? '';
            }

            public function getFunctionBody(): string
            {
                return $this->data['functionBody'] ?? '';
            }

            public function getOriginalName(): string
            {
                return $this->data['originalName'] ?? '';
            }

            public function getParameters(): array
            {
                return $this->data['parameters'] ?? [];
            }

            public function getReturnType(): string
            {
                return $this->data['returnType'] ?? '';
            }
        };
    }
}

<?php

namespace WpService\Generator\Function;

use PhpParser\Node\Stmt\Function_;
use PHPUnit\Framework\TestCase;
use StubsGenerator\StubsGenerator;

class CreateFunctionTest extends TestCase
{
    /**
     * @testdox Test getName() returns name of function
     */
    public function testGetName()
    {
        $stub     = $this->getStubStatementForFunction('takesStringAndReturnsString');
        $function = CreateFunction::create($stub);
        $this->assertEquals('takesStringAndReturnsString', $function->getName());
    }

    /**
     * @testdox params contains all parameters, return types and default values
     */
    public function testGetParameters()
    {
        $stub     = $this->getStubStatementForFunction('takesStringAndReturnsString');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertCount(1, $params);
        $this->assertEquals('string', $params[0]->getType());
        $this->assertEquals('foo', $params[0]->getName());
        $this->assertEquals("'bar'", $params[0]->getDefault());
    }

    /**
     * @testdox params can have return type bool
     */
    public function testGetParametersWithBoolReturnType()
    {
        $stub     = $this->getStubStatementForFunction('booleanDefaultInput');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertCount(1, $params);
        $this->assertEquals('bool', $params[0]->getType());
        $this->assertEquals('foo', $params[0]->getName());
        $this->assertEquals('true', $params[0]->getDefault());
    }

    /**
     * @testdox params can have return type int
     */
    public function testGetParametersWithIntReturnType()
    {
        $stub     = $this->getStubStatementForFunction('intDefaultInput');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertCount(1, $params);
        $this->assertEquals('int', $params[0]->getType());
        $this->assertEquals('foo', $params[0]->getName());
        $this->assertEquals('10', $params[0]->getDefault());
    }

    /**
     * @testdox params can have return type []
     */
    public function testGetParametersWithArrayReturnType()
    {
        $stub     = $this->getStubStatementForFunction('arrayDefaultInput');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertCount(1, $params);
        $this->assertEquals('array', $params[0]->getType());
        $this->assertEquals('foo', $params[0]->getName());
        $this->assertEquals('[]', $params[0]->getDefault());
    }

    private function getStubStatementForFunction(string $functionName): Function_
    {
        $generator = new StubsGenerator(StubsGenerator::FUNCTIONS);
        $finder    = \StubsGenerator\Finder::create()->in(dirname(__FILE__) . '/../../testFunctions');
        $filtered  = array_filter($generator->generate($finder)->getStubStmts(), fn($stmt) => $stmt->name->name === $functionName);
        return reset($filtered);
    }
}

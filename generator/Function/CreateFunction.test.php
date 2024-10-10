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

    /**
     * @testdox params can be defined like @param mixed ...$args.
     */
    public function testGetParametersWithMixedArgs()
    {
        $stub     = $this->getStubStatementForFunction('spreadParameters');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertCount(2, $params);
        $this->assertEquals('string', $params[0]->getType());
        $this->assertEquals('foo', $params[0]->getName());

        $this->assertEquals('mixed', $params[1]->getType());
        $this->assertEquals('bar', $params[1]->getName());
        $this->assertTrue($params[1]->isSpread());
    }

    /**
     * @testdox fallback reads param type from docblock
     */
    public function testGetParametersWithDocBlockType()
    {
        $stub     = $this->getStubStatementForFunction('typesOnlyInDocBlock');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertEquals('string', $params[0]->getType());
        $this->assertEquals('foo', $params[0]->getName());

        $this->assertEquals('int', $params[1]->getType());
        $this->assertEquals('bar', $params[1]->getName());

        $this->assertEquals('int', $params[2]->getType());
        $this->assertEquals('baz_qux', $params[2]->getName());

        $this->assertEquals('int', $params[3]->getType());
        $this->assertEquals('quuxCorge', $params[3]->getName());
    }

    /**
     * @testdox parameters passed by reference are marked as such
     */
    public function testGetParametersByReference()
    {
        $stub     = $this->getStubStatementForFunction('parameterPassedByReference');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertEquals('foo', $params[0]->getName());
        $this->assertTrue($params[0]->isByReference());
    }

    /**
     * @testdox parameter type WP_Post[] is converted to 'array'
     */
    public function testGetParametersWithWpPostArray()
    {
        $stub     = $this->getStubStatementForFunction('parameterPassedByReference');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertEquals('foo', $params[0]->getName());
        $this->assertEquals('array', $params[0]->getType());
    }

    /**
     * @testdox function plugin_dir_path() param $file has type string
     */
    public function testGetParametersWithDocBlockTypeFromPluginDirPath()
    {
        $stub     = $this->getStubStatementForFunction('pluginDirPath');
        $function = CreateFunction::create($stub);

        $params = $function->getParameters();

        $this->assertEquals('string', $params[0]->getType());
        $this->assertEquals('file', $params[0]->getName());
    }

    private function getStubStatementForFunction(string $functionName): Function_
    {
        $generator = new StubsGenerator(StubsGenerator::FUNCTIONS);
        $finder    = \StubsGenerator\Finder::create()->in(dirname(__FILE__) . '/../../testFunctions');
        $filtered  = array_filter($generator->generate($finder)->getStubStmts(), fn($stmt) => $stmt->name->name === $functionName);
        return reset($filtered);
    }
}

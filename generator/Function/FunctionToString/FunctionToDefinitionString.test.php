<?php

namespace WpService\Generator\Function\FunctionToString;

use PHPUnit\Framework\TestCase;
use WpService\Generator\Function\FunctionInterface;
use WpService\Generator\Function\Parameter\ParameterInterface;

class FunctionToDefinitionStringTest extends TestCase {

    /**
     * @testdox Applies spread operator to parameter
     */
    public function testFunctionToStringWithSpreadOperator() {
        $parameter = $this->getMockBuilder(ParameterInterface::class)->getMock();
        $parameter->method('getType')->willReturn('mixed');
        $parameter->method('getName')->willReturn('foo');
        $parameter->method('isSpread')->willReturn(true);
        $parameter->method('getDefault')->willReturn(null);

        /** 
         * @var FunctionInterface|\PHPUnit\Framework\MockObject\MockObject $function
         */
        $function = $this->getMockBuilder(FunctionInterface::class)->getMock();
        $function->method('getName')->willReturn('testFunction');
        $function->method('getReturnType')->willReturn('void');
        $function->method('getDocBlock')->willReturn('');
        $function->method('getParameters')->willReturn([$parameter]);

        $functionToString = new FunctionToDefinitionString();

        $this->assertEquals("public function testFunction(mixed ...\$foo): void;", $functionToString->functionToString($function));
    }
}
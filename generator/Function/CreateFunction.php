<?php

namespace WpService\Generator\Function;

use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\ConstFetch;
use PhpParser\Node\Scalar\LNumber;
use PhpParser\Node\Scalar\String_;
use WpService\Generator\Function\Parameter\CreateParameter;
use PhpParser\Node\Stmt\Function_;

class CreateFunction implements FunctionInterface
{
    private function __construct(
        private string $name,
        private string $returnType,
        private array $params,
        private string $docblock
    ) {}

    public function getOriginalName(): string
    {
        return $this->name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getReturnType(): string
    {
        return $this->returnType;
    }

    public function getParameters(): array
    {
        return $this->params;
    }

    public function getDocBlock(): string
    {
        return $this->docblock;
    }

    public function getFunctionBody(): string
    {
        return '';
    }

    /**
     * @param Function_ $function_
     * @param ParameterDecoratorInterface[] $parameterDecorators
     */
    public static function create(Function_ $function_, array $parameterDecorators = []): FunctionInterface
    {
        $params   = [];
        $docblock = $function_->getDocComment()?->getText() ?? '';
        preg_match('/@return\s+([^\s]+)/', $docblock, $matches);

        $name       = $function_->name->name;
        $returnType = $matches[1] ?? 'void';

        foreach ($function_->params as $param) {

            $paramName = $param->var->name;
            $paramType = isset($param->type, $param->type->name)
                ? $param->type->name
                : self::getParamTypeFromDocBlock($paramName, $docblock);

            $params[] = CreateParameter::create(
                $paramType,
                $param->var->name,
                $param->variadic,
                self::getParamDefaultValue($param)
            );
        }

        /**
         * Apply decorators to parameters
         */
        $params = array_map(function ($param) use ($parameterDecorators) {
            foreach ($parameterDecorators as $decorator) {
                $param = $decorator->apply($param);
            }
            return $param;
        }, $params);

        return new self($name, $returnType, $params, $docblock);
    }

    private static function getParamTypeFromDocBlock(string $paramName, string $docblock): string
    {
        $re = '/@param\s(.+)\$(.+)\s/m';
        preg_match_all($re, $docblock, $matches, PREG_SET_ORDER, 0);

        foreach ($matches as $match) {
            if ($match[2] === $paramName) {
                return trim($match[1]);
            }
        }

        return 'mixed';
    }

    private static function getParamDefaultValue(\PhpParser\Node\Param $param): ?string
    {
        if (isset($param->default)) {
            if ($param->default instanceof String_) {
                return "'{$param->default->value}'";
            } elseif ($param->default instanceof ConstFetch) {
                return $param->default->name->parts[0];
            } elseif ($param->default instanceof LNumber) {
                return $param->default->value;
            } elseif ($param->default instanceof Array_) {
                return '[]';
            }
        }
        
        return null;
    }
}

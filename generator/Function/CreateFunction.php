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
    ) {
    }

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

        // Get input params and their types from docblock
        preg_match_all('/@param\s+([^\s]+)\s+\$([^\s]+)/', $docblock, $matches, PREG_SET_ORDER);

        foreach ($matches as $match) {
            // Find default value of parameter in the function declaration
            $default = null;


            foreach ($function_->params as $param) {
                $default = null;

                if ($param->var->name === $match[2]) {
                    if (isset($param->default)) {
                        if ($param->default instanceof String_) {
                            $default = "'{$param->default->value}'";
                        } elseif ($param->default instanceof ConstFetch) {
                            $default = $param->default->name->parts[0];
                        } elseif ($param->default instanceof LNumber) {
                            $default = $param->default->value;
                        } elseif ($param->default instanceof Array_) {
                            $default = '[]';
                        }
                    }

                    break;
                }
            }

            $params[] = CreateParameter::create($match[1], $match[2], $default ?? null);
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
}

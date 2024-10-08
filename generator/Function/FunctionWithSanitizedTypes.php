<?php

namespace WpService\Generator\Function;

class FunctionWithSanitizedTypes implements FunctionInterface
{
    private const MAP = [
        'Integer'    => 'int',
        'integer'    => 'int',
        'String'     => 'string',
        'Array'      => 'array',
        'Boolean'    => 'bool',
        'boolean'    => 'bool',
        'bool|false' => 'bool'
    ];

    private const CONTAINS_REDUNDANT = [
        ['bool' => ['bool', 'false']],
        ['bool' => ['bool', 'true']],
        ['object' => ['object','WP_Error']],
        ['object' => ['object','WP_Term']],
        ['object' => ['object','WP_Post']],
        ['object' => ['object','WP_Post_Type']],
        ['object' => ['object','WP_User']],
    ];

    private const CONTAINS_STANDALONE = [
        'mixed' => 'mixed'
    ];

    public function __construct(
        private FunctionInterface $inner
    ) {
    }

    public function getOriginalName(): string
    {
        return $this->inner->getOriginalName();
    }

    public function getName(): string
    {
        return $this->inner->getName();
    }

    public function getReturnType(): string
    {
        return $this->sanitizeType($this->inner->getReturnType());
    }

    public function getParameters(): array
    {
        $params = $this->inner->getParameters();

        foreach ($params as $index => $param) {
            $params[$index]->setType($this->sanitizeType($param->getType()));
        }

        return $params;
    }

    private function sanitizeType(string $type): string
    {
        foreach (self::CONTAINS_STANDALONE as $standalone) {
            if (str_contains($type, $standalone)) {
                return $standalone;
            }
        }

        $asArray = explode('|', $type);
        $asArray = array_map(fn($item) => trim($item), $asArray);
        $asArray = array_map(fn($item) => ltrim($item, '\\'), $asArray);
        $asArray = array_map(fn($item) => isset(self::MAP[$item]) ? self::MAP[$item] : $item, $asArray);

        foreach (self::CONTAINS_REDUNDANT as $redundant) {
            foreach ($redundant as $key => $values) {
                if (in_array($values[0], $asArray) && in_array($values[1], $asArray)) {
                    $asArray   = array_filter($asArray, fn($item) => !in_array($item, $values));
                    $asArray[] = $key;
                }
            }
        }


        return implode('|', $asArray);
    }

    public function getDocBlock(): string
    {
        return $this->inner->getDocBlock();
    }

    public function getFunctionBody(): string
    {
        return $this->inner->getFunctionBody();
    }
}

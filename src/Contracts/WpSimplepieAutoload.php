<?php

namespace WpService\Contracts;

interface WpSimplepieAutoload
{
    /**
     * WordPress autoloader for SimplePie.
     *
     * @since 3.5.0
     *
     * @param string $class Class name.
     */
    public function wpSimplepieAutoload(string $class): void;
}

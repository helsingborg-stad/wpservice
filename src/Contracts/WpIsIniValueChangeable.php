<?php

namespace WpService\Contracts;

interface WpIsIniValueChangeable
{
    /**
     * Determines whether a PHP ini value is changeable at runtime.
     *
     * @since 4.6.0
     *
     * @link https://www.php.net/manual/en/function.ini-get-all.php
     *
     * @param string $setting The name of the ini setting to check.
     * @return bool True if the value is changeable at runtime. False otherwise.
     */
    public function wpIsIniValueChangeable(string $setting): bool;
}

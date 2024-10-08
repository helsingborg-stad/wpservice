<?php

namespace WpService\Contracts;

interface MuDropdownLanguages
{
    /**
     * Generates and displays a drop-down of available languages.
     *
     * @since 3.0.0
     *
     * @param string[] $langFiles Optional. An array of the language files. Default empty array.
     * @param string $current    Optional. The current language code. Default empty.
     */
    public function muDropdownLanguages(array $langFiles = [], string $current = ''): void;
}

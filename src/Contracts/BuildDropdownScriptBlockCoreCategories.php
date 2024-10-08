<?php

namespace WpService\Contracts;

interface BuildDropdownScriptBlockCoreCategories
{
    /**
     * Generates the inline script for a categories dropdown field.
     *
     * @since 5.0.0
     *
     * @param string $dropdownId ID of the dropdown field.
     *
     * @return string Returns the dropdown onChange redirection script.
     */
    public function buildDropdownScriptBlockCoreCategories(string $dropdownId): string;
}

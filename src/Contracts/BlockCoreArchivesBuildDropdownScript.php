<?php

namespace WpService\Contracts;

interface BlockCoreArchivesBuildDropdownScript
{
/**
 * Generates the inline script for an archives dropdown field.
 *
 * @since 6.9.0
 *
 * @param string $dropdownId ID of the dropdown field.
 *
 * @return string Returns the dropdown onChange redirection script.
 */
    public function blockCoreArchivesBuildDropdownScript(string $dropdownId): string;
}

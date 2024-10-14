<?php

namespace WpService\Contracts;

interface PrintAdminStyles
{
/**
 * Prints the styles queue in the HTML head on admin pages.
 *
 * @since 2.8.0
 *
 * @global bool $concatenate_scripts
 *
 * @return array
 */
    public function printAdminStyles(): array;
}

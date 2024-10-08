<?php

namespace WpService\Contracts;

interface WpCustomCssCb
{
    /**
 * Renders the Custom CSS style element.
 *
 * @since 4.7.0
 */
    public function wpCustomCssCb(): void;
}
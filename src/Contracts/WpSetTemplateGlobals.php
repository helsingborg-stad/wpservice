<?php

namespace WpService\Contracts;

interface WpSetTemplateGlobals
{
    /**
 * Set up the globals used for template loading.
 *
 * @since 6.5.0
 *
 * @global string $wp_stylesheet_path Path to current theme's stylesheet directory.
 * @global string $wp_template_path   Path to current theme's template directory.
 */
    public function wpSetTemplateGlobals(): void;
}

<?php

namespace WpService\Contracts;

interface IsChildTheme
{
    /**
     * Whether a child theme is in use.
     *
     * @since 3.0.0
     * @since 6.5.0 Makes use of global template variables.
     *
     * @global string $wp_stylesheet_path Path to current theme's stylesheet directory.
     * @global string $wp_template_path   Path to current theme's template directory.
     *
     * @return bool True if a child theme is in use, false otherwise.
     */
    public function isChildTheme(): bool;
}

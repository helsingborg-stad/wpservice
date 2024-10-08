<?php

namespace WpService\Contracts;

interface CustomizeThemesPrintTemplates
{
    /**
     * Prints JS templates for the theme-browsing UI in the Customizer.
     *
     * @since 4.2.0
     */
    public function customizeThemesPrintTemplates(): void;
}

<?php

namespace WpService\Contracts;

interface WpHoistLatePrintedStyles
{
/**
 * Adds the hooks needed for CSS output to be delayed until after the content of the page has been established.
 *
 * @since 6.9.0
 *
 * @see wp_load_classic_theme_block_styles_on_demand()
 * @see _wp_footer_scripts()
 */
    public function wpHoistLatePrintedStyles(): void;
}

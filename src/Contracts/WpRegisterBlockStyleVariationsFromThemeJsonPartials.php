<?php

namespace WpService\Contracts;

interface WpRegisterBlockStyleVariationsFromThemeJsonPartials
{
    /**
 * Registers block style variations read in from theme.json partials.
 *
 * @since 6.6.0
 * @access private
 *
 * @param array $variations Shared block style variations.
 */
    public function wpRegisterBlockStyleVariationsFromThemeJsonPartials(array $variations): void;
}
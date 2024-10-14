<?php

namespace WpService\Contracts;

interface WpRegisterDevelopmentScripts
{
/**
 * Registers development scripts that integrate with `@wordpress/scripts`.
 *
 * @see https://github.com/WordPress/gutenberg/tree/trunk/packages/scripts#start
 *
 * @since 6.0.0
 *
 * @param \WP_Scripts $scripts WP_Scripts object.
 */
    public function wpRegisterDevelopmentScripts(\WP_Scripts $scripts): void;
}

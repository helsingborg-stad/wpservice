<?php

namespace WpService\Contracts;

interface WpBlockThemeActivateNonce
{
    /**
 * Set a JavaScript constant for theme activation.
 *
 * Sets the JavaScript global WP_BLOCK_THEME_ACTIVATE_NONCE containing the nonce
 * required to activate a theme. For use within the site editor.
 *
 * @see https://github.com/WordPress/gutenberg/pull/41836
 *
 * @since 6.3.0
 * @access private
 */
    public function wpBlockThemeActivateNonce(): void;
}

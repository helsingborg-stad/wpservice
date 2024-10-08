<?php

namespace WpService\Contracts;

interface WpSetLangDir
{
    /**
 * Sets the location of the language directory.
 *
 * To set directory manually, define the `WP_LANG_DIR` constant
 * in wp-config.php.
 *
 * If the language directory exists within `WP_CONTENT_DIR`, it
 * is used. Otherwise the language directory is assumed to live
 * in `WPINC`.
 *
 * @since 3.0.0
 * @access private
 */
    public function wpSetLangDir(): void;
}

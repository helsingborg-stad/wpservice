<?php

namespace WpService\Contracts;

interface WpDeregisterScript
{
    /**
 * Removes a registered script.
 *
 * Note: there are intentional safeguards in place to prevent critical admin scripts,
 * such as jQuery core, from being unregistered.
 *
 * @see WP_Dependencies::remove()
 *
 * @since 2.1.0
 *
 * @global string $pagenow The filename of the current screen.
 *
 * @param string $handle Name of the script to be removed.
 */
    public function wpDeregisterScript(string $handle): void;
}

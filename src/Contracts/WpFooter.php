<?php

namespace WpService\Contracts;

interface WpFooter
{
    /**
 * Fires the wp_footer action.
 *
 * See {@see 'wp_footer'}.
 *
 * @since 1.5.1
 */
    public function wpFooter(): void;
}

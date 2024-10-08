<?php

namespace WpService\Contracts;

interface WpPreKsesLessThanCallback
{
    /**
 * Callback function used by preg_replace.
 *
 * @since 2.3.0
 *
 * @param string[] $matches Populated by matches to preg_replace.
 * @return string The text returned after esc_html if needed.
 */
    public function wpPreKsesLessThanCallback(array $matches): string;
}

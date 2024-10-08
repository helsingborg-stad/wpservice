<?php

namespace WpService\Contracts;

interface WpRelCallback
{
    /**
 * Callback to add a rel attribute to HTML A element.
 *
 * Will remove already existing string before adding to prevent invalidating (X)HTML.
 *
 * @since 5.3.0
 *
 * @param array $matches Single match.
 * @param string $rel     The rel attribute to add.
 * @return string HTML A element with the added rel attribute.
 */
    public function wpRelCallback(array $matches, string $rel): string;
}

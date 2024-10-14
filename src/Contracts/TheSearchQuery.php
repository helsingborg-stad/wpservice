<?php

namespace WpService\Contracts;

interface TheSearchQuery
{
/**
 * Displays the contents of the search query variable.
 *
 * The search query string is passed through esc_attr() to ensure that it is safe
 * for placing in an HTML attribute.
 *
 * @since 2.1.0
 */
    public function theSearchQuery(): void;
}

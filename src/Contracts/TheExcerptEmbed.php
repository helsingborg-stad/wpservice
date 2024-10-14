<?php

namespace WpService\Contracts;

interface TheExcerptEmbed
{
/**
 * Displays the post excerpt for the embed template.
 *
 * Intended to be used in 'The Loop'.
 *
 * @since 4.4.0
 */
    public function theExcerptEmbed(): void;
}

<?php

namespace WpService\Contracts;

interface WpInteractivityProcessDirectives
{
/**
 * Processes the interactivity directives contained within the HTML content
 * and updates the markup accordingly.
 *
 * @since 6.5.0
 *
 * @param string $html The HTML content to process.
 * @return string The processed HTML content. It returns the original content when the HTML contains unbalanced tags.
 */
    public function wpInteractivityProcessDirectives(string $html): string;
}

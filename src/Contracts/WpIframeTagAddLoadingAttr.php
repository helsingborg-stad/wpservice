<?php

namespace WpService\Contracts;

interface WpIframeTagAddLoadingAttr
{
/**
 * Adds `loading` attribute to an `iframe` HTML tag.
 *
 * @since 5.7.0
 *
 * @param string $iframe  The HTML `iframe` tag where the attribute should be added.
 * @param string $context Additional context to pass to the filters.
 * @return string Converted `iframe` tag with `loading` attribute added.
 */
    public function wpIframeTagAddLoadingAttr(string $iframe, string $context): string;
}

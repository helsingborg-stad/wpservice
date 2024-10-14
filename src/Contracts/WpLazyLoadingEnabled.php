<?php

namespace WpService\Contracts;

interface WpLazyLoadingEnabled
{
/**
 * Determines whether to add the `loading` attribute to the specified tag in the specified context.
 *
 * @since 5.5.0
 * @since 5.7.0 Now returns `true` by default for `iframe` tags.
 *
 * @param string $tagName The tag name.
 * @param string $context  Additional context, like the current filter name
 *                         or the function name from where this was called.
 * @return bool Whether to add the attribute.
 */
    public function wpLazyLoadingEnabled(string $tagName, string $context): bool;
}

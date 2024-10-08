<?php

namespace WpService\Contracts;

interface IsLocalAttachment
{
    /**
 * Determines whether an attachment URI is local and really an attachment.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.0.0
 *
 * @param string $url URL to check
 * @return bool True on success, false on failure.
 */
    public function isLocalAttachment(string $url): bool;
}

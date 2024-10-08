<?php

namespace WpService\Contracts;

interface WpCreateTag
{
    /**
 * Adds a new tag to the database if it does not already exist.
 *
 * @since 2.3.0
 *
 * @param int|string $tagName
 * @return array|\WP_Error
 */
    public function wpCreateTag(int|string $tagName): array|\WP_Error;
}

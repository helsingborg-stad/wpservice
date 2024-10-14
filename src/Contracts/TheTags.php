<?php

namespace WpService\Contracts;

interface TheTags
{
/**
 * Displays the tags for a post.
 *
 * @since 2.3.0
 *
 * @param string $before Optional. String to use before the tags. Defaults to 'Tags:'.
 * @param string $sep    Optional. String to use between the tags. Default ', '.
 * @param string $after  Optional. String to use after the tags. Default empty.
 */
    public function theTags(string $before = null, string $sep = ', ', string $after = ''): void;
}

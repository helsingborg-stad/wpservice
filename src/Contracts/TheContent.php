<?php

namespace WpService\Contracts;

interface TheContent
{
/**
 * Displays the post content.
 *
 * @since 0.71
 *
 * @param string $moreLinkText Optional. Content for when there is more text.
 * @param bool $stripTeaser   Optional. Strip teaser content before the more text. Default false.
 */
    public function theContent(string $moreLinkText = null, bool $stripTeaser = false): void;
}

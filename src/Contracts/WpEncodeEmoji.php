<?php

namespace WpService\Contracts;

interface WpEncodeEmoji
{
    /**
     * Converts emoji characters to their equivalent HTML entity.
     *
     * This allows us to store emoji in a DB using the utf8 character set.
     *
     * @since 4.2.0
     *
     * @param string $content The content to encode.
     * @return string The encoded content.
     */
    public function wpEncodeEmoji(string $content): string;
}

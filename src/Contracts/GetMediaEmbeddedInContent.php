<?php

namespace WpService\Contracts;

interface GetMediaEmbeddedInContent
{
    /**
 * Checks the HTML content for an audio, video, object, embed, or iframe tags.
 *
 * @since 3.6.0
 *
 * @param string $content A string of HTML which might contain media elements.
 * @param string[] $types   An array of media types: 'audio', 'video', 'object', 'embed', or 'iframe'.
 * @return string[] Array of found HTML media elements.
 */
    public function getMediaEmbeddedInContent(string $content, array $types = null): array;
}

<?php

namespace WpService\Contracts;

interface WpEmbedExcerptAttachment
{
    /**
 * Filters the post excerpt for the embed template.
 *
 * Shows players for video and audio attachments.
 *
 * @since 4.4.0
 *
 * @param string $content The current post excerpt.
 * @return string The modified post excerpt.
 */
    public function wpEmbedExcerptAttachment(string $content): string;
}

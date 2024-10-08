<?php

namespace WpService\Contracts;

interface WpTrimExcerpt
{
    /**
 * Generates an excerpt from the content, if needed.
 *
 * Returns a maximum of 55 words with an ellipsis appended if necessary.
 *
 * The 55-word limit can be modified by plugins/themes using the {@see 'excerpt_length'} filter
 * The ' [&hellip;]' string can be modified by plugins/themes using the {@see 'excerpt_more'} filter
 *
 * @since 1.5.0
 * @since 5.2.0 Added the `$post` parameter.
 * @since 6.3.0 Removes footnotes markup from the excerpt content.
 *
 * @param string $text Optional. The excerpt. If set to empty, an excerpt is generated.
 * @param WP_Post|object|int $post Optional. WP_Post instance or Post ID/object. Default null.
 * @return string The excerpt.
 */
    public function wpTrimExcerpt(string $text = '', int|object $post = null): string;
}

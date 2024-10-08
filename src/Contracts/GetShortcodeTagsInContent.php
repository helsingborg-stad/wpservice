<?php

namespace WpService\Contracts;

interface GetShortcodeTagsInContent
{
    /**
 * Returns a list of registered shortcode names found in the given content.
 *
 * Example usage:
 *
 *     get_shortcode_tags_in_content( '[audio src="file.mp3"][/audio] [foo] [gallery ids="1,2,3"]' );
 *     // array( 'audio', 'gallery' )
 *
 * @since 6.3.2
 *
 * @param string $content The content to check.
 * @return string[] An array of registered shortcode names found in the content.
 */
    public function getShortcodeTagsInContent(string $content): array;
}

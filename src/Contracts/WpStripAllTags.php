<?php

namespace WpService\Contracts;

interface WpStripAllTags
{
    /**
 * Properly strips all HTML tags including script and style
 *
 * This differs from strip_tags() because it removes the contents of
 * the `<script>` and `<style>` tags. E.g. `strip_tags( '<script>something</script>' )`
 * will return 'something'. wp_strip_all_tags will return ''
 *
 * @since 2.9.0
 *
 * @param string $text          String containing HTML tags
 * @param bool $removeBreaks Optional. Whether to remove left over line breaks and white space chars
 * @return string The processed string.
 */
    public function wpStripAllTags(string $text, bool $removeBreaks): string;
}

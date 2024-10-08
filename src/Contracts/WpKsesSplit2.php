<?php

namespace WpService\Contracts;

interface WpKsesSplit2
{
    /**
 * Callback for `wp_kses_split()` for fixing malformed HTML tags.
 *
 * This function does a lot of work. It rejects some very malformed things like
 * `<:::>`. It returns an empty string, if the element isn't allowed (look ma, no
 * `strip_tags()`!). Otherwise it splits the tag into an element and an attribute
 * list.
 *
 * After the tag is split into an element and an attribute list, it is run
 * through another filter which will remove illegal attributes and once that is
 * completed, will be returned.
 *
 * @access private
 * @ignore
 * @since 1.0.0
 * @since 6.6.0 Recognize additional forms of invalid HTML which convert into comments.
 *
 * @param string $content           Content to filter.
 * @param array[]|string $allowedHtml      An array of allowed HTML elements and attributes,
 *                                          or a context name such as 'post'. See wp_kses_allowed_html()
 *                                          for the list of accepted context names.
 * @param string[] $allowedProtocols Array of allowed URL protocols.
 *
 * @return string Fixed HTML element
 */
    public function wpKsesSplit2(string $content, array|string $allowedHtml, array $allowedProtocols): string;
}

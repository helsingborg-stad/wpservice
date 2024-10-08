<?php

namespace WpService\Contracts;

interface EditTagLink
{
    /**
 * Displays or retrieves the edit link for a tag with formatting.
 *
 * @since 2.7.0
 *
 * @param string $link   Optional. Anchor text. If empty, default is 'Edit This'. Default empty.
 * @param string $before Optional. Display before edit link. Default empty.
 * @param string $after  Optional. Display after edit link. Default empty.
 * @param \WP_Term $tag    Optional. Term object. If null, the queried object will be inspected.
 *                        Default null.
 */
    public function editTagLink(string $link, string $before, string $after, \WP_Term $tag): void;
}

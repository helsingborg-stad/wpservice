<?php

namespace WpService\Contracts;

interface EditTermLink
{
    /**
 * Displays or retrieves the edit term link with formatting.
 *
 * @since 3.1.0
 *
 * @param string $link    Optional. Anchor text. If empty, default is 'Edit This'. Default empty.
 * @param string $before  Optional. Display before edit link. Default empty.
 * @param string $after   Optional. Display after edit link. Default empty.
 * @param int|\WP_Term|null $term    Optional. Term ID or object. If null, the queried object will be inspected. Default null.
 * @param bool $display Optional. Whether or not to echo the return. Default true.
 * @return string|void HTML content.
 */
    public function editTermLink(string $link = '', string $before = '', string $after = '', int|\WP_Term|null $term = null, bool $display = true): string;
}

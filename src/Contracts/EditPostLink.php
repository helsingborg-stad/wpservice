<?php

namespace WpService\Contracts;

interface EditPostLink
{
    /**
 * Displays the edit post link for post.
 *
 * @since 1.0.0
 * @since 4.4.0 The `$css_class` argument was added.
 *
 * @param string $text      Optional. Anchor text. If null, default is 'Edit This'. Default null.
 * @param string $before    Optional. Display before edit link. Default empty.
 * @param string $after     Optional. Display after edit link. Default empty.
 * @param int|\WP_Post $post      Optional. Post ID or post object. Default is the global `$post`.
 * @param string $cssClass Optional. Add custom class to link. Default 'post-edit-link'.
 */
    public function editPostLink(string $text, string $before, string $after, int|\WP_Post $post, string $cssClass): void;
}

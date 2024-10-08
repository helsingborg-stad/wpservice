<?php

namespace WpService\Contracts;

interface PostAuthorMetaBox
{
    /**
 * Displays form field with list of authors.
 *
 * @since 2.6.0
 *
 * @global int $user_ID
 *
 * @param \WP_Post $post Current post object.
 */
    public function postAuthorMetaBox(\WP_Post $post): void;
}

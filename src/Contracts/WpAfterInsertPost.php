<?php

namespace WpService\Contracts;

interface WpAfterInsertPost
{
    /**
     * Fires actions after a post, its terms and meta data has been saved.
     *
     * @since 5.6.0
     *
     * @param int|\WP_Post $post        The post ID or object that has been saved.
     * @param bool $update      Whether this is an existing post being updated.
     * @param null|\WP_Post $postBefore Null for new posts, the WP_Post object prior
     *                                  to the update for updated posts.
     */
    public function wpAfterInsertPost(int|\WP_Post $post, bool $update, null|\WP_Post $postBefore): void;
}

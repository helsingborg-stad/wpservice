<?php

namespace WpService\Contracts;

interface WpQueuePostsForTermMetaLazyload
{
    /**
     * Queues posts for lazy-loading of term meta.
     *
     * @since 4.5.0
     *
     * @param WP_Post[] $posts Array of WP_Post objects.
     */
    public function wpQueuePostsForTermMetaLazyload(array $posts): void;
}

<?php

namespace WpService\Contracts;

interface WpLazyloadCommentMeta
{
    /**
     * Queue comment meta for lazy-loading.
     *
     * @since 6.3.0
     *
     * @param array $commentIds List of comment IDs.
     */
    public function wpLazyloadCommentMeta(array $commentIds): void;
}

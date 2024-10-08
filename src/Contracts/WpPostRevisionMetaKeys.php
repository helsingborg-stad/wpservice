<?php

namespace WpService\Contracts;

interface WpPostRevisionMetaKeys
{
    /**
     * Determine which post meta fields should be revisioned.
     *
     * @since 6.4.0
     *
     * @param string $postType The post type being revisioned.
     * @return array An array of meta keys to be revisioned.
     */
    public function wpPostRevisionMetaKeys(string $postType): array;
}

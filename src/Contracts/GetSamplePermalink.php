<?php

namespace WpService\Contracts;

interface GetSamplePermalink
{
    /**
     * Returns a sample permalink based on the post name.
     *
     * @since 2.5.0
     *
     * @param int|\WP_Post $post  Post ID or post object.
     * @param string|null $title Optional. Title to override the post's current title
     *                           when generating the post name. Default null.
     * @param string|null $name  Optional. Name to override the post name. Default null.
     * @return array {
     *     Array containing the sample permalink with placeholder for the post name, and the post name.
     *
     * @type string $0 The permalink with placeholder for the post name.
     * @type string $1 The post name.
     * }
     */
    public function getSamplePermalink(int|\WP_Post $post, string|null $title = null, string|null $name = null): array;
}

<?php

namespace WpService\Contracts;

interface GetPostStatusObject
{
    /**
     * Retrieves a post status object by name.
     *
     * @since 3.0.0
     *
     * @global stdClass[] $wp_post_statuses List of post statuses.
     *
     * @see register_post_status()
     *
     * @param string $postStatus The name of a registered post status.
     * @return \stdClass|null A post status object.
     */
    public function getPostStatusObject(string $postStatus): \stdClass|null;
}

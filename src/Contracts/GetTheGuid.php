<?php

namespace WpService\Contracts;

interface GetTheGuid
{
    /**
     * Retrieves the Post Global Unique Identifier (guid).
     *
     * The guid will appear to be a link, but should not be used as an link to the
     * post. The reason you should not use it as a link, is because of moving the
     * blog across domains.
     *
     * @since 1.5.0
     *
     * @param int|\WP_Post $post Optional. Post ID or post object. Default is global $post.
     * @return string
     */
    public function getTheGuid(int|\WP_Post $post): string;
}

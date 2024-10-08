<?php

namespace WpService\Contracts;

interface GetEditTagLink
{
    /**
     * Retrieves the edit link for a tag.
     *
     * @since 2.7.0
     *
     * @param int|WP_Term|object $tag      The ID or term object whose edit link will be retrieved.
     * @param string $taxonomy Optional. Taxonomy slug. Default 'post_tag'.
     * @return string The edit tag link URL for the given tag.
     */
    public function getEditTagLink(int|object $tag, string $taxonomy = 'post_tag'): string;
}

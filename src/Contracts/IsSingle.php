<?php

namespace WpService\Contracts;

interface IsSingle
{
    /**
     * Determines whether the query is for an existing single post.
     *
     * Works for any post type, except attachments and pages
     *
     * If the $post parameter is specified, this function will additionally
     * check if the query is for one of the Posts specified.
     *
     * @see https://developer.wordpress.org/reference/functions/is_single/
     *
     * @param int|string|int[]|string[] $post Optional. Post ID, title, slug, or array of such
     *                                        to check against. Default empty.
     * @return bool Whether the query is for an existing single post.
     */
    public function isSingle($post = ''): bool;
}

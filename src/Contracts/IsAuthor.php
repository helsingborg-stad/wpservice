<?php

namespace WpService\Contracts;

interface IsAuthor
{
    /**
     * Determines whether the query is for an existing author archive page.
     *
     * If the $author parameter is specified, this function will additionally
     * check if the query is for one of the authors specified.
     *
     * For more information on this and similar theme functions, check out
     * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
     * Conditional Tags} article in the Theme Developer Handbook.
     *
     * @since 1.5.0
     *
     * @global WP_Query $wp_query WordPress Query object.
     *
     * @param int|string|int[]|string[] $author Optional. User ID, nickname, nicename, or array of such
     *                                          to check against. Default empty.
     * @return bool Whether the query is for an existing author archive page.
     */
    public function isAuthor(int|string|array $author = ''): bool;
}

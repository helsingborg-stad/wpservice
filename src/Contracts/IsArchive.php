<?php

namespace WpService\Contracts;

interface IsArchive
{
    /**
 * Determines whether the query is for an existing archive page.
 *
 * Archive pages include category, tag, author, date, custom post type,
 * and custom taxonomy based archives.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 1.5.0
 *
 * @see is_category()
 * @see is_tag()
 * @see is_author()
 * @see is_date()
 * @see is_post_type_archive()
 * @see is_tax()
 * @global WP_Query $wp_query WordPress Query object.
 *
 * @return bool Whether the query is for an existing archive page.
 */
    public function isArchive(): bool;
}

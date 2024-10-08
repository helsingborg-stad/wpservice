<?php

namespace WpService\Contracts;

interface WpUniqueTermSlug
{
    /**
 * Makes term slug unique, if it isn't already.
 *
 * The `$slug` has to be unique global to every taxonomy, meaning that one
 * taxonomy term can't have a matching slug with another taxonomy term. Each
 * slug has to be globally unique for every taxonomy.
 *
 * The way this works is that if the taxonomy that the term belongs to is
 * hierarchical and has a parent, it will append that parent to the $slug.
 *
 * If that still doesn't return a unique slug, then it tries to append a number
 * until it finds a number that is truly unique.
 *
 * The only purpose for `$term` is for appending a parent, if one exists.
 *
 * @since 2.3.0
 *
 * @global wpdb $wpdb WordPress database abstraction object.
 *
 * @param string $slug The string that will be tried for a unique slug.
 * @param object $term The term object that the `$slug` will belong to.
 * @return string Will return a true unique slug.
 */
    public function wpUniqueTermSlug(string $slug, object $term): string;
}

<?php

namespace WpService\Contracts;

interface BuildVariationForNavigationLink
{
/**
 * Returns a navigation link variation
 *
 * @since 5.9.0
 *
 * @param \WP_Taxonomy|\WP_Post_Type $entity post type or taxonomy entity.
 * @param string $kind string of value 'taxonomy' or 'post-type'.
 *
 * @return array
 */
    public function buildVariationForNavigationLink(\WP_Taxonomy|\WP_Post_Type $entity, string $kind): array;
}

<?php

namespace WpService\Contracts;

interface GetBlockTemplates
{
    /**
     * Retrieves a list of unified template objects based on a query.
     *
     * @since 5.8.0
     *
     * @param array $query {
     *     Optional. Arguments to retrieve templates.
     *
     * @type string[] $slug__in  List of slugs to include.
     * @type int      $wp_id     Post ID of customized template.
     * @type string   $area      A 'wp_template_part_area' taxonomy value to filter by (for 'wp_template_part' template type only).
     * @type string   $post_type Post type to get the templates for.
     * }
     * @param string $templateType Template type. Either 'wp_template' or 'wp_template_part'.
     * @return WP_Block_Template[] Array of block templates.
     */
    public function getBlockTemplates(array $query = [], string $templateType = 'wp_template'): array;
}

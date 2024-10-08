<?php

namespace WpService\Contracts;

interface GetSingularTemplate
{
    /**
 * Retrieves the path of the singular template in current or parent template.
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'singular'.
 *
 * @since 4.3.0
 *
 * @see get_query_template()
 *
 * @return string Full path to singular template file
 */
    public function getSingularTemplate(): string;
}

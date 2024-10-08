<?php

namespace WpService\Contracts;

interface GetSearchTemplate
{
    /**
 * Retrieves path of search template in current or parent template.
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'search'.
 *
 * @since 1.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to search template file.
 */
    public function getSearchTemplate(): string;
}

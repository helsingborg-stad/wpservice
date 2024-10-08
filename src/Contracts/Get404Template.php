<?php

namespace WpService\Contracts;

interface Get404Template
{
    /**
 * Retrieves path of 404 template in current or parent template.
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is '404'.
 *
 * @since 1.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to 404 template file.
 */
    public function get404Template(): string;
}

<?php

namespace WpService\Contracts;

interface GetFrontPageTemplate
{
    /**
     * Retrieves path of front page template in current or parent template.
     *
     * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
     * and {@see '$type_template'} dynamic hooks, where `$type` is 'frontpage'.
     *
     * @since 3.0.0
     *
     * @see get_query_template()
     *
     * @return string Full path to front page template file.
     */
    public function getFrontPageTemplate(): string;
}

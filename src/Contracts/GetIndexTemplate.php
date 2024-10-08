<?php

namespace WpService\Contracts;

interface GetIndexTemplate
{
    /**
     * Retrieves path of index template in current or parent template.
     *
     * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
     * and {@see '$type_template'} dynamic hooks, where `$type` is 'index'.
     *
     * @since 3.0.0
     *
     * @see get_query_template()
     *
     * @return string Full path to index template file.
     */
    public function getIndexTemplate(): string;
}

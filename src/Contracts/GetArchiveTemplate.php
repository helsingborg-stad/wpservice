<?php

namespace WpService\Contracts;

interface GetArchiveTemplate
{
    /**
 * Retrieves path of archive template in current or parent template.
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'archive'.
 *
 * @since 1.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to archive template file.
 */
    public function getArchiveTemplate(): string;
}

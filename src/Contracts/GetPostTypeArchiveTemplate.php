<?php

namespace WpService\Contracts;

interface GetPostTypeArchiveTemplate
{
/**
 * Retrieves path of post type archive template in current or parent template.
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'archive'.
 *
 * @since 3.7.0
 *
 * @see get_archive_template()
 *
 * @return string Full path to archive template file.
 */
    public function getPostTypeArchiveTemplate(): string;
}

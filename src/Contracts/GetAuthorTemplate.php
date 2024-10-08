<?php

namespace WpService\Contracts;

interface GetAuthorTemplate
{
    /**
 * Retrieves path of author template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. author-{nicename}.php
 * 2. author-{id}.php
 * 3. author.php
 *
 * An example of this is:
 *
 * 1. author-john.php
 * 2. author-1.php
 * 3. author.php
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'author'.
 *
 * @since 1.5.0
 *
 * @see get_query_template()
 *
 * @return string Full path to author template file.
 */
    public function getAuthorTemplate(): string;
}

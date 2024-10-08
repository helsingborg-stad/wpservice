<?php

namespace WpService\Contracts;

interface GetTagTemplate
{
    /**
 * Retrieves path of tag template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. tag-{slug}.php
 * 2. tag-{id}.php
 * 3. tag.php
 *
 * An example of this is:
 *
 * 1. tag-wordpress.php
 * 2. tag-3.php
 * 3. tag.php
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'tag'.
 *
 * @since 2.3.0
 * @since 4.7.0 The decoded form of `tag-{slug}.php` was added to the top of the
 *              template hierarchy when the tag slug contains multibyte characters.
 *
 * @see get_query_template()
 *
 * @return string Full path to tag template file.
 */
    public function getTagTemplate(): string;
}

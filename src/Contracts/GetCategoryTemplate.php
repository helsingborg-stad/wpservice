<?php

namespace WpService\Contracts;

interface GetCategoryTemplate
{
    /**
 * Retrieves path of category template in current or parent template.
 *
 * The hierarchy for this template looks like:
 *
 * 1. category-{slug}.php
 * 2. category-{id}.php
 * 3. category.php
 *
 * An example of this is:
 *
 * 1. category-news.php
 * 2. category-2.php
 * 3. category.php
 *
 * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
 * and {@see '$type_template'} dynamic hooks, where `$type` is 'category'.
 *
 * @since 1.5.0
 * @since 4.7.0 The decoded form of `category-{slug}.php` was added to the top of the
 *              template hierarchy when the category slug contains multibyte characters.
 *
 * @see get_query_template()
 *
 * @return string Full path to category template file.
 */
    public function getCategoryTemplate(): string;
}

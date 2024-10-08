<?php

namespace WpService\Contracts;

interface GetPageTemplate
{
    /**
     * Retrieves path of page template in current or parent template.
     *
     * Note: For block themes, use locate_block_template() function instead.
     *
     * The hierarchy for this template looks like:
     *
     * 1. {Page Template}.php
     * 2. page-{page_name}.php
     * 3. page-{id}.php
     * 4. page.php
     *
     * An example of this is:
     *
     * 1. page-templates/full-width.php
     * 2. page-about.php
     * 3. page-4.php
     * 4. page.php
     *
     * The template hierarchy and template path are filterable via the {@see '$type_template_hierarchy'}
     * and {@see '$type_template'} dynamic hooks, where `$type` is 'page'.
     *
     * @since 1.5.0
     * @since 4.7.0 The decoded form of `page-{page_name}.php` was added to the top of the
     *              template hierarchy when the page name contains multibyte characters.
     *
     * @see get_query_template()
     *
     * @return string Full path to page template file.
     */
    public function getPageTemplate(): string;
}

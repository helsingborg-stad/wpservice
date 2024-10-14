<?php

namespace WpService\Contracts;

interface IsPageTemplate
{
/**
 * Determines whether the current post uses a page template.
 *
 * This template tag allows you to determine if you are in a page template.
 * You can optionally provide a template filename or array of template filenames
 * and then the check will be specific to that template.
 *
 * For more information on this and similar theme functions, check out
 * the {@link https://developer.wordpress.org/themes/basics/conditional-tags/
 * Conditional Tags} article in the Theme Developer Handbook.
 *
 * @since 2.5.0
 * @since 4.2.0 The `$template` parameter was changed to also accept an array of page templates.
 * @since 4.7.0 Now works with any post type, not just pages.
 *
 * @param string|string[] $template The specific template filename or array of templates to match.
 * @return bool True on success, false on failure.
 */
    public function isPageTemplate(string|array $template = ''): bool;
}

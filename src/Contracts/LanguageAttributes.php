<?php

namespace WpService\Contracts;

interface LanguageAttributes
{
    /**
 * Displays the language attributes for the 'html' tag.
 *
 * Builds up a set of HTML attributes containing the text direction and language
 * information for the page.
 *
 * @since 2.1.0
 * @since 4.3.0 Converted into a wrapper for get_language_attributes().
 *
 * @param string $doctype Optional. The type of HTML document. Accepts 'xhtml' or 'html'. Default 'html'.
 */
    public function languageAttributes(string $doctype): void;
}

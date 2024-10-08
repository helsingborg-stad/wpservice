<?php

namespace WpService\Contracts;

interface GetLanguageAttributes
{
    /**
 * Gets the language attributes for the 'html' tag.
 *
 * Builds up a set of HTML attributes containing the text direction and language
 * information for the page.
 *
 * @since 4.3.0
 *
 * @param string $doctype Optional. The type of HTML document. Accepts 'xhtml' or 'html'. Default 'html'.
 * @return string A space-separated list of language attributes.
 */
    public function getLanguageAttributes(string $doctype = 'html'): string;
}

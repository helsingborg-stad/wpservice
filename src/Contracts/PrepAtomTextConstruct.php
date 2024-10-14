<?php

namespace WpService\Contracts;

interface PrepAtomTextConstruct
{
/**
 * Determines the type of a string of data with the data formatted.
 *
 * Tell whether the type is text, HTML, or XHTML, per RFC 4287 section 3.1.
 *
 * In the case of WordPress, text is defined as containing no markup,
 * XHTML is defined as "well formed", and HTML as tag soup (i.e., the rest).
 *
 * Container div tags are added to XHTML values, per section 3.1.1.3.
 *
 * @link http://www.atomenabled.org/developers/syndication/atom-format-spec.php#rfc.section.3.1
 *
 * @since 2.5.0
 *
 * @param string $data Input string.
 * @return array array(type, value)
 */
    public function prepAtomTextConstruct(string $data): array;
}

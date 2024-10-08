<?php

namespace WpService\Contracts;

interface StartElement
{
    /**
 * Starts a new XML tag.
 *
 * Callback function for xml_set_element_handler().
 *
 * @since 0.71
 * @access private
 *
 * @global array $names
 * @global array $urls
 * @global array $targets
 * @global array $descriptions
 * @global array $feeds
 *
 * @param \resource $parser   XML Parser resource.
 * @param string $tagName XML element name.
 * @param array $attrs    XML element attributes.
 */
    public function startElement(\resource $parser, string $tagName, array $attrs): void;
}

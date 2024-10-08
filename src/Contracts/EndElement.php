<?php

namespace WpService\Contracts;

interface EndElement
{
    /**
 * Ends a new XML tag.
 *
 * Callback function for xml_set_element_handler().
 *
 * @since 0.71
 * @access private
 *
 * @param \resource $parser   XML Parser resource.
 * @param string $tagName XML tag name.
 */
    public function endElement(\resource $parser, string $tagName): void;
}

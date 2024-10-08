<?php

namespace WpService\Contracts;

interface SaveDomDocument
{
    /**
 * Saves the XML document into a file.
 *
 * @since 2.8.0
 *
 * @param \DOMDocument $doc
 * @param string $filename
 */
    public function saveDomDocument(\DOMDocument $doc, string $filename): void;
}

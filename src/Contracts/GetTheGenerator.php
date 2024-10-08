<?php

namespace WpService\Contracts;

interface GetTheGenerator
{
    /**
 * Creates the generator XML or Comment for RSS, ATOM, etc.
 *
 * Returns the correct generator type for the requested output format. Allows
 * for a plugin to filter generators on an individual basis using the
 * {@see 'get_the_generator_$type'} filter.
 *
 * @since 2.5.0
 *
 * @param string $type The type of generator to return - (html|xhtml|atom|rss2|rdf|comment|export).
 * @return string|void The HTML content for the generator.
 */
    public function getTheGenerator(string $type = ''): mixed;
}

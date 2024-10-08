<?php

namespace WpService\Contracts;

interface TheGenerator
{
    /**
     * Displays the generator XML or Comment for RSS, ATOM, etc.
     *
     * Returns the correct generator type for the requested output format. Allows
     * for a plugin to filter generators overall the {@see 'the_generator'} filter.
     *
     * @since 2.5.0
     *
     * @param string $type The type of generator to output - (html|xhtml|atom|rss2|rdf|comment|export).
     */
    public function theGenerator(string $type): void;
}

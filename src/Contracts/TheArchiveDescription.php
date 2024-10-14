<?php

namespace WpService\Contracts;

interface TheArchiveDescription
{
/**
 * Displays category, tag, term, or author description.
 *
 * @since 4.1.0
 *
 * @see get_the_archive_description()
 *
 * @param string $before Optional. Content to prepend to the description. Default empty.
 * @param string $after  Optional. Content to append to the description. Default empty.
 */
    public function theArchiveDescription(string $before = '', string $after = ''): void;
}

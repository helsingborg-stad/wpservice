<?php

namespace WpService\Contracts;

interface TheArchiveTitle
{
    /**
 * Displays the archive title based on the queried object.
 *
 * @since 4.1.0
 *
 * @see get_the_archive_title()
 *
 * @param string $before Optional. Content to prepend to the title. Default empty.
 * @param string $after  Optional. Content to append to the title. Default empty.
 */
    public function theArchiveTitle(string $before, string $after): void;
}

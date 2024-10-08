<?php

namespace WpService\Contracts;

interface GetTheArchiveDescription
{
    /**
 * Retrieves the description for an author, post type, or term archive.
 *
 * @since 4.1.0
 * @since 4.7.0 Added support for author archives.
 * @since 4.9.0 Added support for post type archives.
 *
 * @see term_description()
 *
 * @return string Archive description.
 */
    public function getTheArchiveDescription(): string;
}

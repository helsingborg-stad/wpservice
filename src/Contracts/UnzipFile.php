<?php

namespace WpService\Contracts;

interface UnzipFile
{
    /**
     * Unzips a specified ZIP file to a location on the filesystem via the WordPress
     * Filesystem Abstraction.
     *
     * Assumes that WP_Filesystem() has already been called and set up. Does not extract
     * a root-level __MACOSX directory, if present.
     *
     * Attempts to increase the PHP memory limit to 256M before uncompressing. However,
     * the most memory required shouldn't be much larger than the archive itself.
     *
     * @since 2.5.0
     *
     * @global WP_Filesystem_Base $wp_filesystem WordPress filesystem subclass.
     *
     * @param string $file Full path and filename of ZIP archive.
     * @param string $to   Full path on the filesystem to extract archive to.
     * @return true|\WP_Error True on success, WP_Error on failure.
     */
    public function unzipFile(string $file, string $to): true|\WP_Error;
}

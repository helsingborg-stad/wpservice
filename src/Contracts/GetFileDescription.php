<?php

namespace WpService\Contracts;

interface GetFileDescription
{
    /**
     * Gets the description for standard WordPress theme files.
     *
     * @since 1.5.0
     *
     * @global array $wp_file_descriptions Theme file descriptions.
     * @global array $allowed_files        List of allowed files.
     *
     * @param string $file Filesystem path or filename.
     * @return string Description of file from $wp_file_descriptions or basename of $file if description doesn't exist.
     *                Appends 'Page Template' to basename of $file if the file is a page template.
     */
    public function getFileDescription(string $file): string;
}

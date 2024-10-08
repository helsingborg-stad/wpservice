<?php

namespace WpService\Contracts;

interface DeleteBlogOption
{
    /**
 * Removes an option by name for a given blog ID. Prevents removal of protected WordPress options.
 *
 * @since MU (3.0.0)
 *
 * @param int $id     A blog ID. Can be null to refer to the current blog.
 * @param string $option Name of option to remove. Expected to not be SQL-escaped.
 * @return bool True if the option was deleted, false otherwise.
 */
    public function deleteBlogOption(int $id, string $option): bool;
}

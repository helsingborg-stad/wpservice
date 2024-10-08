<?php

namespace WpService\Contracts;

interface UpdateBlogOption
{
    /**
 * Updates an option for a particular blog.
 *
 * @since MU (3.0.0)
 *
 * @param int $id         The blog ID.
 * @param string $option     The option key.
 * @param mixed $value      The option value.
 * @param mixed $deprecated Not used.
 * @return bool True if the value was updated, false otherwise.
 */
    public function updateBlogOption(int $id, string $option, mixed $value, mixed $deprecated = null): bool;
}

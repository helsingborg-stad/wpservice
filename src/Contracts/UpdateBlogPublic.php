<?php

namespace WpService\Contracts;

interface UpdateBlogPublic
{
/**
 * Updates this blog's 'public' setting in the global blogs table.
 *
 * Public blogs have a setting of 1, private blogs are 0.
 *
 * @since MU (3.0.0)
 *
 * @param int $oldValue The old public value.
 * @param int $value     The new public value.
 */
    public function updateBlogPublic(int $oldValue, int $value): void;
}

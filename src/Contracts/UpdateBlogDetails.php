<?php

namespace WpService\Contracts;

interface UpdateBlogDetails
{
    /**
 * Updates the details for a blog and the blogs table for a given blog ID.
 *
 * @since MU (3.0.0)
 *
 * @param int $blogId Blog ID.
 * @param array $details Array of details keyed by blogs table field names.
 * @return bool True if update succeeds, false otherwise.
 */
    public function updateBlogDetails(int $blogId, array $details): bool;
}

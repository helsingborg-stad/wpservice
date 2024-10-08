<?php

namespace WpService\Contracts;

interface UpdateArchived
{
    /**
 * Updates the 'archived' status of a particular blog.
 *
 * @since MU (3.0.0)
 *
 * @param int $id       Blog ID.
 * @param string $archived The new status.
 * @return string $archived
 */
    public function updateArchived(int $id, string $archived): string;
}

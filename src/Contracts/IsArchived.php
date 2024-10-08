<?php

namespace WpService\Contracts;

interface IsArchived
{
    /**
     * Checks if a particular blog is archived.
     *
     * @since MU (3.0.0)
     *
     * @param int $id Blog ID.
     * @return string Whether the blog is archived or not.
     */
    public function isArchived(int $id): string;
}

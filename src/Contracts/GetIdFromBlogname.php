<?php

namespace WpService\Contracts;

interface GetIdFromBlogname
{
    /**
     * Retrieves a site's ID given its (subdomain or directory) slug.
     *
     * @since MU (3.0.0)
     * @since 4.7.0 Converted to use `get_sites()`.
     *
     * @param string $slug A site's slug.
     * @return int|null The site ID, or null if no site is found for the given slug.
     */
    public function getIdFromBlogname(string $slug): int|null;
}

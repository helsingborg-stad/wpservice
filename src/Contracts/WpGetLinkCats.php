<?php

namespace WpService\Contracts;

interface WpGetLinkCats
{
    /**
     * Retrieves the link category IDs associated with the link specified.
     *
     * @since 2.1.0
     *
     * @param int $linkId Link ID to look up.
     * @return int[] The IDs of the requested link's categories.
     */
    public function wpGetLinkCats(int $linkId): array;
}

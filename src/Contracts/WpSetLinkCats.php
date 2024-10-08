<?php

namespace WpService\Contracts;

interface WpSetLinkCats
{
    /**
     * Updates link with the specified link categories.
     *
     * @since 2.1.0
     *
     * @param int $linkId         ID of the link to update.
     * @param int[] $linkCategories Array of link category IDs to add the link to.
     */
    public function wpSetLinkCats(int $linkId = 0, array $linkCategories = []): void;
}

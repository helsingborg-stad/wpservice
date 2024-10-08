<?php

namespace WpService\Contracts;

interface DeleteSiteMetaByKey
{
    /**
     * Deletes everything from site meta matching meta key.
     *
     * @since 5.1.0
     *
     * @param string $metaKey Metadata key to search for when deleting.
     * @return bool Whether the site meta key was deleted from the database.
     */
    public function deleteSiteMetaByKey(string $metaKey): bool;
}

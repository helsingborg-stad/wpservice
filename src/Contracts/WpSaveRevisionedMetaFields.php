<?php

namespace WpService\Contracts;

interface WpSaveRevisionedMetaFields
{
    /**
     * Save the revisioned meta fields.
     *
     * @since 6.4.0
     *
     * @param int $revisionId The ID of the revision to save the meta to.
     * @param int $postId     The ID of the post the revision is associated with.
     */
    public function wpSaveRevisionedMetaFields(int $revisionId, int $postId): void;
}

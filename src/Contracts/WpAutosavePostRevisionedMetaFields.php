<?php

namespace WpService\Contracts;

interface WpAutosavePostRevisionedMetaFields
{
    /**
     * Autosave the revisioned meta fields.
     *
     * Iterates through the revisioned meta fields and checks each to see if they are set,
     * and have a changed value. If so, the meta value is saved and attached to the autosave.
     *
     * @since 6.4.0
     *
     * @param array $newAutosave The new post data being autosaved.
     */
    public function wpAutosavePostRevisionedMetaFields(array $newAutosave): void;
}

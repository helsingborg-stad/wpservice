<?php

namespace WpService\Contracts;

interface WpGetFootnotesFromRevision
{
    /**
     * Gets the footnotes field from the revision for the revisions screen.
     *
     * @since 6.3.0
     *
     * @param string $revisionField The field value, but $revision->$field
     *                               (footnotes) does not exist.
     * @param string $field          The field name, in this case "footnotes".
     * @param object $revision       The revision object to compare against.
     * @return string The field value.
     */
    public function wpGetFootnotesFromRevision(string $revisionField, string $field, object $revision): string;
}

<?php

namespace WpService\Contracts;

interface InsertWithMarkers
{
    /**
     * Inserts an array of strings into a file (.htaccess), placing it between
     * BEGIN and END markers.
     *
     * Replaces existing marked info. Retains surrounding
     * data. Creates file if none exists.
     *
     * @since 1.5.0
     *
     * @param string $filename  Filename to alter.
     * @param string $marker    The marker to alter.
     * @param array|string $insertion The new content to insert.
     * @return bool True on write success, false on failure.
     */
    public function insertWithMarkers(string $filename, string $marker, array|string $insertion): bool;
}

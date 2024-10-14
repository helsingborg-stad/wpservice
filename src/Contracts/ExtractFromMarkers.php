<?php

namespace WpService\Contracts;

interface ExtractFromMarkers
{
/**
 * Extracts strings from between the BEGIN and END markers in the .htaccess file.
 *
 * @since 1.5.0
 *
 * @param string $filename Filename to extract the strings from.
 * @param string $marker   The marker to extract the strings from.
 * @return string[] An array of strings from a file (.htaccess) from between BEGIN and END markers.
 */
    public function extractFromMarkers(string $filename, string $marker): array;
}

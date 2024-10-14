<?php

namespace WpService\Contracts;

interface WpScriptsGetSuffix
{
/**
 * Returns the suffix that can be used for the scripts.
 *
 * There are two suffix types, the normal one and the dev suffix.
 *
 * @since 5.0.0
 *
 * @param string $type The type of suffix to retrieve.
 * @return string The script suffix.
 */
    public function wpScriptsGetSuffix(string $type = ''): string;
}

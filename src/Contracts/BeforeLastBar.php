<?php

namespace WpService\Contracts;

interface BeforeLastBar
{
/**
 * Removes last item on a pipe-delimited string.
 *
 * Meant for removing the last item in a string, such as 'Role name|User role'. The original
 * string will be returned if no pipe '|' characters are found in the string.
 *
 * @since 2.8.0
 *
 * @param string $text A pipe-delimited string.
 * @return string Either $text or everything before the last pipe.
 */
    public function beforeLastBar(string $text): string;
}

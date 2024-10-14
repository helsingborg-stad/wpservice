<?php

namespace WpService\Contracts;

interface WpExifDate2ts
{
/**
 * Converts the exif date format to a unix timestamp.
 *
 * @since 2.5.0
 *
 * @param string $str A date string expected to be in Exif format (Y:m:d H:i:s).
 * @return int|false The unix timestamp, or false on failure.
 */
    public function wpExifDate2ts(string $str): int|false;
}

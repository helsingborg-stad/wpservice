<?php

namespace WpService\Contracts;

interface WpMaxUploadSize
{
    /**
 * Determines the maximum upload size allowed in php.ini.
 *
 * @since 2.5.0
 *
 * @return int Allowed upload size.
 */
    public function wpMaxUploadSize(): int;
}

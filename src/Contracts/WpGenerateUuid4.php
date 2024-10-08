<?php

namespace WpService\Contracts;

interface WpGenerateUuid4
{
    /**
 * Generates a random UUID (version 4).
 *
 * @since 4.7.0
 *
 * @return string UUID.
 */
    public function wpGenerateUuid4(): string;
}

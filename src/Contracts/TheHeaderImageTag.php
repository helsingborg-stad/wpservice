<?php

namespace WpService\Contracts;

interface TheHeaderImageTag
{
    /**
 * Displays the image markup for a custom header image.
 *
 * @since 4.4.0
 *
 * @param array $attr Optional. Attributes for the image markup. Default empty.
 */
    public function theHeaderImageTag(array $attr): void;
}

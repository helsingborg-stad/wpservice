<?php

namespace WpService\Contracts;

interface GetBackgroundImage
{
/**
 * Retrieves background image for custom background.
 *
 * @since 3.0.0
 *
 * @return string
 */
    public function getBackgroundImage(): string;
}

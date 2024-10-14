<?php

namespace WpService\Contracts;

interface WpGetVideoExtensions
{
/**
 * Returns a filtered list of supported video formats.
 *
 * @since 3.6.0
 *
 * @return string[] List of supported video formats.
 */
    public function wpGetVideoExtensions(): array;
}

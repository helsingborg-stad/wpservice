<?php

namespace WpService\Contracts;

interface BuildTemplatePartBlockVariations
{
/**
 * Returns an array of all template part block variations.
 *
 * @since 5.9.0
 *
 * @return array Array containing the block variation objects.
 */
    public function buildTemplatePartBlockVariations(): array;
}

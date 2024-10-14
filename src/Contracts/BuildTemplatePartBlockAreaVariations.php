<?php

namespace WpService\Contracts;

interface BuildTemplatePartBlockAreaVariations
{
/**
 * Returns an array of area variation objects for the template part block.
 *
 * @since 6.1.0
 *
 * @param array $instanceVariations The variations for instances.
 *
 * @return array Array containing the block variation objects.
 */
    public function buildTemplatePartBlockAreaVariations(array $instanceVariations): array;
}

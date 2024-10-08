<?php

namespace WpService\Contracts;

interface BuildTemplatePartBlockInstanceVariations
{
    /**
     * Returns an array of instance variation objects for the template part block
     *
     * @since 6.1.0
     *
     * @return array Array containing the block variation objects.
     */
    public function buildTemplatePartBlockInstanceVariations(): array;
}

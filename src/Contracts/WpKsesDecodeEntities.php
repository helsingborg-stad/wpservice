<?php

namespace WpService\Contracts;

interface WpKsesDecodeEntities
{
    /**
     * Converts all numeric HTML entities to their named counterparts.
     *
     * This function decodes numeric HTML entities (`&#65;` and `&#x41;`).
     * It doesn't do anything with named entities like `&auml;`, but we don't
     * need them in the allowed URL protocols system anyway.
     *
     * @since 1.0.0
     *
     * @param string $content Content to change entities.
     * @return string Content after decoded entities.
     */
    public function wpKsesDecodeEntities(string $content): string;
}

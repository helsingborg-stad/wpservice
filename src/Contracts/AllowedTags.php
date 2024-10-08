<?php

namespace WpService\Contracts;

interface AllowedTags
{
    /**
     * Displays all of the allowed tags in HTML format with attributes.
     *
     * This is useful for displaying in the comment area, which elements and
     * attributes are supported. As well as any plugins which want to display it.
     *
     * @since 1.0.1
     * @since 4.4.0 No longer used in core.
     *
     * @global array $allowedtags
     *
     * @return string HTML allowed tags entity encoded.
     */
    public function allowedTags(): string;
}

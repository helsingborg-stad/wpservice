<?php

namespace WpService\Contracts;

interface GetPostFormatStrings
{
    /**
     * Returns an array of post format slugs to their translated and pretty display versions
     *
     * @since 3.1.0
     *
     * @return string[] Array of post format labels keyed by format slug.
     */
    public function getPostFormatStrings(): array;
}

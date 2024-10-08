<?php

namespace WpService\Contracts;

interface GetThePostTypeDescription
{
    /**
     * Retrieves the description for a post type archive.
     *
     * @since 4.9.0
     *
     * @return string The post type description.
     */
    public function getThePostTypeDescription(): string;
}

<?php

namespace WpService\Contracts;

interface TheCustomLogo
{
    /**
     * Displays a custom logo, linked to home unless the theme supports removing the link on the home page.
     *
     * @since 4.5.0
     *
     * @param int $blogId Optional. ID of the blog in question. Default is the ID of the current blog.
     */
    public function theCustomLogo(int $blogId): void;
}

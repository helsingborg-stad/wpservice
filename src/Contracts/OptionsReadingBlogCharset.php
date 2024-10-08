<?php

namespace WpService\Contracts;

interface OptionsReadingBlogCharset
{
    /**
     * Render the site charset setting.
     *
     * @since 3.5.0
     */
    public function optionsReadingBlogCharset(): void;
}

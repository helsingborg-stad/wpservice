<?php

namespace WpService\Contracts;

interface RegisterStyle
{
    /**
     * Register a style.
     *
     * @param string $handle The unique handle for the style.
     * @param string $src The source URL of the style file.
     * @param array $deps An array of dependencies.
     * @param string|bool|null $ver The version number of the style.
     * @param string $media The media type for which the style is defined.
     * @return void
     */
    public function registerStyle(
        string $handle,
        string $src = '',
        array $deps = array(),
        string|bool|null $ver = false,
        string $media = 'all'
    ): void;
}

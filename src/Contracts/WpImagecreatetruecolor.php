<?php

namespace WpService\Contracts;

interface WpImagecreatetruecolor
{
    /**
     * Creates a new GD image resource with transparency support.
     *
     * @todo Deprecate if possible.
     *
     * @since 2.9.0
     *
     * @param int $width  Image width in pixels.
     * @param int $height Image height in pixels.
     * @return \resource|\GdImage|false The GD image resource or GdImage instance on success.
     *                                False on failure.
     */
    public function wpImagecreatetruecolor(int $width, int $height): \resource|\GdImage|false;
}

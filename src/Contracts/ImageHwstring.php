<?php

namespace WpService\Contracts;

interface ImageHwstring
{
    /**
     * Retrieves width and height attributes using given width and height values.
     *
     * Both attributes are required in the sense that both parameters must have a
     * value, but are optional in that if you set them to false or null, then they
     * will not be added to the returned string.
     *
     * You can set the value using a string, but it will only take numeric values.
     * If you wish to put 'px' after the numbers, then it will be stripped out of
     * the return.
     *
     * @since 2.5.0
     *
     * @param int|string $width  Image width in pixels.
     * @param int|string $height Image height in pixels.
     * @return string HTML attributes for width and, or height.
     */
    public function imageHwstring(int|string $width, int|string $height): string;
}

<?php

namespace WpService\Contracts;

interface ImageAddCaption
{
    /**
 * Adds image shortcode with caption to editor.
 *
 * @since 2.6.0
 *
 * @param string $html    The image HTML markup to send.
 * @param int $id      Image attachment ID.
 * @param string $caption Image caption.
 * @param string $title   Image title attribute (not used).
 * @param string $align   Image CSS alignment property.
 * @param string $url     Image source URL (not used).
 * @param string $size    Image size (not used).
 * @param string $alt     Image `alt` attribute (not used).
 * @return string The image HTML markup with caption shortcode.
 */
    public function imageAddCaption(string $html, int $id, string $caption, string $title, string $align, string $url, string $size, string $alt): string;
}

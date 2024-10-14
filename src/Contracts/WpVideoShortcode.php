<?php

namespace WpService\Contracts;

interface WpVideoShortcode
{
/**
 * Builds the Video shortcode output.
 *
 * This implements the functionality of the Video Shortcode for displaying
 * WordPress mp4s in a post.
 *
 * @since 3.6.0
 *
 * @global int $content_width
 *
 * @param array $attr {
 *     Attributes of the shortcode.
 *
 * @type string $src      URL to the source of the video file. Default empty.
 * @type int    $height   Height of the video embed in pixels. Default 360.
 * @type int    $width    Width of the video embed in pixels. Default $content_width or 640.
 * @type string $poster   The 'poster' attribute for the `<video>` element. Default empty.
 * @type string $loop     The 'loop' attribute for the `<video>` element. Default empty.
 * @type string $autoplay The 'autoplay' attribute for the `<video>` element. Default empty.
 * @type string $muted    The 'muted' attribute for the `<video>` element. Default false.
 * @type string $preload  The 'preload' attribute for the `<video>` element.
 *                            Default 'metadata'.
 * @type string $class    The 'class' attribute for the `<video>` element.
 *                            Default 'wp-video-shortcode'.
 * }
 * @param string $content Shortcode content.
 * @return string|void HTML content to display video.
 */
    public function wpVideoShortcode(array $attr, string $content = ''): mixed;
}

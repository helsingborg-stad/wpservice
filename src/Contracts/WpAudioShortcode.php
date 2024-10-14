<?php

namespace WpService\Contracts;

interface WpAudioShortcode
{
/**
 * Builds the Audio shortcode output.
 *
 * This implements the functionality of the Audio Shortcode for displaying
 * WordPress mp3s in a post.
 *
 * @since 3.6.0
 *
 * @param array $attr {
 *     Attributes of the audio shortcode.
 *
 * @type string $src      URL to the source of the audio file. Default empty.
 * @type string $loop     The 'loop' attribute for the `<audio>` element. Default empty.
 * @type string $autoplay The 'autoplay' attribute for the `<audio>` element. Default empty.
 * @type string $preload  The 'preload' attribute for the `<audio>` element. Default 'none'.
 * @type string $class    The 'class' attribute for the `<audio>` element. Default 'wp-audio-shortcode'.
 * @type string $style    The 'style' attribute for the `<audio>` element. Default 'width: 100%;'.
 * }
 * @param string $content Shortcode content.
 * @return string|void HTML content to display audio.
 */
    public function wpAudioShortcode(array $attr, string $content = ''): mixed;
}

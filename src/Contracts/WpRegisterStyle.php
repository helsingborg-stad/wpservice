<?php

namespace WpService\Contracts;

interface WpRegisterStyle
{
    /**
     * Registers a CSS stylesheet.
     *
     * @see WP_Dependencies::add()
     * @link https://www.w3.org/TR/CSS2/media.html#media-types List of CSS media types.
     *
     * @since 2.6.0
     * @since 4.3.0 A return value was added.
     *
     * @param string $handle Name of the stylesheet. Should be unique.
     * @param string|false $src    Full URL of the stylesheet, or path of the stylesheet relative to the WordPress root directory.
     *                                 If source is set to false, stylesheet is an alias of other stylesheets it depends on.
     * @param string[] $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
     * @param string|bool|null $ver    Optional. String specifying stylesheet version number, if it has one, which is added to the URL
     *                                 as a query string for cache busting purposes. If version is set to false, a version
     *                                 number is automatically added equal to current installed WordPress version.
     *                                 If set to null, no version is added.
     * @param string $media  Optional. The media for which this stylesheet has been defined.
     *                                 Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
     *                                 '(orientation: portrait)' and '(max-width: 640px)'.
     * @return bool Whether the style has been registered. True on success, false on failure.
     */
    public function wpRegisterStyle(string $handle, string|false $src, array $deps = [], string|bool|null $ver = false, string $media = 'all'): bool;
}

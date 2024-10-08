<?php

namespace WpService\Contracts;

interface WpStyleAddData
{
    /**
 * Adds metadata to a CSS stylesheet.
 *
 * Works only if the stylesheet has already been registered.
 *
 * Possible values for $key and $value:
 * 'conditional' string      Comments for IE 6, lte IE 7 etc.
 * 'rtl'         bool|string To declare an RTL stylesheet.
 * 'suffix'      string      Optional suffix, used in combination with RTL.
 * 'alt'         bool        For rel="alternate stylesheet".
 * 'title'       string      For preferred/alternate stylesheets.
 * 'path'        string      The absolute path to a stylesheet. Stylesheet will
 *                           load inline when 'path' is set.
 *
 * @see WP_Dependencies::add_data()
 *
 * @since 3.6.0
 * @since 5.8.0 Added 'path' as an official value for $key.
 *              See {@see wp_maybe_inline_styles()}.
 *
 * @param string $handle Name of the stylesheet.
 * @param string $key    Name of data point for which we're storing a value.
 *                       Accepts 'conditional', 'rtl' and 'suffix', 'alt', 'title' and 'path'.
 * @param mixed $value  String containing the CSS data to be added.
 * @return bool True on success, false on failure.
 */
    public function wpStyleAddData(string $handle, string $key, mixed $value): bool;
}

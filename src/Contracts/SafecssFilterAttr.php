<?php

namespace WpService\Contracts;

interface SafecssFilterAttr
{
    /**
 * Filters an inline style attribute and removes disallowed rules.
 *
 * @since 2.8.1
 * @since 4.4.0 Added support for `min-height`, `max-height`, `min-width`, and `max-width`.
 * @since 4.6.0 Added support for `list-style-type`.
 * @since 5.0.0 Added support for `background-image`.
 * @since 5.1.0 Added support for `text-transform`.
 * @since 5.2.0 Added support for `background-position` and `grid-template-columns`.
 * @since 5.3.0 Added support for `grid`, `flex` and `column` layout properties.
 *              Extended `background-*` support for individual properties.
 * @since 5.3.1 Added support for gradient backgrounds.
 * @since 5.7.1 Added support for `object-position`.
 * @since 5.8.0 Added support for `calc()` and `var()` values.
 * @since 6.1.0 Added support for `min()`, `max()`, `minmax()`, `clamp()`,
 *              nested `var()` values, and assigning values to CSS variables.
 *              Added support for `object-fit`, `gap`, `column-gap`, `row-gap`, and `flex-wrap`.
 *              Extended `margin-*` and `padding-*` support for logical properties.
 * @since 6.2.0 Added support for `aspect-ratio`, `position`, `top`, `right`, `bottom`, `left`,
 *              and `z-index` CSS properties.
 * @since 6.3.0 Extended support for `filter` to accept a URL and added support for repeat().
 *              Added support for `box-shadow`.
 * @since 6.4.0 Added support for `writing-mode`.
 * @since 6.5.0 Added support for `background-repeat`.
 * @since 6.6.0 Added support for `grid-column`, `grid-row`, and `container-type`.
 *
 * @param string $css        A string of CSS rules.
 * @param string $deprecated Not used.
 * @return string Filtered string of CSS rules.
 */
    public function safecssFilterAttr(string $css, string $deprecated): string;
}
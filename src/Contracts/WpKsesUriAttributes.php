<?php

namespace WpService\Contracts;

interface WpKsesUriAttributes
{
    /**
 * Returns an array of HTML attribute names whose value contains a URL.
 *
 * This function returns a list of all HTML attributes that must contain
 * a URL according to the HTML specification.
 *
 * This list includes URI attributes both allowed and disallowed by KSES.
 *
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Attributes
 *
 * @since 5.0.1
 *
 * @return string[] HTML attribute names whose value contains a URL.
 */
    public function wpKsesUriAttributes(): array;
}

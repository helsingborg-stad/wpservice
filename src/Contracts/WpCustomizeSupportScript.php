<?php

namespace WpService\Contracts;

interface WpCustomizeSupportScript
{
    /**
 * Prints a script to check whether or not the Customizer is supported,
 * and apply either the no-customize-support or customize-support class
 * to the body.
 *
 * This function MUST be called inside the body tag.
 *
 * Ideally, call this function immediately after the body tag is opened.
 * This prevents a flash of unstyled content.
 *
 * It is also recommended that you add the "no-customize-support" class
 * to the body tag by default.
 *
 * @since 3.4.0
 * @since 4.7.0 Support for IE8 and below is explicitly removed via conditional comments.
 * @since 5.5.0 IE8 and older are no longer supported.
 */
    public function wpCustomizeSupportScript(): void;
}

<?php

namespace WpService\Contracts;

interface WpStrictCrossOriginReferrer
{
    /**
 * Displays a referrer `strict-origin-when-cross-origin` meta tag.
 *
 * Outputs a referrer `strict-origin-when-cross-origin` meta tag that tells the browser not to send
 * the full URL as a referrer to other sites when cross-origin assets are loaded.
 *
 * Typical usage is as a {@see 'wp_head'} callback:
 *
 *     add_action( 'wp_head', 'wp_strict_cross_origin_referrer' );
 *
 * @since 5.7.0
 */
    public function wpStrictCrossOriginReferrer(): void;
}

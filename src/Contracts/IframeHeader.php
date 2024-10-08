<?php

namespace WpService\Contracts;

interface IframeHeader
{
    /**
 * Generic Iframe header for use with Thickbox.
 *
 * @since 2.7.0
 *
 * @global string    $hook_suffix
 * @global string    $admin_body_class
 * @global string    $body_id
 * @global WP_Locale $wp_locale        WordPress date and time locale object.
 *
 * @param string $title      Optional. Title of the Iframe page. Default empty.
 * @param bool $deprecated Not used.
 */
    public function iframeHeader(string $title, bool $deprecated): void;
}

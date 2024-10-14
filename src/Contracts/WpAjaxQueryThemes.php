<?php

namespace WpService\Contracts;

interface WpAjaxQueryThemes
{
/**
 * Handles getting themes from themes_api() via AJAX.
 *
 * @since 3.9.0
 *
 * @global array $themes_allowedtags
 * @global array $theme_field_defaults
 */
    public function wpAjaxQueryThemes(): void;
}

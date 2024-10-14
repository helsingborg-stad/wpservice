<?php

namespace WpService\Contracts;

interface WpGetGlobalStylesCustomCss
{
/**
 * Gets the global styles custom CSS from theme.json.
 *
 * @since 6.2.0
 *
 * @return string The global styles custom CSS.
 */
public function wpGetGlobalStylesCustomCss(): string;
}
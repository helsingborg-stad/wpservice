<?php

namespace WpService\Contracts;

interface UserCanRichedit
{
    /**
     * Determines whether the user can access the visual editor.
     *
     * Checks if the user can access the visual editor and that it's supported by the user's browser.
     *
     * @since 2.0.0
     *
     * @global bool $wp_rich_edit Whether the user can access the visual editor.
     * @global bool $is_gecko     Whether the browser is Gecko-based.
     * @global bool $is_opera     Whether the browser is Opera.
     * @global bool $is_safari    Whether the browser is Safari.
     * @global bool $is_chrome    Whether the browser is Chrome.
     * @global bool $is_IE        Whether the browser is Internet Explorer.
     * @global bool $is_edge      Whether the browser is Microsoft Edge.
     *
     * @return bool True if the user can access the visual editor, false otherwise.
     */
    public function userCanRichedit(): bool;
}

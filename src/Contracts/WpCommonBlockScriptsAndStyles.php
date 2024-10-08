<?php

namespace WpService\Contracts;

interface WpCommonBlockScriptsAndStyles
{
    /**
 * Handles the enqueueing of block scripts and styles that are common to both
 * the editor and the front-end.
 *
 * @since 5.0.0
 */
    public function wpCommonBlockScriptsAndStyles(): void;
}

<?php

namespace WpService\Contracts;

interface WpGenerator
{
    /**
     * Displays the XHTML generator that is generated on the wp_head hook.
     *
     * See {@see 'wp_head'}.
     *
     * @since 2.5.0
     */
    public function wpGenerator(): void;
}

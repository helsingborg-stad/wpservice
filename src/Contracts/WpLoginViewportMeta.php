<?php

namespace WpService\Contracts;

interface WpLoginViewportMeta
{
    /**
     * Outputs the viewport meta tag for the login page.
     *
     * @since 3.7.0
     */
    public function wpLoginViewportMeta(): void;
}

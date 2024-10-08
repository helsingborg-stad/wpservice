<?php

namespace WpService\Contracts;

interface WpIsMobile
{
    /**
     * Test if the current browser runs on a mobile device (smart phone, tablet, etc.).
     *
     * @since 3.4.0
     * @since 6.4.0 Added checking for the Sec-CH-UA-Mobile request header.
     *
     * @return bool
     */
    public function wpIsMobile(): bool;
}

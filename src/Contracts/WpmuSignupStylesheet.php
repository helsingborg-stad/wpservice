<?php

namespace WpService\Contracts;

interface WpmuSignupStylesheet
{
    /**
     * Prints styles for front-end Multisite Sign-up pages.
     *
     * @since MU (3.0.0)
     */
    public function wpmuSignupStylesheet(): void;
}

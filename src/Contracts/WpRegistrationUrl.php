<?php

namespace WpService\Contracts;

interface WpRegistrationUrl
{
    /**
     * Returns the URL that allows the user to register on the site.
     *
     * @since 3.6.0
     *
     * @return string User registration URL.
     */
    public function wpRegistrationUrl(): string;
}

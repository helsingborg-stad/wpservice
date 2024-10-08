<?php

namespace WpService\Contracts;

interface RestGetAuthenticatedAppPassword
{
    /**
     * Gets the Application Password used for authenticating the request.
     *
     * @since 5.7.0
     *
     * @global string|null $wp_rest_application_password_uuid
     *
     * @return string|null The Application Password UUID, or null if Application Passwords was not used.
     */
    public function restGetAuthenticatedAppPassword(): string|null;
}

<?php

namespace WpService\Contracts;

interface WpValidateApplicationPassword
{
    /**
     * Validates the application password credentials passed via Basic Authentication.
     *
     * @since 5.6.0
     *
     * @param int|false $inputUser User ID if one has been determined, false otherwise.
     * @return int|false The authenticated user ID if successful, false otherwise.
     */
    public function wpValidateApplicationPassword(int|false $inputUser): int|false;
}

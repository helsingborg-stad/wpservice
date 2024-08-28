<?php

namespace WpService\Contracts;

/**
 * Interface IsUserLoggedIn
 *
 * This interface defines the contract for checking if the user is logged in in WordPress.
 */
interface IsUserLoggedIn
{
    /**
     * Interface for performing is user logged in check.
     *
     * @return bool
     */
    public function isUserLoggedIn(): bool;
}

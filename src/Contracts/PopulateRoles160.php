<?php

namespace WpService\Contracts;

interface PopulateRoles160
{
    /**
     * Create the roles for WordPress 2.0
     *
     * @since 2.0.0
     */
    public function populateRoles160(): void;
}

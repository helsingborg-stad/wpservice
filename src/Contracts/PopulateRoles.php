<?php

namespace WpService\Contracts;

interface PopulateRoles
{
/**
 * Execute WordPress role creation for the various WordPress versions.
 *
 * @since 2.0.0
 */
    public function populateRoles(): void;
}

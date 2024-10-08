<?php

namespace WpService\Contracts;

interface WpDropdownRoles
{
    /**
     * Prints out option HTML elements for role selectors.
     *
     * @since 2.1.0
     *
     * @param string $selected Slug for the role that should be already selected.
     */
    public function wpDropdownRoles(string $selected = ''): void;
}

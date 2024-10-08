<?php

namespace WpService\Contracts;

interface ThePostPassword
{
    /**
     * Displays the post password.
     *
     * The password is passed through esc_attr() to ensure that it is safe for placing in an HTML attribute.
     *
     * @since 2.7.0
     */
    public function thePostPassword(): void;
}

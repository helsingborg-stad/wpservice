<?php

namespace WpService\Contracts;

interface ChoosePrimaryBlog
{
    /**
 * Handles the display of choosing a user's primary site.
 *
 * This displays the user's primary site and allows the user to choose
 * which site is primary.
 *
 * @since 3.0.0
 */
    public function choosePrimaryBlog(): void;
}

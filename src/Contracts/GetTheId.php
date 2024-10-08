<?php

namespace WpService\Contracts;

interface GetTheID
{
    /**
 * Retrieves the ID of the current item in the WordPress Loop.
 *
 * @since 2.1.0
 *
 * @return int|false The ID of the current item in the WordPress Loop. False if $post is not set.
 */
    public function getTheID(): int|false;
}

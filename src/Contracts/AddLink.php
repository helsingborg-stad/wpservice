<?php

namespace WpService\Contracts;

interface AddLink
{
/**
 * Adds a link using values provided in $_POST.
 *
 * @since 2.0.0
 *
 * @return int|\WP_Error Value 0 or WP_Error on failure. The link ID on success.
 */
    public function addLink(): int|\WP_Error;
}

<?php

namespace WpService\Contracts;

interface GetPreferredFromUpdateCore
{
/**
 * Selects the first update version from the update_core option.
 *
 * @since 2.7.0
 *
 * @return object|array|false The response from the API on success, false on failure.
 */
    public function getPreferredFromUpdateCore(): object|array|false;
}

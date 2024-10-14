<?php

namespace WpService\Contracts;

interface GetDropins
{
/**
 * Checks the wp-content directory and retrieve all drop-ins with any plugin data.
 *
 * @since 3.0.0
 * @return array[] Array of arrays of dropin plugin data, keyed by plugin file name. See get_plugin_data().
 */
    public function getDropins(): array;
}

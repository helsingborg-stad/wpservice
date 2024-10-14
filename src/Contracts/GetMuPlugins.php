<?php

namespace WpService\Contracts;

interface GetMuPlugins
{
/**
 * Checks the mu-plugins directory and retrieve all mu-plugin files with any plugin data.
 *
 * WordPress only includes mu-plugin files in the base mu-plugins directory (wp-content/mu-plugins).
 *
 * @since 3.0.0
 * @return array[] Array of arrays of mu-plugin data, keyed by plugin file name. See get_plugin_data().
 */
    public function getMuPlugins(): array;
}

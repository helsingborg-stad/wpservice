<?php

namespace WpService\Contracts;

interface WpRegisterBlockTypesFromMetadataCollection
{
/**
 * Registers all block types from a block metadata collection.
 *
 * This can either reference a previously registered metadata collection or, if the `$manifest` parameter is provided,
 * register the metadata collection directly within the same function call.
 *
 * @since 6.8.0
 * @see wp_register_block_metadata_collection()
 * @see register_block_type_from_metadata()
 *
 * @param string $path     The absolute base path for the collection ( e.g., WP_PLUGIN_DIR . '/my-plugin/blocks/' ).
 * @param string $manifest Optional. The absolute path to the manifest file containing the metadata collection, in
 *                         order to register the collection. If this parameter is not provided, the `$path` parameter
 *                         must reference a previously registered block metadata collection.
 */
    public function wpRegisterBlockTypesFromMetadataCollection(string $path, string $manifest = ''): void;
}

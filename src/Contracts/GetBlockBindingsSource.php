<?php

namespace WpService\Contracts;

interface GetBlockBindingsSource
{
    /**
 * Retrieves a registered block bindings source.
 *
 * @since 6.5.0
 *
 * @param string $sourceName The name of the source.
 * @return \WP_Block_Bindings_Source|null The registered block bindings source, or `null` if it is not registered.
 */
    public function getBlockBindingsSource(string $sourceName): \WP_Block_Bindings_Source|null;
}

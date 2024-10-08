<?php

namespace WpService\Contracts;

interface UnregisterBlockBindingsSource
{
    /**
     * Unregisters a block bindings source.
     *
     * @since 6.5.0
     *
     * @param string $sourceName Block bindings source name including namespace.
     * @return \WP_Block_Bindings_Source|false The unregistered block bindings source on success and `false` otherwise.
     */
    public function unregisterBlockBindingsSource(string $sourceName): \WP_Block_Bindings_Source|false;
}

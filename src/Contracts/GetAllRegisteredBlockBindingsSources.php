<?php

namespace WpService\Contracts;

interface GetAllRegisteredBlockBindingsSources
{
/**
 * Retrieves the list of all registered block bindings sources.
 *
 * @since 6.5.0
 *
 * @return WP_Block_Bindings_Source[] The array of registered block bindings sources.
 */
    public function getAllRegisteredBlockBindingsSources(): array;
}

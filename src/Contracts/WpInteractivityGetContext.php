<?php

namespace WpService\Contracts;

interface WpInteractivityGetContext
{
    /**
 * Gets the current Interactivity API context for a given namespace.
 *
 * The function should be used only during directive processing. If the
 * `$store_namespace` parameter is omitted, it uses the current namespace value
 * on the internal namespace stack.
 *
 * It returns an empty array when the specified namespace is not defined.
 *
 * @since 6.6.0
 *
 * @param string $storeNamespace Optional. The unique store namespace identifier.
 * @return array The context for the specified store namespace.
 */
    public function wpInteractivityGetContext(string $storeNamespace = null): array;
}

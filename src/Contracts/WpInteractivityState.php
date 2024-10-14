<?php

namespace WpService\Contracts;

interface WpInteractivityState
{
/**
 * Gets and/or sets the initial state of an Interactivity API store for a
 * given namespace.
 *
 * If state for that store namespace already exists, it merges the new
 * provided state with the existing one.
 *
 * The namespace can be omitted inside derived state getters, using the
 * namespace where the getter is defined.
 *
 * @since 6.5.0
 * @since 6.6.0 The namespace can be omitted when called inside derived state getters.
 *
 * @param string $storeNamespace The unique store namespace identifier.
 * @param array $state           Optional. The array that will be merged with the existing state for the specified
 *                                store namespace.
 * @return array The state for the specified store namespace. This will be the updated state if a $state argument was
 *               provided.
 */
    public function wpInteractivityState(string $storeNamespace = null, array $state = []): array;
}

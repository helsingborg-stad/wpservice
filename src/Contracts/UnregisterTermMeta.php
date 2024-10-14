<?php

namespace WpService\Contracts;

interface UnregisterTermMeta
{
/**
 * Unregisters a meta key for terms.
 *
 * @since 4.9.8
 *
 * @param string $taxonomy Taxonomy the meta key is currently registered for. Pass
 *                         an empty string if the meta key is registered across all
 *                         existing taxonomies.
 * @param string $metaKey The meta key to unregister.
 * @return bool True on success, false if the meta key was not previously registered.
 */
    public function unregisterTermMeta(string $taxonomy, string $metaKey): bool;
}

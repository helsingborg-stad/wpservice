<?php

namespace WpService\Contracts;

interface RegisterTermMeta
{
    /**
     * Registers a meta key for terms.
     *
     * @since 4.9.8
     *
     * @param string $taxonomy Taxonomy to register a meta key for. Pass an empty string
     *                         to register the meta key across all existing taxonomies.
     * @param string $metaKey The meta key to register.
     * @param array $args     Data used to describe the meta key when registered. See
     *                         {@see register_meta()} for a list of supported arguments.
     * @return bool True if the meta key was successfully registered, false if not.
     */
    public function registerTermMeta(string $taxonomy, string $metaKey, array $args): bool;
}

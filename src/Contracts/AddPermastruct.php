<?php

namespace WpService\Contracts;

interface AddPermastruct
{
/**
 * Adds a permalink structure.
 *
 * @since 3.0.0
 *
 * @see WP_Rewrite::add_permastruct()
 * @global WP_Rewrite $wp_rewrite WordPress rewrite component.
 *
 * @param string $name   Name for permalink structure.
 * @param string $struct Permalink structure.
 * @param array $args   Optional. Arguments for building the rules from the permalink structure,
 *                       see WP_Rewrite::add_permastruct() for full details. Default empty array.
 */
    public function addPermastruct(string $name, string $struct, array $args = []): void;
}

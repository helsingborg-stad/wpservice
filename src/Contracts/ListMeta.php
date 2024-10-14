<?php

namespace WpService\Contracts;

interface ListMeta
{
/**
 * Outputs a post's public meta data in the Custom Fields meta box.
 *
 * @since 1.2.0
 *
 * @param array[] $meta An array of meta data arrays keyed on 'meta_key' and 'meta_value'.
 */
    public function listMeta(array $meta): void;
}

<?php

namespace WpService\Contracts;

interface BlockCoreLatestPostsMigrateCategories
{
    /**
     * Handles outdated versions of the `core/latest-posts` block by converting
     * attribute `categories` from a numeric string to an array with key `id`.
     *
     * This is done to accommodate the changes introduced in #20781 that sought to
     * add support for multiple categories to the block. However, given that this
     * block is dynamic, the usual provisions for block migration are insufficient,
     * as they only act when a block is loaded in the editor.
     *
     * TODO: Remove when and if the bottom client-side deprecation for this block
     * is removed.
     *
     * @since 5.5.0
     *
     * @param array $block A single parsed block object.
     *
     * @return array The migrated block object.
     */
    public function blockCoreLatestPostsMigrateCategories(array $block): array;
}

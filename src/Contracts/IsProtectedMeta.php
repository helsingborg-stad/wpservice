<?php

namespace WpService\Contracts;

interface IsProtectedMeta
{
/**
 * Determines whether a meta key is considered protected.
 *
 * @since 3.1.3
 *
 * @param string $metaKey  Metadata key.
 * @param string $metaType Optional. Type of object metadata is for. Accepts 'post', 'comment', 'term', 'user',
 *                          or any other object type with an associated meta table. Default empty string.
 * @return bool Whether the meta key is considered protected.
 */
    public function isProtectedMeta(string $metaKey, string $metaType = ''): bool;
}

<?php

namespace WpService\Contracts;

interface UnregisterPostMeta
{
/**
 * Unregisters a meta key for posts.
 *
 * @since 4.9.8
 *
 * @param string $postType Post type the meta key is currently registered for. Pass
 *                          an empty string if the meta key is registered across all
 *                          existing post types.
 * @param string $metaKey  The meta key to unregister.
 * @return bool True on success, false if the meta key was not previously registered.
 */
    public function unregisterPostMeta(string $postType, string $metaKey): bool;
}

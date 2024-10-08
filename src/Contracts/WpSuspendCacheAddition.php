<?php

namespace WpService\Contracts;

interface WpSuspendCacheAddition
{
    /**
 * Temporarily suspends cache additions.
 *
 * Stops more data being added to the cache, but still allows cache retrieval.
 * This is useful for actions, such as imports, when a lot of data would otherwise
 * be almost uselessly added to the cache.
 *
 * Suspension lasts for a single page load at most. Remember to call this
 * function again if you wish to re-enable cache adds earlier.
 *
 * @since 3.3.0
 *
 * @param bool $suspend Optional. Suspends additions if true, re-enables them if false.
 *                      Defaults to not changing the current setting.
 * @return bool The current suspend setting.
 */
    public function wpSuspendCacheAddition(bool $suspend = null): bool;
}

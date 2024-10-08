<?php

namespace WpService\Contracts;

interface WpUsingExtObjectCache
{
    /**
 * Toggles `$_wp_using_ext_object_cache` on and off without directly
 * touching global.
 *
 * @since 3.7.0
 *
 * @global bool $_wp_using_ext_object_cache
 *
 * @param bool $using Whether external object cache is being used.
 * @return bool The current 'using' setting.
 */
    public function wpUsingExtObjectCache(bool $using): bool;
}

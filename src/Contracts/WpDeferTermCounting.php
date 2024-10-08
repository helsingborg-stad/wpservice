<?php

namespace WpService\Contracts;

interface WpDeferTermCounting
{
    /**
 * Enables or disables term counting.
 *
 * @since 2.5.0
 *
 * @param bool $defer Optional. Enable if true, disable if false.
 * @return bool Whether term counting is enabled or disabled.
 */
    public function wpDeferTermCounting(bool $defer = null): bool;
}

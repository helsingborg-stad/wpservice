<?php

namespace WpService\Contracts;

interface WpGetOriginalReferer
{
    /**
 * Retrieves original referer that was posted, if it exists.
 *
 * @since 2.0.4
 *
 * @return string|false Original referer URL on success, false on failure.
 */
    public function wpGetOriginalReferer(): string|false;
}

<?php

namespace WpService\Contracts;

interface WpmuUpdateBlogsDate
{
    /**
 * Updates the last_updated field for the current site.
 *
 * @since MU (3.0.0)
 */
    public function wpmuUpdateBlogsDate(): void;
}

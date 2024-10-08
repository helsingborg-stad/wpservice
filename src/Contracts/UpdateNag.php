<?php

namespace WpService\Contracts;

interface UpdateNag
{
    /**
 * Returns core update notification message.
 *
 * @since 2.3.0
 *
 * @global string $pagenow The filename of the current screen.
 * @return void|false
 */
    public function updateNag(): mixed;
}

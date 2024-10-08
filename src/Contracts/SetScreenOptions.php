<?php

namespace WpService\Contracts;

interface SetScreenOptions
{
    /**
 * Saves option for number of rows when listing posts, pages, comments, etc.
 *
 * @since 2.8.0
 */
    public function setScreenOptions(): void;
}

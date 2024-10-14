<?php

namespace WpService\Contracts;

interface Bloginfo
{
/**
 * Displays information about the current site.
 *
 * @since 0.71
 *
 * @see get_bloginfo() For possible `$show` values
 *
 * @param string $show Optional. Site information to display. Default empty.
 */
    public function bloginfo(string $show = ''): void;
}

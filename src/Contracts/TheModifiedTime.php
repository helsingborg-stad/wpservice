<?php

namespace WpService\Contracts;

interface TheModifiedTime
{
    /**
 * Displays the time at which the post was last modified.
 *
 * @since 2.0.0
 *
 * @param string $format Optional. Format to use for retrieving the time the post
 *                       was modified. Accepts 'G', 'U', or PHP date format.
 *                       Defaults to the 'time_format' option.
 */
    public function theModifiedTime(string $format = ''): void;
}

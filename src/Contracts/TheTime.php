<?php

namespace WpService\Contracts;

interface TheTime
{
    /**
 * Displays the time at which the post was written.
 *
 * @since 0.71
 *
 * @param string $format Optional. Format to use for retrieving the time the post
 *                       was written. Accepts 'G', 'U', or PHP date format.
 *                       Defaults to the 'time_format' option.
 */
    public function theTime(string $format): void;
}

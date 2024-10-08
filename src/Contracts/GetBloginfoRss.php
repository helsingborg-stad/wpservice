<?php

namespace WpService\Contracts;

interface GetBloginfoRss
{
    /**
 * Retrieves RSS container for the bloginfo function.
 *
 * You can retrieve anything that you can using the get_bloginfo() function.
 * Everything will be stripped of tags and characters converted, when the values
 * are retrieved for use in the feeds.
 *
 * @since 1.5.1
 *
 * @see get_bloginfo() For the list of possible values to display.
 *
 * @param string $show See get_bloginfo() for possible values.
 * @return string
 */
    public function getBloginfoRss(string $show = ''): string;
}

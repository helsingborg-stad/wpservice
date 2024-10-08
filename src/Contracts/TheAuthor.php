<?php

namespace WpService\Contracts;

interface TheAuthor
{
    /**
 * Displays the name of the author of the current post.
 *
 * The behavior of this function is based off of old functionality predating
 * get_the_author(). This function is not deprecated, but is designed to echo
 * the value from get_the_author() and as an result of any old theme that might
 * still use the old behavior will also pass the value from get_the_author().
 *
 * The normal, expected behavior of this function is to echo the author and not
 * return it. However, backward compatibility has to be maintained.
 *
 * @since 0.71
 *
 * @see get_the_author()
 * @link https://developer.wordpress.org/reference/functions/the_author/
 *
 * @param string $deprecated      Deprecated.
 * @param bool $deprecatedEcho Deprecated. Use get_the_author(). Echo the string or return it.
 * @return string The author's display name, from get_the_author().
 */
    public function theAuthor(string $deprecated, bool $deprecatedEcho): string;
}

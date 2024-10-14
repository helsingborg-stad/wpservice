<?php

namespace WpService\Contracts;

interface TheAuthorLink
{
/**
 * Displays either author's link or author's name.
 *
 * If the author has a home page set, echo an HTML link, otherwise just echo the
 * author's name.
 *
 * @link https://developer.wordpress.org/reference/functions/the_author_link/
 *
 * @since 2.1.0
 */
    public function theAuthorLink(): void;
}

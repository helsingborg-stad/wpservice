<?php

namespace WpService\Contracts;

interface GetTheAuthorLink
{
    /**
     * Retrieves either author's link or author's name.
     *
     * If the author has a home page set, return an HTML link, otherwise just return
     * the author's name.
     *
     * @since 3.0.0
     *
     * @global WP_User $authordata The current author's data.
     *
     * @return string An HTML link if the author's URL exists in user meta,
     *                otherwise the result of get_the_author().
     */
    public function getTheAuthorLink(): string;
}

<?php

namespace WpService\Contracts;

interface NextPostsLink
{
    /**
     * Displays the next posts page link.
     *
     * @since 0.71
     *
     * @param string $label    Content for link text.
     * @param int $maxPage Optional. Max pages. Default 0.
     */
    public function nextPostsLink(string $label = null, int $maxPage = 0): void;
}

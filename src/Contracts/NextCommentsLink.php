<?php

namespace WpService\Contracts;

interface NextCommentsLink
{
/**
 * Displays the link to the next comments page.
 *
 * @since 2.7.0
 *
 * @param string $label    Optional. Label for link text. Default empty.
 * @param int $maxPage Optional. Max page. Default 0.
 */
    public function nextCommentsLink(string $label = '', int $maxPage = 0): void;
}

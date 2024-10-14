<?php

namespace WpService\Contracts;

interface GetSelfLink
{
/**
 * Returns the link for the currently displayed feed.
 *
 * @since 5.3.0
 *
 * @return string Correct link for the atom:self element.
 */
    public function getSelfLink(): string;
}

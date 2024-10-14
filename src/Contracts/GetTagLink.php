<?php

namespace WpService\Contracts;

interface GetTagLink
{
/**
 * Retrieves the link to the tag.
 *
 * @since 2.3.0
 *
 * @see get_term_link()
 *
 * @param int|object $tag Tag ID or object.
 * @return string Link on success, empty string if tag does not exist.
 */
    public function getTagLink(int|object $tag): string;
}

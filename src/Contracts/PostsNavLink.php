<?php

namespace WpService\Contracts;

interface PostsNavLink
{
    /**
 * Displays the post pages link navigation for previous and next pages.
 *
 * @since 0.71
 *
 * @param string $sep      Optional. Separator for posts navigation links. Default empty.
 * @param string $prelabel Optional. Label for previous pages. Default empty.
 * @param string $nxtlabel Optional Label for next pages. Default empty.
 */
    public function postsNavLink(string $sep, string $prelabel, string $nxtlabel): void;
}

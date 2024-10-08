<?php

namespace WpService\Contracts;

interface GetTheContent
{
    /**
 * Retrieves the post content.
 *
 * @since 0.71
 * @since 5.2.0 Added the `$post` parameter.
 *
 * @global int   $page      Page number of a single post/page.
 * @global int   $more      Boolean indicator for whether single post/page is being viewed.
 * @global bool  $preview   Whether post/page is in preview mode.
 * @global array $pages     Array of all pages in post/page. Each array element contains
 *                          part of the content separated by the `<!--nextpage-->` tag.
 * @global int   $multipage Boolean indicator for whether multiple pages are in play.
 *
 * @param string $moreLinkText Optional. Content for when there is more text.
 * @param bool $stripTeaser   Optional. Strip teaser content before the more text. Default false.
 * @param WP_Post|object|int $post           Optional. WP_Post instance or Post ID/object. Default null.
 * @return string
 */
    public function getTheContent(string $moreLinkText = null, bool $stripTeaser = false, int|object $post = null): string;
}

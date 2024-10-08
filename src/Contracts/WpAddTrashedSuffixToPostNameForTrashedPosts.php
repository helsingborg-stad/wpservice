<?php

namespace WpService\Contracts;

interface WpAddTrashedSuffixToPostNameForTrashedPosts
{
    /**
 * Adds a suffix if any trashed posts have a given slug.
 *
 * Store its desired (i.e. current) slug so it can try to reclaim it
 * if the post is untrashed.
 *
 * For internal use.
 *
 * @since 4.5.0
 * @access private
 *
 * @param string $postName Post slug.
 * @param int $postId   Optional. Post ID that should be ignored. Default 0.
 */
    public function wpAddTrashedSuffixToPostNameForTrashedPosts(string $postName, int $postId = 0): void;
}

<?php

namespace WpService\Contracts;

interface GetTheTagList
{
    /**
 * Retrieves the tags for a post formatted as a string.
 *
 * @since 2.3.0
 *
 * @param string $before  Optional. String to use before the tags. Default empty.
 * @param string $sep     Optional. String to use between the tags. Default empty.
 * @param string $after   Optional. String to use after the tags. Default empty.
 * @param int $postId Optional. Post ID. Defaults to the current post ID.
 * @return string|false|\WP_Error A list of tags on success, false if there are no terms,
 *                               WP_Error on failure.
 */
    public function getTheTagList(string $before = '', string $sep = '', string $after = '', int $postId = 0): string|false|\WP_Error;
}

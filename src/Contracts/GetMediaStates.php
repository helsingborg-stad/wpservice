<?php

namespace WpService\Contracts;

interface GetMediaStates
{
/**
 * Retrieves an array of media states from an attachment.
 *
 * @since 5.6.0
 *
 * @param \WP_Post $post The attachment to retrieve states for.
 * @return string[] Array of media state labels keyed by their state.
 */
    public function getMediaStates(\WP_Post $post): array;
}

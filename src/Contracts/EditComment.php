<?php

namespace WpService\Contracts;

interface EditComment
{
/**
 * Updates a comment with values provided in $_POST.
 *
 * @since 2.0.0
 * @since 5.5.0 A return value was added.
 *
 * @return int|\WP_Error The value 1 if the comment was updated, 0 if not updated.
 *                      A WP_Error object on failure.
 */
    public function editComment(): int|\WP_Error;
}

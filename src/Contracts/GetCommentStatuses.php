<?php

namespace WpService\Contracts;

interface GetCommentStatuses
{
/**
 * Retrieves all of the WordPress supported comment statuses.
 *
 * Comments have a limited set of valid status values, this provides the comment
 * status values and descriptions.
 *
 * @since 2.7.0
 *
 * @return string[] List of comment status labels keyed by status.
 */
    public function getCommentStatuses(): array;
}

<?php

namespace WpService\Contracts;

interface GetCommentToEdit
{
    /**
     * Returns a WP_Comment object based on comment ID.
     *
     * @since 2.0.0
     *
     * @param int $id ID of comment to retrieve.
     * @return \WP_Comment|false Comment if found. False on failure.
     */
    public function getCommentToEdit(int $id): \WP_Comment|false;
}

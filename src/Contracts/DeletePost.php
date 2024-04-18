<?php

namespace WpService\Contracts;

interface DeletePost
{
    /**
     * Delete a post.
     *
     * @param int  $postId      The ID of the post to delete.
     * @param bool $forceDelete Whether to force delete the post.
     * @return void
     */
    public function deletePost(int $postId, bool $forceDelete): void;
}

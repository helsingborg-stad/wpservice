<?php

namespace WpService\Contracts;

interface WpCommentTrashnotice
{
/**
 * Outputs 'undo move to Trash' text for comments.
 *
 * @since 2.9.0
 */
    public function wpCommentTrashnotice(): void;
}

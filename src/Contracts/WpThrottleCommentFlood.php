<?php

namespace WpService\Contracts;

interface WpThrottleCommentFlood
{
    /**
     * Determines whether a comment should be blocked because of comment flood.
     *
     * @since 2.1.0
     *
     * @param bool $block            Whether plugin has already blocked comment.
     * @param int $timeLastcomment Timestamp for last comment.
     * @param int $timeNewcomment  Timestamp for new comment.
     * @return bool Whether comment should be blocked.
     */
    public function wpThrottleCommentFlood(bool $block, int $timeLastcomment, int $timeNewcomment): bool;
}
